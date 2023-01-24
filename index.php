<?php

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once "components/header.php";?>
<body>
    <div id="uvodnitext" class="row text-white text-center">
        <h4>Welcome to the Custom OIB generator</h4>
    </div>
    <div class="container">
        <div class="row">
            <div id="lijevidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
            <form action="">
                <label class="" for="Unos">How many OIBs would you like to generate?</label>
                <br>
                <input type="text" name="Unos" id="Unos">
                <input class="bg-success text-white" type="button" value="Generate">
            </form>
            </div>
            <div id="desnidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
                <div class="container">
                    <h4>Hello</h4>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-6">
                
            </div>
        </div>
        <?php include_once "components/footer.php";?>
    </div>
    
    <?php include_once "components/scripts.php";?>
</body>
</html>