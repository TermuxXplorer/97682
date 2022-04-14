<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set("Asia/Jakarta");
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}
error_reporting(0);
system("clear");

$SC = "6";

$res = url("https://controlc.com/8e69ee50");
//echo $res."\n";
//exit;
$link1 = explode('Link Password: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
//$pass="A";
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}

$res = url("https://controlc.com/88909120");
//echo $res."\n";
//exit;
$a = explode('Date=',$res)[1];
$tgl = explode(' ',$a)[0];
$a = explode('Month=',$res)[1];
$bln = explode(' ',$a)[0];
$a = explode('Hours=',$res)[1];
$jam = explode(' ',$a)[0];
//echo "tanggal $tgl Bulan $bln Jam $jam";

// mengatur time zone untuk WIB.
date_default_timezone_set("Asia/Jakarta");
// mencari mktime untuk tanggal 1 Januari 2011 00:00:00 WIB
$selisih1 =  mktime($jam, 0, 0, $bln, $tgl, 2022);
// mencari mktime untuk current time
$selisih2 = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
// mencari selisih detik antara kedua waktu
$delta = $selisih1 - $selisih2;
// proses mencari jumlah hari
$a = floor($delta / 86400);
// proses mencari jumlah jam
$sisa = $delta % 86400;
$b  = floor($sisa / 3600);
// proses mencari jumlah menit
$sisa = $sisa % 3600;
$c = floor($sisa / 60);
// proses mencari jumlah detik
$sisa = $sisa % 60;
$d = floor($sisa / 1);

if($d<1){
echo " Your Tools Limited Expired.
Please Long Time Use This Tools
Please contact +8801793945368 Or https://t.me/Eyey3\n";
exit;
}

echo "Current time-> ".date("d-m-Y H:i:s")."\n";
echo "Expired Script-> ".$a." day ".$b." Hours ".$c." minute ".$d." seconds\n";
//echo "Expired 13-Agustus-2023 Jam 24.00 WIB\n";

//exit;
//echo $login[0]."\n";
//$pw1 = explode('[tpcolor=#FF0000]',$res);
//$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";
echo $baner = "
 \033[0;31m
            //////////////////////
           //////| | | |/////////
          //_▄___████████________\
          \033[1;32m___▄___\033[0;31m█      █   ______\
\033[1;32m_▄_______/  \033[0;31m_____█      █__/  _____|
___________/     ████████____/   __|
\033[1;32m__________________|\033[0;31m | | |___   \033[1;32mO \033[0;31m__|
__________▄ ▄_______| |     \_______\
 \033[1;32m        ____▄ ▄__ \033[1;31m   |    __________\
\033[1;32m________/\033[1;31m ▄_____ \033[1;32m \_▄ \033[1;31m|___/ ______| 
__________▄     \__________/     /
______________        _______    \
              \  __▄  | ___  \____|
               \ \___ | |  \______/
                \_   \| |
                  |  || |   \033[1;32m    [I AM] \033[0;31m
                  |  || █  \033[1;32m  [MR.ROBOT] \033[1;31m[SIGNAL TOOL]\033[0;31m
                  |  █|    \033[1;32m  [NEW XPLORER] \033[0;31m
                  |   |\033[1;32m  [MD.NAYAN MIAH] \033[1;31m[tel: @Eyey3]\033[0;31m
                  █   █ \033[1;32m  [+8801793945368]

\033[1;92m$o\033[1;91m Runing This Script->\033[1;92mV: +4.0.1\033[0;30m$SC\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";

if ($link[0]==""){
echo " \033[1;91mTHE CONNECTION IS DISCONNECTED, PLEASE CHECK YOUR CONNECTION\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}
if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mYour SCRIPT is no longer connected\033[1;92mTermux Xplorer\n";
      echo "\033[1;92m ◼ \033[1;97mPlease Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($pass == 'M'){

      echo "\033[1;92m ◼ \033[1;91mSCRIPT ⚡⚡ \033[1;92mMAINTENANCE\n";
      echo "\033[1;92m ◼ \033[1;91m Md.NAYAN MIAH \033[1;92m->Termux Xplorer \033[1;91mFor more information\n\n";
      exit;
}

if ($pass == 'off'){

      echo "\033[1;92m ◼ \033[1;91m++ SCRIPT is finished\n";
      echo "\033[1;92m ◼ \033[1;91mMD.NAYAN MIAH \033[1;92m->Termux Xplorer \033[1;91mFor more information\n\n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;91m ▶ \033[1;92mPassword Success \r";
      sleep(2);
 //     system("xdg-open https://www.facebook.com/groups/2029463423875403/?ref=share");
        echo "\033[1;32m ◼ \033[1;31mATTENTION...!!!           \n";
        echo " \033[0;30m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
        echo "    \033[0;30m~ \033[0;30mMENCUCI TANGAN\n";
       echo "    \033[0;30m~ \033[0;30mMEMAKAI MASKER\n";
       echo "    \033[0;30m~ \033[0;30mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "    \033[0;30mDAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA  \033[0;30mALLAH SWT \n";
        echo "    \033[0;30mSEMOGA KITA TERLINDUNGI DARI  \033[0;30mCOVID-21\n\n";
      sleep(2);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;91m ◼\033[1;97m Hi, Give Me Your Password-\033[1;92m $link[0]\n";
echo "\033[1;91m ◼ \033[1;97mENTER  PASSWORD -> \033[1;92m";
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo "\n \033[1;96mLoading \033[1;31m▪\r";
sleep(1);
echo "\033[1;96m Loading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo "\033[1;96m Loading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo "\033[1;91m ◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
        system("xdg-open https://www.facebook.com/groups/2029463423875403/?ref=share");
        fclose($save);
        sleep(5);
        echo "\033[1;32m ◼ \033[1;31mATTENTION...!!!           \n";
        echo "\033[0;30m   TETAP PATUHI PROTOKOL KESEHATAN DENGAN 3M\n\n";
       echo "   \033[0;30m~\033[0;30mMENCUCI TANGAN\n";
        echo "   \033[0;30m~\033[0;30mMEMAKAI MASKER\n";
        echo "   \033[0;30m~\033[0;30mMENJAGA JARAK AMAN 1 METER DARI ORANG LAIN\n\n";
        echo "   \033[0;30mDAN TETAP BERDO'A MEMOHON PERLINDUNGAN KEPADA \033[0;30mALLAH SWT \n";
        echo "   \033[0;30mSEMOGA KITA TERLINDUNGI DARI \033[0;30mCOVID-21\n\n";
        sleep(1);
        }else{
        echo "\033[1;92m ◼ \033[1;91mFAIL...!!!, PLEASE ENTER THE CORRECT PASSWORD. PLEASE TRY AGAIN\n";
        exit;
        }
        }
}
sleep(1);
echo "\033[1;31m ☣ Access Signal \033[1;32m ";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);   
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
echo "█";
usleep(500000);
function lodi(){
    $a=10;
    for ($i=0;$i<$a;$i++){
        $lod= intval($i/$a*100);
        echo "\r".$lod.str_repeat('..',$i);
        sleep(1);
    }
}

echo lodi();
echo"\r";
echo "Successful Loading  ";
sleep(2);
//echo "\033[1;97m   Please Click \033[1;32mENTER \033[1;37mTo continue↩️ \033[1;92m";
//$kkk = trim(fgets(STDIN));
system("clear");
signal:
$bino = "BINOMO";
$iqn = "IQ OPTION";
$exp = "EXPERT OPTION";
$quo = "QUOTEX";
$oly = "OLY TRADE";
echo "\033[1;37m1.\033[1;32m".$bino."\n";
echo "\033[1;37m2.\033[1;32m".$iqn."\n";
echo "\033[1;37m3.\033[1;32m".$exp."\n\n";
echo "\033[1;37m4.\033[1;32m".$quo."\n\n";
echo "\033[1;37m5.\033[1;32m".$oly."\n\n";

echo "\033[1;37m☢Type On Capital Word \033[1;31mEx:ABCD\033[1;32m\n";
echo "☢Please Select Your Platform \033[1;37m➳\033[1;32m";
$signal = trim(fgets(STDIN));
if ($signal==$bino){
    echo "Are You Connect To Binomo";
}elseif ($signal==$iqn){
    echo"Are You Connect To iq option";
}elseif($signal==$exp){
    echo"Are You Connect To ExpertOptoin";
}else{
    system("clear");
    echo "\033[1;31mYour Selection Wrong☣ Looked Tutorial Video ....\n";
    //exit;
    goto signal;
}
system("clear");
date_default_timezone_set("Asia/Jakarta");
echo "\033[1;31m";
echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);echo"1";usleep(20000);echo"0";usleep(20000);echo"1";usleep(20000);
sleep(2);
echo"\n";
echo"\033[1;32m";
system("toilet -f wideterm -F border ' Welcome To $signal Tools'");
sleep(2);
system("clear");
echo "\033[1;92m";
system("toilet -f wideterm -F border ' $signal Market Open Now'");
echo $baner1 = "\033[1;31m   
         /            \
      / /              \ \
     / /                \ \ 
     \ \                / /
      \ \___        ___/ /   
       \____\_(..)_/____/     
         ___/      \___  
\033[1;34m[DARK] \033[1;31m / __\      /__ \
       / /   \    /   \ \
      / /    /    \    \ \  \033[1;37m[HACKER]\033[1;31m
      | |    \    /    | |
      | |     \  /     | | \033[1;37m[\033[1;31mSIGNAL\033[1;37m]\033[1;31m
      | \      \/      / |
      \  \            /  /  \033[1;37m[\033[1;31mTOOL\033[1;37m]\033[1;31m
       \  \          /  /
           \        / \033[1;37m[MOH.NAYAN MIAH]\033[1;31m
            \      /  \033[1;34m[https://t.me/+cwMjOfDA880xZTQ1]
\033[1;36m SCRIPT VERSION Updated : 4.2.0\033[0;30m$SC\n\n";

$ua[]="Host: api.binomo-web.com";
$ua[]="device-type: web";
$ua[]="user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Mobile Safari/537.36";
$ua[]="content-type: application/json";
$ua[]="accept: application/json, text/plain, */*";
$ua[]="cache-control: no-cache, no-store, must-revalidate";
$ua[]="user-timezone: Asia/Jakarta";
//$ua[]="device-id: 6a63ba27fe1b2fc968ffc14af75a0dc5";
//$ua[]="authorization-token: dc101655-a322-43d3-bbc1-7af9d71f34d3";
//$ua[]="version: 56e73ebb";
$ua[]="sec-gpc: 1";
//$ua[]="origin: https://binomo-investment.com";
//$ua[]="sec-fetch-site: same-site";
//$ua[]="sec-fetch-mode: cors";
//$ua[]="sec-fetch-dest: empty";
//$ua[]="referer: https://binomo-investment.com/";
//$ua[]="accept-encoding: gzip, deflate, br";
$ua[]="accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
//$ua[]="cookie: ref.929a9991f7ee.group=2;a=171ac3b5b36a;ac=ref;sa=1;_gcl_au=1.1.822832292.1627764673;_ga=GA1.2.1119320162.1627764674;_gid=GA1.2.197168670.1627764674;cto_bundle=S2AI0V9ONGVwYmpmYkMyWCUyQnhpSEpUQnBoNlV3MXpzcFEwb3ZYY3VQUVVQMzdraEtLMFpwM3o1M3BUaXR0JTJCS00lMkZTc0xsclY1V21QZ2slMkZ0UE9rYVc4dzVWVHAzNU9scVpEeWtzQWxWck5yMEI3c2dCc3pZaGNXOUhINGV0TFd2MmtIcmN3ME9RRk1xVXd6QVd5UFhZZG9nT0ViZyUzRCUzRA;l=;__exponea_etc__=3aa9629c-43d3-435b-8fed-3a4414fde9fc;_binomo_session=WlNEZmxwdTYwbGZpSTlYaDl6L3RSakQ2VitUa3FRNHAyOFYxZ1Vwc3ZXdWxNdi9ESnFlSmdqTEt1R2x0UWFBbFFBL1p1b2dZLzZUU1Byb1dNV0orR3c9PS0tZHJmZDI5NEFGQ2Z5RVp2RjlNNnFTdz09--f429b1e1c5076b9cc7f5fa7e4eaf27bb688a09c1;_dc_gtm_UA-60335261-1=1;_gat_UA-60335261-1=1;authtoken=dc101655-a322-43d3-bbc1-7af9d71f34d3;device_id=dfd1116a99636a50972274da0a5127f2;device_type=web;__exponea_time2__=0.7351319789886475";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://api.binomo-web.com/platform/v3/assets?locale=id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
//echo $result."\n";
echo "\033[1;92m";
system("toilet -f wideterm -F border ' $signal MARKET ON ACTIVE '");
$no=0;
while("true"){
$no=$no+1;
$a = explode('"name":"',$result)[$no];
$nm = explode('"',$a)[0];
$a = explode('"ric":"',$result)[$no];
$ric = explode('"',$a)[0];
$a = explode('"active":',$result)[$no];
$ac = explode(',',$a)[0];
$a = explode('"payment_rate_turbo":',$result)[$no];
$pay = explode(',',$a)[0];
if($ric=="EURO"){
$ric="Z-EUR%2FUSD";
}
if($nm==""){
break;
}
echo "\033[1;97mCODE: \033[1;92m$ric \033[1;97mMARKET: \033[102m \033[1;94m$nm \033[0m \033[1;97mACTIVE: \033[102m \033[1;94m$ac \033[0m \033[102m \033[1;94m$pay% \033[0m\n";
if($no=="50"){
break;
}
}
echo "\n \033[1;97mPlease enter \033[102m \033[1;94mMarket Code \033[0m\033[1;96m: \033[1;92m";
$code = trim(fgets(STDIN));
echo"          \033[1;97mInput \033[101m \033[1;97mMarket Name \033[0m\033[1;96m: \033[1;92m";
$mar = trim(fgets(STDIN));
echo "\n";
if($code==""){
exit;
}
if($mar==""){
echo" \033[1;91mCannot be Empty\n";
exit;
}
echo"\n";
echo " \033[1;97mMonth Input With Numbers->\033[1;91mExample \033[1;92m01 02 03 dst\n";
echo " \033[1;97mInput Current Month->  \033[1;90m: \033[1;92m";
$bln = trim(fgets(STDIN));
if($bln==""){
exit;
}
if($bln>12){
echo " \033[1;92mAre you drunk...??? Where There Are More Than 12 Months\n";
exit;
}
echo "\n";
echo " \033[1;97mDate If it's below 7 am, it's still yesterday\n";
echo " \033[1;97mEnter Date By Number-> \033[1;91mExample \033[1;92m01 02 03 dst\n";
echo " \033[1;97mEnter Today's Date-> \033[1;90m: \033[1;92m";
$tgl = trim(fgets(STDIN));
if($tgl==""){
exit;
}
if($tgl>31){
echo " \033[1;92mAre you drunk...??? Where There Is a Date More Than 31\n";
exit;
}
echo "\n";

while("true"){

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
"https://api.binomo-web.com/platform/candles/".$code."/2022-".$bln."-".$tgl."T00:00:00/60?locale=id");
//"https://api.binomo-investment.com/platform/candles/Z-CRY%2FIDX/2021-".$bln."-".$tgl."T00:00:00/60?locale=id");
//"https://api.binomo-webtrade.com/platform/candles/Z-CRY%2FIDX/2021-".$bln."-".$tgl."T00:00:00/60?locale=id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$json=json_decode($result);
$jm = substr($result, -665);
//echo $result."\n";
//echo $jm."\n";
//exit;
$a = explode('"high":',$jm)[1];
$h1 = explode(',',$a)[0];
$a = explode('"open":',$jm)[1];
$o1 = explode(',',$a)[0];
$a = explode('"close":',$jm)[1];
$c1 = explode(',',$a)[0];
$a = explode('"low":',$jm)[1];
$l1 = explode(',',$a)[0];

$a = explode('"high":',$jm)[2];
$h2 = explode(',',$a)[0];
$a = explode('"open":',$jm)[2];
$o2 = explode(',',$a)[0];
$a = explode('"close":',$jm)[2];
$c2 = explode(',',$a)[0];
$a = explode('"low":',$jm)[2];
$l2 = explode(',',$a)[0];

$a = explode('"high":',$jm)[3];
$h3 = explode(',',$a)[0];
$a = explode('"open":',$jm)[3];
$o3 = explode(',',$a)[0];
$a = explode('"close":',$jm)[3];
$c3 = explode(',',$a)[0];
$a = explode('"low":',$jm)[3];
$l3 = explode(',',$a)[0];

$a = explode('"high":',$jm)[4];
$h4 = explode(',',$a)[0];
$a = explode('"open":',$jm)[4];
$o4 = explode(',',$a)[0];
$a = explode('"close":',$jm)[4];
$c4 = explode(',',$a)[0];
$a = explode('"low":',$jm)[4];
$l4 = explode(',',$a)[0];

$a = explode('"high":',$jm)[5];
$h5 = explode(',',$a)[0];
$a = explode('"open":',$jm)[5];
$o5 = explode(',',$a)[0];
$a = explode('"close":',$jm)[5];
$c5 = explode(',',$a)[0];
$a = explode('"low":',$jm)[5];
$l5 = explode(',',$a)[0];

//$a = explode('"created_at":"',$jm)[4];
//$tt = explode('.',$a)[0];
$a = explode('"created_at":"',$jm)[5];
$t = explode('.',$a)[0];
$ts = substr($result, -33);
$a = explode('T',$ts)[1];
$T = explode('.',$a)[0];
if($T=="00:00:00"){
echo " \033[1;92mPlease Run the Script, and Change the Date Now......!!!\n";
exit;
}
//echo $t."\n";
//exit;
echo "\033[1;92m";
system("toilet -f wideterm -F border '$mar $t'");
echo "\033[100m \033[1;97mHigh  \033[1;92m".$h5." \033[0m ";
echo "\033[100m \033[1;97mOpen  \033[1;92m".$o5." \033[0m\n";
echo "\033[100m \033[1;97mClose \033[1;92m".$c5." \033[0m ";
echo "\033[100m \033[1;97mLow   \033[1;92m".$l5." \033[0m\n";
echo "\033[100m \033[1;97mTime  \033[1;92m".$t." \033[0m \n";
//
//C1
if($o1==$c1){ //DOJI
echo "\033[106m \033[1;91mDOJI    \033[0m ";
}else{
if($c1>$o1){ //BUY
$op= "\033[102m \033[1;94mBUYER   \033[0m";
$sa1=number_format($h1-$c1,9);
$sb1=number_format($o1-$l1,9);
$bd1=number_format($c1-$o1,9);
if($sa1==$sb1){
$op= "\033[103m \033[1;94mRAGU    \033[0m";
}
if($sa1>$bd1&&$o1==$l1){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa1<$bd1&&$o1==$l1){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb1>$bd1&&$h1==$c1){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb1<$bd1&&$h1==$c1){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($bd1*2<$sa1&&$o1==$l1){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd1*2<$sb1&&$h1==$c1){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd1*2<$sa1&&$o1>$l1){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd1*2<$sb1&&$h1>$c1){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}else{ //SEL
$op= "\033[101m \033[1;97mSELLER  \033[0m";
$sa1=number_format($h1-$o1,9);
$sb1=number_format($c1-$l1,9);
$bd1=number_format($o1-$c1,9);
//echo "$sa $sb";
//exit;
if($sa1==$sb1){
$op="\033[103m \033[1;96mRAGU     \033[0m";
}
if($sa1>$bd1&&$c1==$l1){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa1<$bd1&&$c1==$l1){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb1>$bd1&&$h1==$o1){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb1<$bd1&&$h1==$o1){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}

if($bd1*2<$sa1&&$o1==$l1){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd1*2<$sb1&&$h1==$o1){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd1*2<$sa1&&$c1>$l1){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd1*2<$sb1&&$h1>$o1){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}
//echo $op;
}

//C2
if($o2==$c2){ //DOJI
echo "\033[106m \033[1;91mDOJI    \033[0m ";
}else{
if($c2>$o2){ //BUY
$op= "\033[102m \033[1;94mBUYER   \033[0m";
$sa2=number_format($h2-$c2,9);
$sb2=number_format($o2-$l2,9);
$bd2=number_format($c2-$o2,9);
if($sa2==$sb2){
$op= "\033[103m \033[1;96mRAGU    \033[0m";
}
if($sa2>$bd2&&$o2==$l2){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa2<$bd2&&$o2==$l2){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb2>$bd2&&$h2==$c2){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb2<$bd2&&$h2==$c2){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($bd2*2<$sa2&&$o2==$l2){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd2*2<$sb2&&$h2==$c2){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd2*2<$sa2&&$o2>$l2){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd2*2<$sb2&&$h2>$c2){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}else{ //SEL
$op= "\033[101m \033[1;97mSELLER  \033[0m";
$sa2=number_format($h2-$o2,9);
$sb2=number_format($c2-$l2,9);
$bd2=number_format($o2-$c2,9);
//echo "$sa $sb";
//exit;
if($sa2==$sb2){
$op="\033[103m \033[1;96mRAGU     \033[0m";
}
if($sa2>$bd2&&$c2==$l2){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa2<$bd2&&$c2==$l2){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb2>$bd2&&$h2==$o2){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb2<$bd2&&$h2==$o2){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}

if($bd2*2<$sa2&&$o2==$l2){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd2*2<$sb2&&$h2==$o2){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd2*2<$sa2&&$c2>$l2){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd2*2<$sb2&&$h2>$o2){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}
//echo $op;
}

//C3
if($o3==$c3){ //DOJI
echo "\033[106m \033[1;91mDOJI    \033[0m ";
}else{
if($c3>$o3){ //BUY
$op= "\033[102m \033[1;94mBUYER   \033[0m";
$sa3=number_format($h3-$c3,9);
$sb3=number_format($o3-$l3,9);
$bd3=number_format($c3-$o3,9);
if($sa3==$sb3){
$op= "\033[103m \033[1;96mRAGU    \033[0m";
}
if($sa3>$bd3&&$o3==$l3){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa3<$bd3&&$o3==$l3){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb3>$bd3&&$h3==$c3){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb3<$bd3&&$h3==$c3){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($bd3*2<$sa3&&$o3==$l3){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd3*2<$sb3&&$h3==$c3){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd3*2<$sa3&&$o3>$l3){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd3*2<$sb3&&$h3>$c3){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}else{ //SEL
$op= "\033[101m \033[1;97mSELLER  \033[0m";
$sa3=number_format($h3-$o3,9);
$sb3=number_format($c3-$l3,9);
$bd3=number_format($o3-$c3,9);
//echo "$sa $sb";
//exit;
if($sa3==$sb3){
$op="\033[103m \033[1;96mRAGU     \033[0m";
}
if($sa3>$bd3&&$c3==$l3){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa3<$bd3&&$c3==$l3){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb3>$bd3&&$h3==$o3){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb3<$bd3&&$h3==$o3){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}

if($bd3*2<$sa3&&$o3==$l3){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd3*2<$sb3&&$h3==$o3){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd3*2<$sa3&&$c3>$l3){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd3*2<$sb3&&$h3>$o3){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}
//echo $op;
}

//C4
if($o4==$c4){ //DOJI
echo "\033[106m \033[1;91mDOJI    \033[0m ";
}else{
if($c4>$o4){ //BUY
$op= "\033[102m \033[1;94mBUYER   \033[0m";
$sa4=number_format($h4-$c4,9);
$sb4=number_format($o4-$l4,9);
$bd4=number_format($c4-$o4,9);
if($sa4==$sb4){
$op= "\033[103m \033[1;96mRAGU    \033[0m";
}
if($sa4>$bd4&&$o4==$l4){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa4<$bd4&&$o4==$l4){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb4>$bd4&&$h4==$c4){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb4<$bd4&&$h4==$c4){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($bd4*2<$sa4&&$o4==$l4){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd4*2<$sb4&&$h4==$c4){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd4*2<$sa4&&$o4>$l4){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd4*2<$sb4&&$h4>$c4){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}else{ //SEL
$op= "\033[101m \033[1;97mSELLER  \033[0m";
$sa4=number_format($h4-$o4,9);
$sb4=number_format($c4-$l4,9);
$bd4=number_format($o4-$c4,9);
//echo "$sa $sb";
//exit;
if($sa4==$sb4){
$op="\033[103m \033[1;96mRAGU     \033[0m";
}
if($sa4>$bd4&&$c4==$l4){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sa4<$bd4&&$c4==$l4){
$op= "\033[102m \033[1;94mBUYER   \033[0m";
}
if($sb4>$bd4&&$h4==$o4){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}
if($sb4<$bd4&&$h4==$o4){
$op= "\033[101m \033[1;97mSELLER  \033[0m";
}

if($bd4*2<$sa4&&$o4==$l4){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
if($bd4*2<$sb4&&$h4==$o4){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd4*2<$sa4&&$c4>$l4){
$op= "\033[101m \033[1;97mSELLER- \033[0m";
}
if($bd4*2<$sb4&&$h4>$o4){
$op= "\033[102m \033[1;94mBUYER+  \033[0m";
}
echo $op." ";
}
//echo $op;
}

if($c3>$o3&&$o4>$c4&&$c1>$o1&&$c2>$o2){
$op= "\033[101m \033[1;97mRESISTEN \033[0m";
echo $op." ";
}
if($c3<$o3&&$o4<$c4&&$c1<$o1&&$c2<$o2){
$op= "\033[102m \033[1;94mSUPPORT  \033[0m";
echo $op." ";
}
//

if($c5>$o5){
echo "\033[102m \033[1;94mBUYER   \033[0m \n\n";
}else{
echo "\033[101m  \033[1;97mSELLER  \033[0m \n\n";
}
//sleep(1);
}

