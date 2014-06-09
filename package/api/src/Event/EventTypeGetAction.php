<?php

namespace Api\Event;

use Doctrine\ORM\Query;
use Spiffy\Framework\Action\AbstractAction;
use Spiffy\View\JsonModel;

class EventTypeGetAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function __invoke($id)
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getInjector()->get('doctrine-orm.main');
        $qb = $em
            ->getRepository('Api\Event\EventTypeEntity')
            ->createQueryBuilder('event_type');

        $qb
            ->leftJoin('event_type.events', 'events')
            ->andWhere($qb->expr()->eq('events.id', $id));

        try {
            return new JsonModel($qb->getQuery()->execute(null, Query::HYDRATE_ARRAY));
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
