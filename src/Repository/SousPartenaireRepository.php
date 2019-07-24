<?php

namespace App\Repository;

use App\Entity\SousPartenaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SousPartenaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method SousPartenaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method SousPartenaire[]    findAll()
 * @method SousPartenaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousPartenaireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SousPartenaire::class);
    }

    // /**
    //  * @return SousPartenaire[] Returns an array of SousPartenaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SousPartenaire
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
