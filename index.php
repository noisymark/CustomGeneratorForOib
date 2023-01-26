<?php

require_once 'components/generator.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $text1 = '';
    $text2 = '';
    $text3 = '';
    $input = $_POST['Unos'];
    $array=[];
    $pb=[];
    $rb='';
    $output=[];
    if ((int)$input===0){
        $text3 = 'PLEASE ENTER CORRECT VALUE !';
        $text1 = 'Generated OIB goes here';
        $text2 = 'Every OIB in new line';
    }else{
        for($i=0;$i<((int)$input);$i++){
            $output=[GenerateOIB()];
            $text1 .= implode('<br>',$output) . '<br>';
        }
}
} else{
    $text1 = 'Generated OIB goes here';
    $text2 = 'Every OIB in new line';
    $text3 = '';
}

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
            <h4 class="bg-danger" id="warningtext" style="text-align:center;"><?=$text3?></h4>
            <div id="lijevidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
            <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                <label class="h4" for="Unos">How many OIBs would you like to generate?</label>
                <br>
                <input type="text" name="Unos" id="Unos">
                <input class="bg-success text-white" type="submit" value="Generate">
            </form>
            </div>
            <div id="desnidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
                <div class="container col-sm-9 col-md-6 col-xl-5">
                    <h3>Results:</h3>
                    <div id="desnopolje" class="container bg-white text-black">
                    <h4><?=$text1?></h4>
                    <h4><?=$text2?></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "components/footer.php";?>
    </div>
    
    <?php include_once "components/scripts.php";?>
</body>
</html>