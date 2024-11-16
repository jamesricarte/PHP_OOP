<?php

class phpClass
{
    var $var1;
    var $var2 = "constant string";

    function myFunc($arg1, $arg2) {}
}

// Basic class declaration
class Fruit
{
    var $quantity;
    var $color;
    var $arithmeticTotal;

    function setQuantity($par)
    {
        $this->quantity = 'Quantity: ' . $par;
    }

    function getQuantity()
    {
        echo $this->quantity . "<br/>";
    }

    function setColor($color)
    {
        $this->color = "Color: " . $color;
    }

    function getColor()
    {
        echo $this->color . "<br>";
    }
    function setArithmeticTotal($par, $par2)
    {
        $this->arithmeticTotal = "Arithmetic Total: " . $par + $par2;
    }

    function getArithmeticTotal()
    {
        echo $this->arithmeticTotal . "<br/> <br>";
    }
}

$b1 = new Fruit;
$b2 = new Fruit;
$b3 = new Fruit;

$b1->setQuantity(1);
$b2->setColor("red");
$b3->setArithmeticTotal(5, 5);

echo $b1->getQuantity();
echo $b2->getColor();
echo $b3->getArithmeticTotal();

// Using basic constructor
class Subdivision
{
    public $name;

    function __construct($name)
    {
        $this->name = 'Subdivision name: ' . $name;
    }

    function get_name(): mixed
    {
        return $this->name;
    }
}

$school = new Subdivision(name: "Jamaica Mansions <br> <br>");
echo $school->get_name();

// PHP inheritance, My Idea
class Mother
{
    public function __construct(public string $motherName, public int $motherAge) {}

    public function introduceMother(): string
    {
        return "Hi, I'm the mother, my name is {$this->motherName} and I am {$this->motherAge} years old.";
    }
}

class Son extends Mother
{
    public function __construct(public string $motherName, public int $motherAge, public string $sonName, public string $sonAge) {}

    public function introduceSon(): string
    {
        return "Hi, I'm the son, my name is {$this->sonName} and I am {$this->sonAge} years old. <br>" . parent::introduceMother() . "<br><br>";
    }
}

$son = new Son(motherName: "Marita", motherAge: 57, sonName: "James", sonAge: 21);
echo $son->introduceSon();

// Use case of OOP Inheritance
class User
{
    protected $username;
    protected $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function login()
    {
        return "{$this->username} logged in. <br>";
    }
}

class AdminUser extends User
{
    private $adminLevel;

    public function __construct($username, $email, $adminLevel)
    {
        parent::__construct($username, $email);
        $this->adminLevel = $adminLevel;
    }

    public function getAdminLevel()
    {
        return $this->adminLevel;
    }

    public function login()
    {
        return "{$this->username} (Admin) logged in with level {$this->adminLevel}. <br>";
    }

    public function deleteUser($user)
    {
        return "{$this->username} deleted user {$user->getUsername()}. <br><br>";
    }
}

class RegularUser extends User
{
    private $subscriptionLevel;

    public function __construct($username, $email, $subscriptionLevel)
    {
        parent::__construct($username, $email);
        $this->subscriptionLevel = $subscriptionLevel;
    }

    public function getSubscriptionLevel()
    {
        return $this->subscriptionLevel;
    }

    public function accessContent()
    {
        return "{$this->username} accessed content at subscription level {$this->subscriptionLevel}. <br><br>";
    }
}

$admin = new AdminUser("admin_james", "james@example.com", 5);
echo $admin->login();
echo $admin->deleteUser(new User("user_charles", "james@example.com"));

$user = new RegularUser("user_james", "james@example.com", "Premium");
echo $user->login();
echo $user->accessContent();

// 3 Common ways to use Constructor
//Setting default values for properties
class Apartment
{
    public $name;

    public function __construct($name = "Default Apartment")
    {
        $this->name = $name;
    }

    public function get_name(): string
    {
        return $this->name;
    }
}

$apartment = new Apartment();
echo $apartment->get_name() . "<br>";

//Performing Setup Tasks or Validation When the Object is Created
class LodgingHouse
{
    public $name;

    public function __construct($name)
    {
        $this->name = !empty($name) ? $name : "Unknown LodgingHouse";
    }

    public function get_name()
    {
        return $this->name;
    }
}

$lodgingHouse = new LodgingHouse("");
echo $lodgingHouse->get_name() . "<br>";

//Automatically running specific code upon object creation
class Hotel
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;

        echo "Hotel {$this->name} has been created!";
    }

    public function get_name(): string
    {
        return $this->name;
    }
}

$hotel = new Hotel("Fina");

?>

<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }
</style>