<?php include("includes/config.php"); ?>
<!doctype html>
<html lang="en-US">
<head>
    <title>Client Area</title>

<?php include("includes/meta-css.php"); ?>
</head>


<body>

<?php include("includes/header.php"); ?>


<section>
<h2>
You can upload any file
</h2>
<div class="form-style">
<form action="clientaction.php" method="post" enctype="multipart/form-data"> 
    <fieldset>
        <legend>client</legend>
        <label>
            <span>Email:</span> 
            <input type="email" name="em" placeholder="Enter Email" />
        </label>
    
        <label><span>Password:</span> 
        <input type="password" name="pw" placeholder="Enter Password"/>
        </label>
        
    
        <label><span>Serives:</span> </label>
            <input type="radio" name="sr" value="A"/>A
            <input type="radio" name="sr" value="B"/>B
            <input type="radio" name="sr" value="C"/>C
            <input type="radio" name="sr" value="D"/>D
        

        <label><span></span></label>
    
    <label ><span>Filename:</span>
    <input type="file" name="userfile">
    </label>
    <input type="submit" name="submit" value="Upload" /> 
    </fieldset>
</form>
</div>
    </section>

<?php include("includes/footer.php"); ?>
</body>
</html>
