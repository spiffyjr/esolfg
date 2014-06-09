<?php

namespace Api\Group;

use Doctrine\ORM\Query;
use Spiffy\Framework\Action\AbstractAction;
use Spiffy\View\JsonModel;

class GroupGetAction extends AbstractAction
{
    /**
     * {@inheritDoc}
     */
    public function __invoke()
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getInjector()->get('doctrine-orm.main');
        $qb = $em
            ->getRepository('Api\Group\GroupEntity')
            ->createQueryBuilder('g');

        $qb
            ->select('g,c,e,et,s')
            ->leftJoin('g.character', 'c')
            ->leftJoin('g.event', 'e')
            ->leftJoin('g.eventType', 'et')
            ->leftJoin('g.server', 's')
            ->orderBy('g.createdAt', 'desc')
            ->setMaxResults(20);

        $request = $this->getRequest();
        if ($request->query->get('since')) {
            $qb->where($qb->expr()->gt('g.createdAt', $request->query->get('since')));
        }

        $result = $qb->getQuery()->execute(null, Query::HYDRATE_ARRAY);
        foreach ($result as &$row) {
            $row['createdAt'] = $row['createdAt']->format(\DateTime::ISO8601);
        }

        return new JsonModel($result);
    }
}
