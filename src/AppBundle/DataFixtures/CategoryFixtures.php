<?php

namespace Project\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;

class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category=new Category();
        $category->setCategory("categ");
        $manager->persist($category);

        $category1=new Category();
        $category1->setCategory("cat");
        $manager->persist($category1);

        $manager->flush();
    }
    public function getOrder()
    {
        return 1;
    }
}
