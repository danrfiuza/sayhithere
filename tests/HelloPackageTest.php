<?php
namespace Tests\Fiuza\App;

use PHPUnit\Framework\TestCase;
use Fiuza\App\HelloPackage;

class HelloPackageTest extends TestCase
{
    public function testSayHiThere()
    {
        $this->assertEquals('Hi there!',(new HelloPackage())->sayHithere());
    }
}