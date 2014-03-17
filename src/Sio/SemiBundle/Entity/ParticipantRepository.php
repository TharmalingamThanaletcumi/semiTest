<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ParticipantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParticipantRepository extends EntityRepository
{
	
	public function findAllParticipant() 
	{
		$em = $this -> getEntityManager();
		$query = $em -> createQuery("SELECT part FROM SioSemiBundle:Participant part ");
		return $query -> getResult();
	}
	
	public function findNbParticipant() 
	{
		$em = $this -> getEntityManager();
		$query = $em -> createQuery("SELECT COUNT(part.id) FROM SioSemiBundle:Participant part ");
		return $query -> getSingleScalarResult();
	}
	
	
}
