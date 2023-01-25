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
                <label class="h4" for="Unos">How many OIBs would you like to generate?</label>
                <br>
                <input type="text" name="Unos" id="Unos">
                <input class="bg-success text-white" type="button" value="Generate">
            </form>
            </div>
            <div id="desnidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
                <div class="container">
                    <h3>Results:</h3>
                    <div id="desnopolje" class="container bg-white text-black">
                    <h4>Generated OIBs go here</h4>
                    <h4>Every new OIB in new line</h4>
                    </div>
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