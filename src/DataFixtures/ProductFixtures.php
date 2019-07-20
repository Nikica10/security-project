<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $product1 = new Product();
         $product1->setName('Televizor');
         $product1->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.');
         $product1->setPrice(255);
         $manager->persist($product1);
         $manager->flush();

        $product2 = new Product();
        $product2->setName('Vesmasina');
        $product2->setDescription('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.');
        $product2->setPrice(642);
        $manager->persist($product2);
        $manager->flush();
    }
}
