<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $text1 = '';
    $text2 = '';
    $input = $_POST['Unos'];
    $array=[];
    $pb=[];
    $rb='';
    $output=[];
    if ((int)$input===0){
        $text3 = 'PLEASE ENTER CORRECT VALUE';
        $text1 = '';
        $text2 = '';
    }else{
        $text1='';
        $oib='';
        $text2='';
        $text3='';
        $randarr=[];
        $output=[];
        for($i=0;$i<=((int)$input);){
            $randarr=[];
            $rb='';
            $partoib='';
            for($i=0;$i<10;$i++){
                $rb=rand(0,9);
                array_push($randarr,$rb);
            }
            $partoib=implode('',$randarr);

            $a = 10;

	        for ($i = 0; $i < 10; $i++) {

		        $a += (int)$partoib[$i];
		        $a %= 10;

		        if ( $a == 0 ) { $a = 10; }

		        $a *= 2;
		        $a %= 11;

	        }
            

	$kontrolni = 11 - $a;

	if ( $kontrolni == 10 ) { $kontrolni = 0; }

    $oib.=$partoib . $kontrolni;

    array_push($output, $oib);

    echo '<pre>';
    print_r ($output);
    echo '</pre>';

    $i++;
}   
}
} else{
    $text1 = '';
    $text2 = '';
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
            <h4 style="text-align:center;"><?=$text3?></h4>
            <div id="lijevidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
            <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                <label class="h4" for="Unos">How many OIBs would you like to generate?</label>
                <br>
                <input type="text" name="Unos" id="Unos">
                <input class="bg-success text-white" type="submit" value="Generate">
            </form>
            </div>
            <div id="desnidio" class="col-sm-12 col-md-6 col-xl-6 text-center">
                <div class="container">
                    <h3>Results:</h3>
                    <div id="desnopolje" class="container bg-white text-black">
                    <h4><?=$text1?></h4>
                    <h4><?=$text2?></h4>
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