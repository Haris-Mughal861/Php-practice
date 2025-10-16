<!DOCTYPE html>
<html class="container">
<head>
    <title>
Simple Contact foam
    </title>
</head>
<style>
     body {

            margin: 40px;
        }
        .form {
            width: 500px;
            padding: 40px;
            border: 4px solid lightblue;
            border-radius: 6px;
        }
        .submit-class {
            margin-top: 10px;
            padding: 20px;
            border: 3px solid green;
            border-radius: 6px;
            background-color: lightblue;
        }

    
</style>


<body>
    <h1>Contact Form</h1>

<div class="form">




     <form  action="process.php" method="POST">
        <label  for="name">Name:</label><br>
        <input type="text" required id="name" name="name"><br><br>

        <label  for="Father Name">Father Name:</label><br>
        <input type="text" id="fathername" name="fathername"><br><br>

        <label  for="email">Email:</label><br>

       

               
          <input type="email" required id="email" name="email"><br><br>


          <label  for="age">Age:</label><br>
          <input type="number" required id="age" name="age" min="0" max="100"><br><br>  

           Select image to upload:<br><br>
           
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>



  

          Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="Female") echo "checked";?>

value="Female">Female
<input type="radio" name="gender"

<?php if (isset($gender) && $gender=="Male") echo "checked";?>
value="Male">Male
<br><br>

          
        <input type="submit" value="Submit">
        
    </form> 
    </div>
</body>


</form>
</html>


<?php

// $data = [
//     "name" => "Alice",
//     "age" => 25,
//     "email" => "alice@example.com"
// ];

// $json = json_encode($data);
// echo $json;

// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// echo json_encode($age);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
     $fathername = htmlspecialchars($_POST['fathername']);


if ($email) {
    echo "Valid email: $email";
} else {
    echo "Invalid email!";
}

             $age = htmlspecialchars($_POST['age']);

             $gender = htmlspecialchars($_POST['gender']);

    echo "<div class='submit-class'>";
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<h1>Your Input:</h1>";
       echo "Name: " . $name . "<br>";
       echo "FatherName: " . $fathername ."<br>";
       echo "Email:" . $email. "<br>";
       echo "Gender" . $gender. "<br>";
    echo "The date is:" . date("y/m/d") ."<br>";
    $d=mktime(11, 14, 54, 8, 12, 2014);

     date_default_timezone_set("Pakistan");
     echo "The time is:" . date("h:i:sa");
     "</div>";


};




?>

