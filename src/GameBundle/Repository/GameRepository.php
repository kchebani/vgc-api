<?php

namespace GameBundle\Repository;

use Doctrine\ORM\EntityRepository;
use UserBundle\Entity\User;

/**
 * GameRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GameRepository extends EntityRepository
{
    public function findUserGameByIgdbId(User $user, $igdbId)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('ug')
            ->from('GameBundle:UserGame', 'ug')
            ->innerJoin('ug.game', 'g')
            ->where('ug.user = :user')
            ->andWhere('g.igdbId = :igdb_id')
            ->setParameter('user', $user)
            ->setParameter('igdb_id', $igdbId)
            ->getQuery()
            ->getResult();
    }
}
