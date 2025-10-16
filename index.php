<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Web</title>
</head>
<style>

  .container{
    background-color: lightblue;
  }



</style>

<div class="container">

<body>

<h1>PHP</h1>




<form method="POST" action= "demo_request.php">Name: <input type="text", name= "fname">
<input type= "submit">
</form>



<button src="process.php">onclick</button>



<?php




echo date("D-m-y");
echo "<br>";
echo date("h-i-s");



function add($num1, $num2){

  echo "The sum is:";
  echo $num1+$num2;
}
echo "<br>";
add (7,8);


function diff($no1,$no2){

  echo "The diffrece is: ";
  echo $no1-$no2;


}
echo "<br>";
diff (10,5);


//if and else


$age= 18;

if($age<18){
  echo "<br>";
  echo "Unable to vote";
}
else{
  echo "<br>";
  echo "You can vote";
}

//loops

$a=7;
echo "<br>";
echo "Table of 7:";
for($i=1;$i<=10;$i++){
  
  echo "<br>";

  echo $a*$i;
  
}

//fuction for largest number:

function find_largest_num($number){

$max = $number[0];
  foreach ($number as $num){
    if ($num>$max){

       $max = $num;

    }
  }
  return $max;
}

$arr =array(1,2,3,4,6,7,8,9,0,7,8,5,12,33,55,66,77,90,4,5);
echo "<br>";
 echo "The largest number is:".find_largest_num($arr);

 // Find average of array:

 function average_arr($array){
  $sum = 0;
  $count = count($array);
  foreach($array as $num){
 $sum+=$num;
  }
  $average = $sum/$count;
  return $average;
 }


 $array=[100,100,100,10000,1001,100,900,100];
 echo "<br>";
 echo "The average of array is:".average_arr($array);

 //sort array;
 $arr=[12,5,7,8,5,4,3,22];

 rsort($arr);
 echo "<br>";
  echo ($arr);

//array:

$array=[4,5,3,29,94,30,3,23];
echo "<br>";
echo "The average of array is: ".average_arr($array);


//remove duplicate value from array;

$arraywithduplicatevalue = [2,4,45,22,23,4,45,2,3,4,5,2,3,4];
$arraywithoutduplicate = array_unique($arraywithduplicatevalue);
echo "<br>";
print_r ($arraywithoutduplicate);
echo "<br>";
echo count($arraywithduplicatevalue);



//Assossoate array:

$detail=["Name"=>"Haris","age"=>"22","year"=>"2003"];

echo "<br>";

 echo $detail["Name"];
 echo "<br>";
 echo $detail["age"];
 echo "<br>";
 echo $detail["year"];


 //two dimensional array:

 $cars =array(
  ["Volvo",22,18],
  ["BMW",15,13],
  ["Saab",5,2],
  ["Land Rover",17,15]


 );
 echo "<br>";

 echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
 echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
 echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
 echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";

echo "<br>";
 echo var_dump($cars);


echo "<br>";
 $x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction();



//server global variable:

 echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];

echo "<br>";

$a= 54;
$b= 30;
 
function sum(){
 global $a,$b;
 echo $a+$b;
}
echo "The sum is:";
sum();






?>





  
</body>
</div>
</html>


 