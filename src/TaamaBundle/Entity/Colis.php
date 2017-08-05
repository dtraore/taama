<?php
namespace TaamaBundle\Entity;

use UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Colis
 *
 * @ORM\Table(name="colis")
 * @ORM\Entity(repositoryClass="TaamaBundle\Entity\Repository\ColisRepository")
 */
class Colis
{
    /**
     *
     * @var int @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @var int @ORM\Column(name="poids", type="integer")
     */
    protected $poids;
    /**
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User", inversedBy="colis")
     */
    private $transporteur;

    public function setCategory(User $transporteur)
    {
        $this->transporteur = $transporteur;
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
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param int $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return mixed
     */
    public function getTransporteur()
    {
        return $this->transporteur;
    }

    /**
     * @param mixed $transporteur
     */
    public function setTransporteur($transporteur)
    {
        $this->transporteur = $transporteur;
    }



}
