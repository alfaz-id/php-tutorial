<?php

class Foo{
    private int $id;
    private ?string $name;

    // const
    public const MESSAGE='Hello PHP';

    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }


    public static function do_foo(){
        echo "www.alfaz.id".PHP_EOL;
    }

    public function to_string(){
        echo 'Your ID '.$this->getId().' and your name is '.$this->getName().PHP_EOL;
    }
}


$_foo = new Foo();
$_foo->setId(1);
$_foo->setName("Irwan");

echo $_foo->getName().PHP_EOL;
// call static funtion
Foo::do_foo();

echo Foo::MESSAGE.PHP_EOL;

//inheritance
class Bar extends Foo{

}

$bar = new Bar();
$bar->setId(2);
$bar->setName("Dodo");
echo $bar->to_string();

