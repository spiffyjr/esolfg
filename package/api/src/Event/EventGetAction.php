<?php

namespace Api\Event;

use Doctrine\ORM\Query;
use Spiffy\Framework\Action\AbstractAction;
use Spiffy\View\JsonModel;

class EventGetAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function __invoke()
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getInjector()->get('doctrine-orm.main');
        $qb = $em
            ->getRepository('Api\Event\EventEntity')
            ->createQueryBuilder('event');

        $qb
            ->select('event,types')
            ->leftJoin('event.types', 'types');

        return new JsonModel($qb->getQuery()->execute(null, Query::HYDRATE_ARRAY));
    }
}
