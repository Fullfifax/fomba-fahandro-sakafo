<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testIsTrue() {
        $user = new User();

        $user->setEmail('true@gmail.com')
            ->setPassword('truePassword')
            ->setName('trueName')
            ->setFirstname('trueFirstname')
            ->setNumberPhone('123456789')
            ->setAbout('trueAbout')
            ->setFacebook('trueFacebook');
        
        $this->assertTrue($user->getEmail() === 'true@gmail.com');
        $this->assertTrue($user->getPassword() === 'truePassword');
        $this->assertTrue($user->getName() === 'trueName');
        $this->assertTrue($user->getFirstname() === 'trueFirstname');
        $this->assertTrue($user->getNumberPhone() === '123456789');
        $this->assertTrue($user->getAbout() === 'trueAbout');
        $this->assertTrue($user->getFacebook() === 'trueFacebook');
    }

    public function testIsFalse() {
        $user = new User();

        $user->setEmail('true@gmail.com')
            ->setPassword('truePassword')
            ->setName('trueName')
            ->setFirstname('trueFirstname')
            ->setNumberPhone('123456789')
            ->setAbout('trueAbout')
            ->setFacebook('trueFacebook');
        
        $this->assertFalse($user->getEmail() === 'false@gmail.com');
        $this->assertFalse($user->getPassword() === 'falsePassword');
        $this->assertFalse($user->getName() === 'falseName');
        $this->assertFalse($user->getFirstname() === 'falseFirstname');
        $this->assertFalse($user->getNumberPhone() === '987654321');
        $this->assertFalse($user->getAbout() === 'falseAbout');
        $this->assertFalse($user->getFacebook() === 'falseFacebook');
    }

    public function testIsEmpty() {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getName());
        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getNumberPhone());
        $this->assertEmpty($user->getAbout());
        $this->assertEmpty($user->getFacebook());
    }
}
