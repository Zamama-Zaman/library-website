<?php include("includes/config.php"); ?>

<?php 
$email = $_POST["em"];
$password = $_POST["pw"];
$services = $_POST["sr"];

$authorize = false;
$selectedFile = "";
if($services==="A") $selectedFile = "s-a.jpg";
if($services==="B") $selectedFile = "s-b.jpg";
if($services==="C") $selectedFile = "s-c.jpg";
if($services==="D") $selectedFile = "s-d.jpg";

if(($email===$clientEM) && ($password===$clientPW))
{
    $authorize = true;
    $maxFileSize= 5 * 1024 * 1024; // 5MB
    if ((($_FILES["userfile"]["type"] == "image/jpeg") || ($_FILES["userfile"]["type"] == "image/pjpeg")) && 
    ($_FILES["userfile"]["size"] < $maxFileSize)) 
    { 
        if ($_FILES["userfile"]["error"] > 0) 
        { 
            echo "Return Code: " . $_FILES["userfile"]["error"] . "<br/>"; 
        } 
        else 
        { 
            if (file_exists("upload/" . $_FILES["userfile"]["name"])) 
            { 
                echo $_FILES["userfile"]["name"] . " already exists. ";
            } 
            else 
            { 
                move_uploaded_file($_FILES["userfile"]["tmp_name"],"graphics/" . 
                $selectedFile);
            }    
        }
    } 
    else 
    { 
        echo "Invalid file"; 
    } 
}
else
{
    $authorize = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Client Area</title>

<?php include("includes/meta-css.php"); ?>
</head>


<body>

<?php include("includes/header.php"); ?>

<section>
    <h2>Client Area</h2>
    <?php 
    if($authorize){
        echo "File Updated";
    }
    else{
        echo "Unauthorized email attempt </br> check youre email and password";
    }
    ?>
</section>
<?php include("includes/footer.php"); ?>

</body>
</html>
