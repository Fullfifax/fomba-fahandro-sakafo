<?php

namespace App\Tests;

use DateTime;
use App\Entity\User;
use App\Entity\Recipe;
use DateTimeImmutable;
use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class RecipeTest extends TestCase
{
    public function testIsTrue() {
        $recipe = new Recipe();
        $user = new User();
        $category = new Category();
        $dateNow = new DateTimeImmutable();

        $recipe->setName('trueName')
            ->setIngredients('trueIngredients')
            ->setPreparation('truePreparation')
            ->setCreatedAt($dateNow)
            ->setFile('trueFile')
            ->setSlug('trueSlug')
            ->setTotalLikes(1)
            ->setUser($user)
            ->addCategory($category);
        
        $this->assertTrue($recipe->getName() === 'trueName');
        $this->assertTrue($recipe->getIngredients() === 'trueIngredients');
        $this->assertTrue($recipe->getPreparation() === 'truePreparation');
        $this->assertTrue($recipe->getCreatedAt() === $dateNow);
        $this->assertTrue($recipe->getFile() === 'trueFile');
        $this->assertTrue($recipe->getSlug() === 'trueSlug');
        $this->assertTrue($recipe->getTotalLikes() === 1);
        $this->assertTrue($recipe->getUser() === $user);
        $this->assertContains($category, $recipe->getCategory());
    }

    public function testIsFalse() {
        $recipe = new Recipe();
        $user = new User();
        $category = new Category();
        $dateNow = new DateTimeImmutable();

        $recipe->setName('trueName')
            ->setIngredients('trueIngredients')
            ->setPreparation('truePreparation')
            ->setCreatedAt($dateNow)
            ->setFile('trueFile')
            ->setSlug('trueSlug')
            ->setTotalLikes(1)
            ->setUser($user)
            ->addCategory($category);
        
        $this->assertFalse($recipe->getName() === 'falseName');
        $this->assertFalse($recipe->getIngredients() === 'falseIngredients');
        $this->assertFalse($recipe->getPreparation() === 'falsePreparation');
        $this->assertFalse($recipe->getCreatedAt() === new DateTime());
        $this->assertFalse($recipe->getFile() === 'falseFile');
        $this->assertFalse($recipe->getSlug() === 'falseSlug');
        $this->assertFalse($recipe->getTotalLikes() === 2);
        $this->assertFalse($recipe->getUser() === new User());
        $this->assertNotContains(new Category(), $recipe->getCategory());
    }

    public function testIsEmpty() {
        $recipe = new Recipe();
        
        $this->assertEmpty($recipe->getName());
        $this->assertEmpty($recipe->getIngredients());
        $this->assertEmpty($recipe->getPreparation());
        $this->assertEmpty($recipe->getCreatedAt());
        $this->assertEmpty($recipe->getFile());
        $this->assertEmpty($recipe->getSlug());
        $this->assertEmpty($recipe->getTotalLikes());
        $this->assertEmpty($recipe->getUser());
        $this->assertEmpty($recipe->getCategory());
    }
}
