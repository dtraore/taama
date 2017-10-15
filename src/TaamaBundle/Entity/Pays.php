<?php
/**
 * Created by PhpStorm.
 * User: diadietraore
 * Date: 14/10/2017
 * Time: 21:06
 */

namespace TaamaBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Colis
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="TaamaBundle\Entity\Repository\PaysRepository")
 */
class Pays {

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
     * @var int @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    protected $code_pays;

    /**
     * @ORM\OneToMany(targetEntity="\TaamaBundle\Entity\Ville", mappedBy="pays")
     */
    protected $villes;

    function __construct($name, $code_pays)
    {
        $this->name = $name;
        $this->code_pays = $code_pays;
    }


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
    public function getCodePays()
    {
        return $this->code_pays;
    }

    /**
     * @param int $code_pays
     */
    public function setCodePays($code_pays)
    {
        $this->code_pays = $code_pays;
    }

    /**
     * @return mixed
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * @param mixed $villes
     */
    public function setVilles($villes)
    {
        $this->villes = $villes;
    }

    public function __toString()
    {
        return (string)$this->name;
    }


}