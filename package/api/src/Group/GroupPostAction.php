<?php

namespace Api\Group;

use Api\Character\CharacterEntity;
use Doctrine\ORM\Query;
use Spiffy\Framework\Action\AbstractAction;
use Spiffy\View\JsonModel;

class GroupPostAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function __invoke()
    {
        try {
        $request = $this->getRequest();
        $params = json_decode($request->getContent(), true);

        $character = isset($params['character']) ? $params['character'] : null;
        $event = isset($params['event']) ? $params['event'] : null;
        $eventType = isset($params['event_type']) ? $params['event_type'] : null;
        $server = isset($params['server']) ? $params['server'] : null;
        $notes = isset($params['notes']) ? $params['notes'] : null;

        if (!$character || !$event || !$server) {
            return new JsonModel(['error' => 'missing required data']);
        }

        $i = $this->getInjector();

        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $i->nvoke('doctrine-orm.main');
        $cr = $em->getRepository('Api\Character\CharacterEntity');
        $ce = $cr->findOneBy(['name' => $character]);

        if (!$ce) {
            $ce = new CharacterEntity();
            $ce->setCode('test');
            $ce->setName($character);
            $em->persist($ce);
        }

        $group = new GroupEntity();
        $group->setCharacter($ce);
        $group->setEventType($em->getReference('Api\Event\EventTypeEntity', $eventType));
        $group->setEvent($em->getReference('Api\Event\EventEntity', $event));
        $group->setServer($em->getReference('Api\Server\ServerEntity', $server));
        $group->setNotes($notes);
        $em->persist($group);
        $em->flush();

        return new JsonModel(['success' => 'created']);
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
