<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * FosUserLogin
 *
 * @ORM\Table(name="fos_user_login")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FosUserLoginRepository")
 */
class FosUserLogin extends BaseUser

{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

