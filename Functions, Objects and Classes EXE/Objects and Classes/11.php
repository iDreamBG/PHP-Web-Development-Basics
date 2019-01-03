<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    public  function __toString(){
        return "{$this->getName()} - {$this->getAge()}".PHP_EOL;
    }

}

$n = intval(readline());

while ($n-- > 0){
    $input = explode(' ', readline());

    $name = $input[0];
    $age = $input[1];

    $persons[] = new Person02($name, $age);
}

$filteredPeople = array_filter($persons, function (Person02 $person){
    return $person->getAge() > 30;
});

usort($filteredPeople, function (Person02 $p1, Person02 $p2){
   return $p1->getName() <=> $p2->getName();
});

foreach ($filteredPeople as $person){
   echo $person;
}