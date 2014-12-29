<?php

namespace Blog\ModelBundle\Repository;
        
use Doctrine\ORM\EntityRepository;
/**
 * Class PostRepository
 */
class PostRepository extends EntityRepository
{
    
    /**
     * find latest
     * 
     * @param int $num how many post to get
     * 
     * @return array
     */
    public function findLatest($num)
    {
        $qb = $this->getQueryBuilder()->orderBy('p.createdAt','desc')->setMaxResults($num);
        return $qb->getQuery()->getResult();
    }
    
    /**
     * find the first post
     * 
     * @return Post
     */
    public function findFirst()
    {
        $qb = $this->getQueryBuilder()->orderBy('p.id','asc')->setMaxResults(1);
        return $qb->getQuery()->getSingleResult();
    }

    private function getQueryBuilder()
    {
        $em = $this->getEntityManager();
        
        $qb = $em->getRepository('ModelBundle:Post')->createQueryBuilder('p');
        
        return $qb;
    }
}