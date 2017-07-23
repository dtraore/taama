<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    private $facebookId;
    private $facebookAccessToken;
    
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
}

