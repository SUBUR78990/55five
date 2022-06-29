<?php
 error_reporting(0);
 system("clear");
 while(true){ 
system("clear");
function an($str){ $arr = str_split($str);
 foreach($arr as $az){ echo $az;
 usleep(1000);
 } } 
date_default_timezone_set("Asia/Jakarta");
 $date=date("d-F-Y");
 $time=date("H:i");
 $day=date("l");
$meraht = "\e[1;31m";
$kuningt = "\e[1;33m";
$putiht = "\e[1;37m";
$birut = "\e[1;34m";
$ungut = "\e[1;35m";
$birumudat = "\e[1;36m";
$hijau2 = "\e[1;32m";


an("
\e[1;31m    ██████╗  ██╗ ██╗ ██████╗  ██╗ ██╗ ██████╗     ███╗   ███╗
\e[1;31m    ██╔════╝ ██║ ██║ ██╔══██╗ ██║ ██║ ██╔══██╗    ████╗ ████║
\e[1;31m    ███████╗ ██║ ██║ ██████╔╝ ██║ ██║ ██████╔╝    ██╔████╔██║
\e[1;37m    ╚════██║ ██║ ██║ ██╔══██╗ ██║ ██║ ██╔══██╗    ██║╚██╔╝██║
\e[1;37m    ███████║ ██████╔ ██████╔╝ ██████╔ ██║  ██║ ██ ██╗ ██║ ██║
\e[1;37m    ╚══════╝ ╚═════╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═╝    ╚═╝ ╚═╝ ╚═╝\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an("{$white}Author   = {$cyan}SUBUR.M\n");
an("{$white}Github   = {$cyan}https://github.com/SUBUR78990\n");
an("{$white}WhatsApp = {$cyan}088213415826\n");
an("{$white}Script   = {$green}$sc\n");
an("{$white}Server   = {$green}ONLINE\n");
an("{$white}Versi    = {$green}V.5\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an("{$white}Link Youtube = {$white}https://youtube.com/channel/UCMYE6BzfRBLVZREX0bxOdhg\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an(" \033[1;97mDay : $day \e[1;92mDate : $date \e[1;95mtime : $time \n");
echo "\n";

 $data="typeid=1&pageno=1&language=id";
 $headers=array( "Host: www.55lottertttapi.com", "content-length:".strlen($data), 
 "accept:application/json; charset=utf-8, */", 
 "user-agent: Mozilla/5.0(Linux; Android 6.0.1; SAMSUNG SM-G532G) AppleWebKit/537.36(KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded", 
 "origin: https://55wealth.vip", 
"referer: https://55wealth.vip/", 
 "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7" );
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.55lottertttapi.com/api/webapi/GetNoaverageEmerdList");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_
 curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $go= curl_exec($ch);

 $gm= explode('"Number":"',$go)[1];
 $gm= explode('",',$gm)[0];
 $jj= explode('"Number":"',$go)[2];
 $jj= explode('",',$jj)[0];
 $bb= explode('"Number":"',$go)[3];
 $bb= explode('",',$bb)[0];
 $dd= explode('"Number":"',$go)[4];
 $dd= explode('",',$dd)[0];
 $ff= explode('"Number":"',$go)[5];
 $ff= explode('",',$ff)[0];
 $pp= explode('"Number":"',$go)[6];
 $pp= explode('",',$pp)[0];
 $io= explode('"Number":"',$go)[7];
 $io= explode('",',$io)[0];
 $to= explode('"Number":"',$go)[8];
 $to= explode('",',$to)[0];
 $qq= explode('"Number":"',$go)[9];
 $qq= explode('",',$qq)[0];
 $ko= explode('"Number":"',$go)[10];
 $ko= explode('",',$ko)[0];

 echo "\n";
system("clear");
an("
\e[1;31m    ██████╗  ██╗ ██╗ ██████╗  ██╗ ██╗ ██████╗     ███╗   ███╗
\e[1;31m    ██╔════╝ ██║ ██║ ██╔══██╗ ██║ ██║ ██╔══██╗    ████╗ ████║
\e[1;31m    ███████╗ ██║ ██║ ██████╔╝ ██║ ██║ ██████╔╝    ██╔████╔██║
\e[1;37m    ╚════██║ ██║ ██║ ██╔══██╗ ██║ ██║ ██╔══██╗    ██║╚██╔╝██║
\e[1;37m    ███████║ ██████╔ ██████╔╝ ██████╔ ██║  ██║ ██ ██╗ ██║ ██║
\e[1;37m    ╚══════╝ ╚═════╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═╝    ╚═╝ ╚═╝ ╚═╝\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an("{$white}Author   = {$cyan}SUBUR.M\n");
an("{$white}Github   = {$cyan}https://github.com/SUBUR78990\n");
an("{$white}WhatsApp = {$cyan}088213415826\n");
an("{$white}Script   = {$green}CryptoAffiliates\n");
an("{$white}Server   = {$green}ONLINE\n");
an("{$white}Versi    = {$green}V.5\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an("{$white}Link Youtube = {$white}https://youtube.com/channel/UCMYE6BzfRBLVZREX0bxOdhg\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an(" \033[1;97mDay : $day \e[1;92mDate : $date \e[1;95mtime : $time \n");
echo "\n";

an("{$gray}══════════════════════════════════════════════════════════════════════\n");
an( "\e[1;91mNOMOR\e[1;97m  $gm		\e[1;93mNOMOR\e[1;97m $jj		\e[1;92mNOMOR\e[1;97m $bb\n");
an( "\e[1;91mNOMOR\e[1;97m  $dd   	        \e[1;93mNOMOR\e[1;97m $ff              \e[1;92mNOMOR\e[1;97m $pp\n");
an( "\e[1;91mNOMOR\e[1;97m  $io         	\e[1;93mNOMOR\e[1;97m $to              \e[1;92mNOMOR\e[1;97m $qq\n");
an( "\e[1;91mNOMOR\e[1;97m  $ko \n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");

echo "\n";
 $data= "uid=".$ID."&sign=".$sigin."&language=id";
 $headers=array( "Host: www.55lottertttapi.com", "content-length:".strlen($data), 
"accept: application/json, text/plain, */", 
"user-agent: Mozilla/5.0(Linux; Android 6.0.1; SAMSUNG SM-G532G) AppleWebKit/537.36(KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36", 
"content-type: application/x-www-form-urlencoded", 
"origin: https://55wealth.vip", 
"referer: https://55wealth.vip/", 
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7" );
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.55lottertttapi.com/api/webapi/GetUserInfo");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $login= curl_exec($ch);
 $login= json_decode($login);
 $gg= $login->data->Sign;
 $gb= $login->data->UserId;
 $ss= $login->data->Amount;



 $data= "typeid=3&language=id";
 $headers=array( "Host: www.55lottertttapi.com", "content-length:".strlen($data), 
 "accept: application/json, text/plain, */", 
 "user-agent: Mozilla/5.0(Linux; Android 6.0.1; SAMSUNG SM-G532G) AppleWebKit/537.36(KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36", "content-type: application/x-www-form-urlencoded", 
 "origin: https://55wealth.vip", 
 "referer: https://55wealth.vip/", 
 "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7" );
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.55lottertttapi.com/api/webapi/GetGameIssue");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt"); 
$ko= curl_exec($ch);
$up= explode('{"IssueNumber":',$gg)[1];
$up= explode('{"IssueNumber":"',$jj)[2];
$up= explode('{"IssueNumber":"',$bb)[3];
$up= explode('{"IssueNumber":"',$dd)[4];
$up= explode('{"IssueNumber":"',$ff)[5];
$up= explode('{"IssueNumber":',$pp)[6];
$up= explode('{"IssueNumber":"',$io)[7];
$up= explode('{"IssueNumber":"',$to)[8];
$up= explode('{"IssueNumber":"',$qq)[9];
$up= explode('{"IssueNumber":",$ko)[10];

 $up= explode('{"{"code":0,"success":true,"msg":"telah berhasil","data":{"pageno":1,"totalpage":1950,"gameslist":[{"rowId":1,"IssueNumber":"2022060250778","Premium":"54719","SumCount":26},{"rowId":2,"IssueNumber":"2022060250777","Premium":"72902","SumCount":20},{"rowId":3,"IssueNumber":"2022060250776","Premium":"06626","SumCount":20},{"rowId":4,"IssueNumber":"2022060250775","Premium":"90034","SumCount":16},{"rowId":5,"IssueNumber":"2022060250774","Premium":"07241","SumCount":14},{"rowId":6,"IssueNumber":"2022060250773","Premium":"60441","SumCount":15},{"rowId":7,"IssueNumber":"2022060250772","Premium":"19177","SumCount":25},{"rowId":8,"IssueNumber":"2022060250771","Premium":"76673","SumCount":29},{"rowId":9,"IssueNumber":"2022060250770","Premium":"39120","SumCount":15},{"rowId":10,"IssueNumber":"2022060250769","Premium":"23172","SumCount":15}]}}":"',$iio)[1];
 $up= explode('{"{"success_fraction":0,"report_to":"cf-nel","max_age":604800}":"',$jonee)[1];
 $up= explode('",',$up)[0];
 echo "\n";
 an( "\e[3;102mLANJUTKAN\e[0m\e[1;101mSILAH KAN BAYAR=>\e[0m\n");
 $iio= readline("\e[1;101mPASANG BERAPA .?\e[0m\e[1;95m: ");
 echo "\n";
 $jokk= readline("\e[3;102mHIJAU KUNING MERAH\e[0m\e[1;96m: ");
 $jonee= readline("\e[3;105mEnter Kalikan Bet\e[0m\e[1;97m: ");
 $data="uid=".$gb."&sign=".$gg."&amount=".$iio."&betcount=".$jonee."&gametype=0&selecttype=".$jokk."&typeid=3&issuenumber=".$up."&language=id";
 $headers=array( "Host: www.55lottertttapi.com", "content-length:".strlen($data), 
 "accept: application/json, text/plain, */", 
 "user-agent: Mozilla/5.0(Linux; Android 6.0.1; SAMSUNG SM-G532G) AppleWebKit/537.36(KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36", 
 "content-type: application/x-www-form-urlencoded", 
 "origin: https://55welth.vip", 
 "referer: https://55wealth.vip/", 
 "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7" );
 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.55lottertttapi.com/api/webapi/GameBetting");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headrs);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt"); 
$bon= curl_exec($ch);
 $bon= json_decode($bon);
system("clear");
an("
\e[1;31m    ██████╗  ██╗ ██╗ ██████╗  ██╗ ██╗ ██████╗     ███╗   ███╗
\e[1;31m    ██╔════╝ ██║ ██║ ██╔══██╗ ██║ ██║ ██╔══██╗    ████╗ ████║
\e[1;31m    ███████╗ ██║ ██║ ██████╔╝ ██║ ██║ ██████╔╝    ██╔████╔██║
\e[1;37m    ╚════██║ ██║ ██║ ██╔══██╗ ██║ ██║ ██╔══██╗    ██║╚██╔╝██║
\e[1;37m    ███████║ ██████╔ ██████╔╝ ██████╔ ██║  ██║ ██ ██╗ ██║ ██║
\e[1;37m    ╚══════╝ ╚═════╝ ╚═════╝  ╚═════╝ ╚═╝  ╚═╝    ╚═╝ ╚═╝ ╚═╝\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
 an("\e[1;92mTUNGGU SAMBIL NGOPI - BIARKAN WAKTU BERJALAN -ENJOY\e[1;92m\n");
an("{$gray}══════════════════════════════════════════════════════════════════════\n");
 $bons= $bon->msg;
 an( "\e[1;93mPesan\e[1;96m: $bons\n");
 $data="uid=".$gb."&sign=".$gg."&amomnt=".$iio."&betcount=".$jonee."&gametype=2&selecttype=".$jokk."&typeid=1&issuenumber=".$up."&language=id";
 $headers=array( "Host: www.55lottertttapi.com", "content-length:".strlen($data), 
 "accept: application/json, text/plain, */", 
 "user-agent: Mozilla/5.0(Linux; Android 6.0.1; SAMSUNG SM-G532G) AppleWebKit/537.36(KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36", "content-type: application/x-www-form-urlencoded", 
 "origin: https://55wealth.vip", 
 "referer: https://55wealth.vip/", 
 "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7" );
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.55lottertttapi.com/api/webapi/GameBetting");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt"); 
$bb= curl_exec($ch);
 $bb= json_decode($bb);
an("{$gray}══════════════════════════════════════════════════════════════════════\n"); 
 $jonee= $jonee->msg;
 $data= "uid=".$gb."&sign=".$gg."&language=id";
 $headers=array( "Host: www.55lottertttapi.com", "content-length:".strlen($data), 
 "accept: application/json, text/pllin, */", 
 "user-agent: Mozilla/5.0(Linux; Android 6.0.1; SAMSUNG SM-G532G) AppleWebKit/537.36(KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36", 
 "content-type: application/x-www-form-urlencoded", 
 "origin: https://55wealth.vip", 
 "referer: https://55wealth.vip/", 
 "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7" );
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.55lottertttapi.com/api/webapi/GetUserInfo");
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
 $login= curl_exec($ch);
 $login= json_decode($login);
 $ko= $login->data->NickName;
 $gb= $login->data->UserId;
 $ss= $login->data->Amount;
 $bons= $bon->msg;
 echo "\n";
 an( "\e[1;92m NickName\e[1;97m: $ko\n");
 an( "\r \e[1;93mSaldo \e[1;92mAcountt\e[1;97m: $ss\n");
 an( "\r ID \e[1;93mPenguna \e[1;92mSaya\e[1;97m: $gb\n");
 echo "\n";
 echo "\n";
 echo "\r \r";
usleep(10000);
 for($Ãƒâ€”=60;$Ãƒâ€”>0;$Ãƒâ€”--){ 
 an( "\r \033[1;101mTUNGGU SAMBIL NGUPI\e[0m :$Ãƒâ€”:");
 sleep(1);
 echo "\r \r";
 } }
?>
