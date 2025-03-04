<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    //  /**
    //   * @return Message[] Returns an array of Message objects
    //   */
    
    // public function findByConversationId($id)
    // {
    //     $query = $this->getEntityManager()->createQuery('
    //     SELECT mc, m
    //     FROM App\Entity\Message m
    //     JOIN mc.question mc
    //     WHERE m.question = :question
    //     AND a.validate = true
    //     ')
    //     ->setParameter('question', $question);
   

    //     return $query->getResult();
    // }
    

    /*
    public function findOneBySomeField($value): ?Message
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
