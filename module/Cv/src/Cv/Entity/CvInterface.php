<?php

namespace Cv\Entity;

use Doctrine\Common\Collections\Collection as CollectionInterface;
use Core\Entity\EntityInterface;
use Core\Entity\IdentifiableEntityInterface;

interface CvInterface extends EntityInterface, IdentifiableEntityInterface
{
    
    /**
     * @return CollectionInterface $educations
     */
    public function getEducations();
    
    /**
     * @param CollectionInterface $educations
     */
    public function setEducations(CollectionInterface $educations);
    
    /**
     * @return the $employments
     */
    public function getEmployments();
    
    /**
     * @param field_type $employments
     */
    public function setEmployments(CollectionInterface $employments);
}
