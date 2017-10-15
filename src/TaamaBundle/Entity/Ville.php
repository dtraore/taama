<?php
/**
 * Created by PhpStorm.
 * User: diadietraore
 * Date: 14/10/2017
 * Time: 21:18
 */

namespace TaamaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="TaamaBundle\Entity\Repository\VilleRepository")
 */
class Ville {

    /**
     *
     * @var int @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @var int @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     *
     * @var int @ORM\Column(name="code_postal", type="string", length=255, nullable=true)
     */
    protected $code_postal;

    /**
     * @ORM\ManyToOne(targetEntity="TaamaBundle\Entity\Pays", inversedBy="villes")
     */
    protected $pays;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param int $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }


    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    public function __toString()
    {
        return (string)$this->name;
    }


}