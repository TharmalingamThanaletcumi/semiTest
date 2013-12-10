<?php

namespace Sio\SemiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Academie
*
* @ORM\Table(name="academie")
* @ORM\Entity(repositoryClass="Sio\SemiBundle\Entity\AcademieRepository")
*/
class Academie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

}