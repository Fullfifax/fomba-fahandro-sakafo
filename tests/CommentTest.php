<?php

namespace App\Tests;

use App\Entity\User;
use DateTimeImmutable;
use App\Entity\Comment;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{
    public function testIsTrue() {
        $comment = new Comment();
        $dateNow = new DateTimeImmutable();
        $user = new User();

        $comment->setContent('trueContent')
            ->setCreatedAt($dateNow)
            ->setUser($user);
        
        $this->assertTrue($comment->getContent() === 'trueContent');
        $this->assertTrue($comment->getCreatedAt() === $dateNow);
        $this->assertTrue($comment->getUser() === $user);
    }

    public function testIsFalse() {
        $comment = new Comment();
        $dateNow = new DateTimeImmutable();
        $user = new User();

        $comment->setContent('trueContent')
            ->setCreatedAt($dateNow)
            ->setUser($user);
        
        $this->assertFalse($comment->getContent() === 'falseContent');
        $this->assertFalse($comment->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($comment->getUser() === new User());
    }

    public function testIsEmpty() {
        $comment = new Comment();
        
        $this->assertEmpty($comment->getContent());
        $this->assertEmpty($comment->getCreatedAt());
        $this->assertEmpty($comment->getUser());
    }
}
