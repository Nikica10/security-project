<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user1 = new User();
        $user1->setEmail('nikica@mail.com');
        $user1->setRoles(['ROLE_ADMIN']);
        $user1->setFirstName('Nikica');
        $user1->setPassword($this->passwordEncoder->encodePassword($user1, 'test12345'));
        $user1->setTwitterUsername('nikicaTwitter');
        $manager->persist($user1);
        $manager->flush($user1);

        $user2 = new User();
        $user2->setEmail('ivana@mail.com');
        $user2->setRoles(['ROLE_USER']);
        $user2->setFirstName('Ivana');
        $user2->setPassword($this->passwordEncoder->encodePassword($user1, 'test12345'));
        $manager->persist($user2);
        $manager->flush($user2);
    }
}
