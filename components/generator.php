<?php
    function GenerateOIB(){
        $text1='';
        $oib='';
        $text2='';
        $text3='';
        $randarr=[];
        $output=[];
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

    return $oib;

        }
    ?>