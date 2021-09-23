<?php

namespace App\Repository;

use App\Entity\MediaObject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediaObject|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediaObject|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediaObject[]    findAll()
 * @method MediaObject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaObjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediaObject::class);
    }

    // /**
    //  * @return Pays[] Returns an array of Pays objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pays
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
