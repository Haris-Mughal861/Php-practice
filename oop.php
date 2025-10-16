<html></html>
<body>
    


<?php
class fruits {

  public $name;
  public $color;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_color($color){
    $this->color = $color;
  }
  function get_color(){
    return $this->color;
  }
}

$apple = new fruits();
$banana = new fruits();
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');
$banana->set_color('Yellow');

echo  "Name:" . $apple->get_name();
echo "<br>";
echo "Color: " .$apple->get_color();
echo "<br>";
echo "Name: ".$banana->get_name();
echo "<br>";
echo "Color: ". $banana->get_color();

class Fruit {
    public $name;

    function __construct($name) {
        $this->name = $name;
        echo "Fruit is: $name<br>";
    }

    function __destruct() {
        echo "Destroying fruit: $this->name<br>";
    }
}

//$banana = new Fruit("Banana");




class animals{
    public $name;

    function eat(){
echo "$this->name is eating.<br>";
}


function sleep(){
    echo "$this->name is sleeping.<br>";

    }

}


class dog  extends animals{
    function bark(){
        echo "$this->name is barking.<br>";
    }
}


$dog = new dog();
$dog->name = "Tommy";

$dog-> eat();
$dog-> sleep();
$dog-> bark();






 class humans{
    public $name;
    function walk(){
echo "$this->name is walkilng.<br>";

    }

    function talk(){
        echo "$this->name is talking.<br>";
    }
}

class child extends humans{
 function crawl(){
    echo "$this->name is crawling.<br>";


 }
}

$child  = new child();
$child->name = "Ahmad";


$child-> walk();
$child-> talk();
$child-> crawl();





class cars{

  public $name;
  function drivefast(){
    echo "$this->name can drivefast.<br> ";


  }
}

class suv extends cars{
  function drive4x4(){

    echo "$this->name has 4x4drive.<br>";


  }
}


$suv = new suv();
echo  $name="ZX";

$suv-> drivefast();
$suv-> drive4x4();




abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}


class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class toyota extends Car{
  public function intro() : string{
    return "Choose Japanese quality! I'm an $this->name!";
  }
}

class nissan extends Car {
  public function intro() : string{
    return "Choose Japanese quality! I'm an $this->name!";

  }
}

class suzuki extends Car{
  public function intro() : string{
    return "Choose pakistani quality! I'm an $this->name!";
  }
}



class kia  extends Car{
  public function intro() : string{
    return "chooose chineese quality! I'm an $this->name!";
  }
}




$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";


$toyota = new toyota("toyota");
echo $toyota->intro();
echo "<br>";

$suzuki = new suzuki ("suzuki");
echo $suzuki->intro();
echo "<br>";

$kia = new kia ("kia ");
echo $kia->intro();
echo "<br>";







trait Logger {
    public function log($msg) {
        echo "Activity logged.";
        echo "[LOG]: $msg\n";
    }
}

class User {
    use Logger;
}

class Order {
    use Logger;
}


$user = new User();
$user->log("User created");


$Order = new Order();
$user->log("order created");


class math{
  public static function add($a,$b,$c,$d){
    return $a+$b+$c+$d;
  }
}
echo "<br>";
echo "The sum of a and b is: " . math::add(53,43,2,33);


class upper{
  public static function toupper($str){
return strtoupper($str);

}
  }
echo "<br>";
  echo upper::toupper("hellow");


  echo "<br>";
  echo upper::toupper("muhammad haris". "<br>"."age");

 echo "<br>";


  $emp =[
    [1,"Muhammad Haris", "employee", "23","50000","46373"],
    [2,"Ahmed", "employee", "34","32000","74738"],
    [3,"Bilal", "employee", "30","25000","34333"],
    [4,"Ali", "employee", "43","30000","44567"],
    [5, "Hasan", "employee", "30", "60000","74648"]
  ];

  echo "<table  border= '2' cellpadding= '10'  >
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Designation</th>
  <th>Age</th>
  <th>Salary</th>
  <th>CMS</th>
  </tr>
   

  ";

  foreach($emp as $employee){
    
   echo "<tr>";
  foreach($employee as $data){
    echo "<td>$data</td>";
  }
  echo "</tr>";
  }

  echo "</table>";

  function printItems(iterable $items) {
    foreach ($items as $item) {
        echo $item . "\n";
    }
}



  function getNumbers(): iterable {
    for ($i=0; $i<=10; $i++) {
        yield $i;
    }
}

printItems(getNumbers());


$sql = "CREATE TABLE students(

id int(6) unsigned auto_increment primary key,
firstname varchar(30) notnull,
lastname varchar(30) not null,
email varchar(50) not null,

)";



$employees = [
  [1,"Ahmed","worker","30000"],
  [2,"Bilal","worker","30000"],
  [3,"Ali","worker","30000"],
  [4,"Haris","worker","30000"]
];

echo "<table table border = '2' cellpadding = '10'>

<tr>
<th>Id</th>
<th>Name</th>
<th>Designation</th>
<th>salary</th>
</tr>



";

foreach($employees as list($a,$b,$c,$d)){

  echo "<tr><td>$a</td>,<td>$b</td>,<td>$c</td>,<td>$d</td> . </tr>";



};
echo "</table>";

?>
</body>
</html>