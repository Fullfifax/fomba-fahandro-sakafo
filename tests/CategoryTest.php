<?php

namespace App\Tests;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testIsTrue() {
        $category = new Category();

        $category->setName('trueName')
            ->setSlug('trueSlug');
        
        $this->assertTrue($category->getName() === 'trueName');
        $this->assertTrue($category->getSlug() === 'trueSlug');
    }

    public function testIsFalse() {
        $category = new Category();

        $category->setName('trueName')
            ->setSlug('trueSlug');
        
        $this->assertFalse($category->getName() === 'falseName');
        $this->assertFalse($category->getSlug() === 'falseSlug');
    }

    public function testIsEmpty() {
        $category = new Category();
        
        $this->assertEmpty($category->getName());
        $this->assertEmpty($category->getSlug());
    }
}
