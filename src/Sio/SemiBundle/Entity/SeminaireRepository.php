<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SeminaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeminaireRepository extends EntityRepository
{
		public function findAllSeminaire() 
		{
			$em = $this -> getEntityManager();
			$query = $em -> createQuery("SELECT sem FROM SioSemiBundle:Seminaire sem ");
			return $query -> getResult();
		}
}
