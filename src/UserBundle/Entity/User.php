<?php

namespace UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use TaamaBundle\Entity\Colis;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser {
    /**
     *
     * @var int @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $firstname;
    
    /**
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    private $facebookId;
    private $facebookAccessToken;

    /**
     * @ORM\OneToMany(targetEntity="\TaamaBundle\Entity\Colis", mappedBy="transporteur")
     */
    private $colis;

    /**
     * @return mixed
     */
    public function getColis()
    {
        return $this->colis;
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    public function getFacebookId() {
        return $this->facebookId;
    }

    public function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
        return $this;
    }

    public function getFacebookAccessToken() {
        return $this->facebookAccessToken;
    }

    public function setFacebookAccessToken($facebookAccessToken) {
        $this->facebookAccessToken = $facebookAccessToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Liste des rôles pour l'agenda de la MAIF
     * @return [type] [description]
     */
    public static function getRoleChoices($super_admin = false)
    {
        $roles = array();
        if ($super_admin) {
            $roles = array('ROLE_SUPER_ADMIN' => 'fos.rc2c_admin.role');
        }
        $roles = $roles+array(
                'ROLE_ADMIN' => 'fos.admin.role',
                'ROLE_USER'  => 'fos.user.role',

            );

        return $roles;
    }

}

