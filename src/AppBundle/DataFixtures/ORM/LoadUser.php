<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\NewUser;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface, ContainerAwareInterface
{
    private $container;


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
         $user = new NewUser();
         $user -> setUsername('admin');
         $user ->setEmail('admin@admin.com');

         $encoder = $this-> container-> get('security.password_encoder');
         $password = $encoder -> encodePassword($user, '0000');
         $user -> setPassword($password);

         $manager -> persist($user);
         $manager -> flush();

    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this -> container = $container;
    }
}