<?php
date_default_timezone_set('Asia/Jakarta');
include "function15.php";
echo "\e[95m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[96m_________________   WARNING !!!!!!!!  _________________ \n";
echo "\e[96m          INI SCRIB GOJEK INI GRATIS BRO                \n";
echo "\e[96m           JADI GUNAKANLAH DENGAN BIJAK                 \n";
echo "\e[96m          SCRIB INI TIDAK DI JUAL BELIKAN               \n";
echo "\e[96m              SUBCRIBE CHANNEL YOUTUTBE :               \n";
echo "\e[96m                    RAMZ TUTORIAL                       \n";
echo "\e[96m       BIAR BISA MAKIN SEMANGAT BIKIN KONTENNYA         \n";
echo "\e[96m ********\e[95m".date('[d-m-Y] [H:i:s]')."\e[96m********\n";
echo "\e[95m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[96m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93m            \e[96m BERDOA DULU SEBELUM CLAIM \e[93m \n";
echo "\e[96m  ==============================================\n";
echo "\e[96m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo color("yellow","Masukkan Token: ");
$token = trim(fgets(STDIN));
        echo "\n".color("green","ðŸ‘ŒðŸ± Ambil Voucer Go-Food 20k ");
        echo "\n".color("nevy","Intip Dulu ");
        for($a=1;$a<=3;$a++){
        echo color("blue","ðŸ‘€ ");
        sleep(20);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0508"}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","ðŸ‘ðŸ™ Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","â˜ ï¸â˜ ï¸  Message: ".$message);
	    gocar:
		echo "\n".color("green","ðŸ‘ŒðŸ± Ambil Voucer Lagi");
        echo "\n".color("nevy","Intip Dulu  ");
        for($a=1;$a<=3;$a++){
        echo color("red","ðŸ‘€ ");
        sleep(1);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":""}');
        $message = fetch_value1($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","ðŸ‘ðŸ™ Message: ".$message);
        }else{
        echo "\n".color("red","-] Message: ".$message);
        sleep(3);
        $cekvoucher = requested('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        echo "\n".color("yellow","ðŸ’ŒSemoga DapatðŸ¤ ".$total." : ");
        echo "\n".color("red","                     1. ".$voucher1);
        echo "\n".color("nevy","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("blue","                     4. ".$voucher4);
        echo "\n".color("purple","                     5. ".$voucher5);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
           
}

echo color("yellow","=====!=======!!========!!!=====!!!======\n");
         
         echo "\n".color("nevy"," Sedang claim 15k     ");
        for($a=1;$a<=3;$a++)
{
        echo color("red","ðŸ’žðŸ’ž  ");
        sleep(5);
        }

date_default_timezone_set('Asia/Jakarta');
include "function15.php";
echo colorss("yellow","Masukkan Token: ");
$token = trim(fgets(STDIN));
        echo colorss("yellow","\nÂ¤â–¬â–¬â–¬â–¬â–¬Ï€Ï€â–¬â–¬â–¬â–¬â–¬â–¬ GAS MANG â–¬â–¬â–¬â–¬â–¬Ï€Ï€â–¬â–¬â–¬â–¬â–¬â–¬Â¤");
        echo "\n".colorss("green","ðŸ‘ŒðŸ± Ambil Voucer");
        echo "\n".colorss("nevy","Intip Dulu  ");
        for($a=1;$a<=3;$a++)
{
        echo colorss("red","ðŸ‘€ ");
        sleep(20);
        }
        $code1 = requestedd('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD0508"}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".colorss("green","ðŸ‘ðŸ™ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".colorss("red","â˜ ï¸â˜ ï¸ Message: ".$message);
	    gofood:
        echo "\n".colorss("green","ðŸ‘ŒðŸ± Ambil Voucer Lagi");
        echo "\n".colorss("nevy","Intip Dulu  ");
        for($a=1;$a<=3;$a++){
        echo colorss("red","ðŸ‘€ ");
        sleep(1);
        }
        $code1 = requestedd('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":""}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".colorss("green","ðŸ‘ðŸ™ Message: ".$message);
        }else{
        echo "\n".colorss("red","-] Message: ".$message);
        sleep(3);
}
        $cekvoucher = requestedd('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value12($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr23('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr23('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr23('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr23('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr23('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr23('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr23('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr23('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr23('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr23('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr23('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr23('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr23('"title":"','",',$cekvoucher,"13");
        echo "\n".colorss("green"," Total voucher ".$total." : ");
        echo "\n".colorss("yellow","                     1. ".$voucher1);
        echo "\n".colorss("purple","                     2. ".$voucher2);
        echo "\n".colorss("white","                     3. ".$voucher3);
        echo "\n".colorss("green","                     4. ".$voucher4);
        echo "\n".colorss("red","                     5. ".$voucher5);
        echo "\n".colorss("blue","                     6. ".$voucher6);
        echo "\n".colorss("yellow","                     7. ".$voucher7);
        echo "\n".colorss("nevy","                     8. ".$voucher8);
        echo "\n".colorss("green","                     9. ".$voucher9);
        echo "\n".colorss("purple","                     10. ".$voucher10);
		echo "\n".colorss("red","                     11. ".$voucher11);
        echo "\n".colorss("blue","                     12. ".$voucher12);
        echo "\n".colorss("white","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr23('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr23('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr23('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr23('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr23('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr23('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr23('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr23('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr23('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr23('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr23('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr23('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr23('"expiry_date":"','"',$cekvoucher,'13');
       
       }
}

         echo "\n".color("white","SETPIN..!!!: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("white","â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬ PIN MU = 147258 â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬â–¬")."\n";
         $data2 = '{"pin":"147258"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("white","-] GAGAL!!!\n");
         }
}
}
