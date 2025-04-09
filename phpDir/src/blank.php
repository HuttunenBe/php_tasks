<?php echo "Welcome to our Pet shop";

$petName = "Cat"; 
$petAge = 2; 
echo "Our pet is called $petname and is $petAge";

$pets = ["Fluffy", "Rex", "Mitten"];
echo "Our Pets: " . $pets[0] . ", " .$pets[2];


class Pet {
    public $name; 
    public $age;


    public function _construct ($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    public function sayHello(){
        echo "Hi, I'm $this->name and I'm $this-> age yeard old\n";
    }
}

$myPet  = new Pet ("Risu", 5); 
$myPet -> sayHello();

$myPet = new Pet ("Ulla", 6);
$myPet -> sayHello();