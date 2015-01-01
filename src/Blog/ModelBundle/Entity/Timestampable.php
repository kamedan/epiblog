<?php
namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Timestampable abstract class to define created and updated behaviour
 * @ORM\MappedSuperClass
 */
abstract class Timestampable
{
    /**
     * @var \DateTime
     * 
     *@Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    
    /**
     * @var \DateTime
     * 
     *@Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;
   
    
    
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Timestampable
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    
    /**
     * Set updatedAt
     *
     * @param \DateTime $createdAt
     * @return Timestampable
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return /DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

