<?php

namespace Api\Server;

use Doctrine\ORM\Query;
use Spiffy\Framework\Action\AbstractAction;
use Spiffy\View\JsonModel;

class ServerGetAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function __invoke()
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getInjector()->get('doctrine-orm.main');
        $qb = $em
            ->getRepository('Api\Server\ServerEntity')
            ->createQueryBuilder('server');

        return new JsonModel($qb->getQuery()->execute(null, Query::HYDRATE_ARRAY));
    }
}
