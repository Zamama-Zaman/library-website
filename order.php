<?php include ("includes/config.php"); ?>

<?php 

$price = 0;
$book = "";

$select = $_POST["select"];

if($select=="op1"){
  $price = 500;
  $book = "History Book";
}
else if($select=="op2"){
  $price = 600;
  $book = "Novel Book";
}
else if($select=="op3"){
  $price = 700;
  $book = "Story Book";
}
else if($select=="op4"){
  $price = 800;
  $book = "Course Book";
}
else{
  echo "not work";
}


$name=$email=$phone= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = input($_POST["name1"]);
    $email = input($_POST["email1"]);
    $phone = input($_POST["phone1"]);

}
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html lang="en">
<head>
    <?php
    include ("includes/meta-css.php");
    ?>
    <title>index</title>
</head>
<body>
<?php include("includes/header.php"); ?>
<section>
<h1> Thanks for Visiting us! </h1>
    <div>
    <label >Name :<?php echo $name?> </label>
    </div>
    <div> 
    <label >Email address: <?php echo $email?> </label>
    </div>
    <div>
    <label >Phone Number: <?php echo $phone?> </label>
    </div>
    <div>
        <label >Price: <?php echo $price."$" ?> </label>
    </div>
    <div>
        <label >Book: <?php echo $book ?> </label>
    </div>   
    
</section>

<?php include("includes/footer.php"); ?>
</body>
</html>
