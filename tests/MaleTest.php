<?php
use PHPUnit\Framework\TestCase;

require_once '../src/oop/Male.php';

class MaleTest extends TestCase
{
    /** @test  */
    public function toStringTes(): void
    {

        $male = new Male();
        $male->setName("Alfaz");
        $male->setAge(30);
        $name = $male->toString();

        $this->assertTrue($name !=null);

    }

}
