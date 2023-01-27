<?php

require_once 'components/generator.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $text1 = '';
    $text3 = '';
    $input = $_POST['Unos'];
    $option = $_POST['checkbox'];
    $array=[];
    $pb=[];
    $rb='';
    $output=[];
    if ((int)$input===0){
        $text3 = 'PLEASE ENTER CORRECT VALUE !';
        $text1 = 'Generated OIB goes here';
        $text2 = 'Every OIB in new line';
    }else{
        $ima=true;
        for($i=0;$i<((int)$input);$i++){
            $output=[GenerateOIB()];
            if($option==='comma'){
                $text1 .= (implode('',$output) . ',');
            } elseif($option==='newline'){
                $text1 .= (implode('',$output) . '<br>');
            } else{
                $text1 .= (implode('',$output) . '<br>');
            }
        }
}
} else{
    $text1 = 'Generated OIB goes here';
    $text3 = '';
    $ima = false;
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
                <br><br>
                <input id="input1" type="number" name="Unos" id="Unos" autofocus value="12">
                <div id="field">
                <h4>Separated by:</h4>
                <input type="radio" name="checkbox" id="zarez" value="comma"<?php if($option==='comma'):?>
              checked="checked"
            <?php endif;?>>
                <label class="h4" for="zarez">Comma</label>
                <br>
                <input type="radio" name="checkbox" id="space" value="newline"<?php if($option==='newline' || $option==0):?>
              checked="checked"
            <?php endif;?>>
                <label class="h4" for="space">New line</label>
                </div>
                <br>
                <input id="button" class="bg-success text-white" type="submit" value="Generate">
            </form>
            </div>
            <div id="desnidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
                <div class="container col-sm-9 col-md-6 col-xl-5">
                    <h3>Results:</h3>
                    <div id="desnopolje" class="container bg-white text-black">
                    <h4 id="outputtext" class="text-wrap"><?=$text1?></h4>
                    </div><?php if ($ima===true) : ?>
                    <br>
                    <button onclick="copyText()" class="bg-success text-white" id="copy">Copy to clipboard</button>
                    <?php endif?>
                </div>
            </div>
        </div>
        <?php include_once "components/footer.php";?>
    </div>
    <script>
        function copyText() {
            var myText = document.createElement("textarea");
            myText.value = document.getElementById("outputtext").innerHTML;
            myText.value = myText.value.replaceAll("<br>"," ");
            myText.value = myText.value.replaceAll(","," ");
            document.body.appendChild(myText)
            myText.focus();
            myText.select();
            document.execCommand('copy');
            document.body.removeChild(myText);
        }
    </script>
    <?php include_once "components/scripts.php";?>
</body>
</html>