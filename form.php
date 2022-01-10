<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>HTML / CSS Revision > Form</title>
<?php include("includes/meta-css.php"); ?>
</head>
<body>
<?php include("includes/header.php"); ?>
    <section>
        <h2>My Stylish Form</h2>

<div class="form-style">
    <form action="order.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Personal</legend>
            <label for="txt1">
                <span>Name </span>
                <input type="text" class="input-field" name="name1" id="txt1" required/>
            </label>
            <label for="txt2">
                <span>Email</span>
                <input type="email" class="input-field" name="email1" id="txt2" required/>
            </label>
            <label for="txt3">
                <span>Phone </span>
                <input type="number" class="input-field" name="phone1" id="txt3" required/>
            </label>
            <label for="txt4">
                <span>Billing Address</span>
                <input type="text" class="input-field" name="txt4" id="txt4" />
            </label>
            <label for="txt5">
                <span>Quantity</span>
                <input type="text" class="input-field" name="txt5" id="txt5" />
            </label>
            <label for="txt6">
                <span>Apple</span>
                <select name="select" id="txt6">
                    <option value="op1">History Books</option>
                    <option value="op2">Novels Books</option>
                    <option value="op3">Story Books</option>
                    <option value="op4">Course Books</option>
                </select>
            </label>


            <input type="submit" value="Submit" />

        </fieldset>

    </form>
</div>
</section>


<?php include("includes/footer.php"); ?>
</body>
</html>







