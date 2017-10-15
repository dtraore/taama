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

    /**
     * @ORM\ManyToOne(targetEntity="\TaamaBundle\Entity\Ville")
     */
    private $ville_depart;

    /**
     * @ORM\ManyToOne(targetEntity="\TaamaBundle\Entity\Ville")
     */
    private $ville_arrivee;

    /**
     * @var int @ORM\Column(name="date_depart", type="datetime", nullable=true)
     */
    private $date_depart;

    /**
     * @var int @ORM\Column(name="date_arrive", type="datetime", nullable=true)
     */
    private $date_arrivee;

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

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->ville_depart;
    }

    /**
     * @param mixed $ville_depart
     */
    public function setVilleDepart($ville_depart)
    {
        $this->ville_depart = $ville_depart;
    }

    /**
     * @return mixed
     */
    public function getVilleArrivee()
    {
        return $this->ville_arrivee;
    }

    /**
     * @param mixed $ville_arrivee
     */
    public function setVilleArrivee($ville_arrivee)
    {
        $this->ville_arrivee = $ville_arrivee;
    }

    /**
     * @return mixed
     */
    public function getDateDepart()
    {
        return $this->date_depart;
    }

    /**
     * @param mixed $date_depart
     */
    public function setDateDepart($date_depart)
    {
        $this->date_depart = $date_depart;
    }

    /**
     * @return mixed
     */
    public function getDateArrivee()
    {
        return $this->date_arrivee;
    }

    /**
     * @param mixed $date_arrivee
     */
    public function setDateArrivee($date_arrivee)
    {
        $this->date_arrivee = $date_arrivee;
    }




}
