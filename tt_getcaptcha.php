<?php
session_start();

$numbers=array();

for ($i=0;$i<=9;$i++)
{
    $numbers[$i]=array();

    for ($j=0;$j<=2;$j++)
    {
        $numbers[$i][$j]=array();
    }  
}

$numbers[0][0][0]=array();
$numbers[0][0][0]["width"]="20px";
$numbers[0][0][0]["height"]="25px";
$numbers[0][0][0]["box-shadow"]="4px 0px 0 0px";
$numbers[0][0][0]["margin"]="11px auto 0px 5px";
$numbers[0][0][0]["rotate"]=0;

$numbers[0][0][1]=array();
$numbers[0][0][1]["width"]="15px";
$numbers[0][0][1]["height"]="25px";
$numbers[0][0][1]["box-shadow"]="-4px 0px 0 0px";
$numbers[0][0][1]["margin"]="11px auto 0px 15px";
$numbers[0][0][1]["rotate"]=0;

$numbers[0][1][0]=array();
$numbers[0][1][0]["width"]="20px";
$numbers[0][1][0]["height"]="35px";
$numbers[0][1][0]["box-shadow"]="4px 2px 0 0px";
$numbers[0][1][0]["margin"]="5px auto 0px -5px";
$numbers[0][1][0]["rotate"]=0;

$numbers[0][1][1]=array();
$numbers[0][1][1]["width"]="15px";
$numbers[0][1][1]["height"]="35px";
$numbers[0][1][1]["box-shadow"]="-4px 2px 0 0px";
$numbers[0][1][1]["margin"]="5px auto 0px 5px";
$numbers[0][1][1]["rotate"]=0;

$numbers[0][2][0]=array();
$numbers[0][2][0]["width"]="16px";
$numbers[0][2][0]["height"]="44px";
$numbers[0][2][0]["box-shadow"]="5px 2px 0 0px";
$numbers[0][2][0]["margin"]="2px auto 0px 3px";
$numbers[0][2][0]["rotate"]=0;

$numbers[0][2][1]=array();
$numbers[0][2][1]["width"]="16px";
$numbers[0][2][1]["height"]="44px";
$numbers[0][2][1]["box-shadow"]="-5px 2px 0 0px";
$numbers[0][2][1]["margin"]="2px auto 0px 10px";
$numbers[0][2][1]["rotate"]=0;

$numbers[1][0][0]=array();
$numbers[1][0][0]["width"]="10px";
$numbers[1][0][0]["height"]="40px";
$numbers[1][0][0]["box-shadow"]="5px -8px 0 0px";
$numbers[1][0][0]["margin"]="15px auto 0px 5px";
$numbers[1][0][0]["rotate"]=0;

$numbers[1][1][0]=array();
$numbers[1][1][0]["width"]="8px";
$numbers[1][1][0]["height"]="33px";
$numbers[1][1][0]["box-shadow"]="5px 5px 0 0px";
$numbers[1][1][0]["margin"]="0px auto 0px 5px";
$numbers[1][1][0]["rotate"]=0;

$numbers[1][2][0]=array();
$numbers[1][2][0]["width"]="5px";
$numbers[1][2][0]["height"]="34px";
$numbers[1][2][0]["box-shadow"]="5px 5px 0 0px";
$numbers[1][2][0]["margin"]="5px auto 0px 5px";
$numbers[1][2][0]["rotate"]=0;

$numbers[2][0][0]=array();
$numbers[2][0][0]["width"]="20px";
$numbers[2][0][0]["height"]="20px";
$numbers[2][0][0]["box-shadow"]="0px -5px 0 0px";
$numbers[2][0][0]["margin"]="8px auto 0px 2px";
$numbers[2][0][0]["rotate"]=0;

$numbers[2][0][1]=array();
$numbers[2][0][1]["width"]="10px";
$numbers[2][0][1]["height"]="30px";
$numbers[2][0][1]["box-shadow"]="5px 7px 0 0px";
$numbers[2][0][1]["margin"]="4px auto 0px 8px";
$numbers[2][0][1]["rotate"]=30;

$numbers[2][0][2]=array();
$numbers[2][0][2]["width"]="20px";
$numbers[2][0][2]["height"]="10px";
$numbers[2][0][2]["box-shadow"]="0px -5px 0 0px";
$numbers[2][0][2]["margin"]="37px auto 0px 4px";
$numbers[2][0][2]["rotate"]=0;

$numbers[2][1][0]=array();
$numbers[2][1][0]["width"]="20px";
$numbers[2][1][0]["height"]="28px";
$numbers[2][1][0]["box-shadow"]="5px -6px 0 0px";
$numbers[2][1][0]["margin"]="8px auto 0px 0px";
$numbers[2][1][0]["rotate"]=-10;

$numbers[2][1][1]=array();
$numbers[2][1][1]["width"]="10px";
$numbers[2][1][1]["height"]="30px";
$numbers[2][1][1]["box-shadow"]="5px 7px 0 0px";
$numbers[2][1][1]["margin"]="7px auto 0px 8px";
$numbers[2][1][1]["rotate"]=35;

$numbers[2][1][2]=array();
$numbers[2][1][2]["width"]="15px";
$numbers[2][1][2]["height"]="10px";
$numbers[2][1][2]["box-shadow"]="5px -5px 0 0px";
$numbers[2][1][2]["margin"]="37px auto 0px 4px";
$numbers[2][1][2]["rotate"]=0;

$numbers[2][2][0]=array();
$numbers[2][2][0]["width"]="20px";
$numbers[2][2][0]["height"]="28px";
$numbers[2][2][0]["box-shadow"]="5px -6px 0 0px";
$numbers[2][2][0]["margin"]="8px auto 0px 0px";
$numbers[2][2][0]["rotate"]=0;

$numbers[2][2][1]=array();
$numbers[2][2][1]["width"]="10px";
$numbers[2][2][1]["height"]="30px";
$numbers[2][2][1]["box-shadow"]="5px 7px 0 0px";
$numbers[2][2][1]["margin"]="7px auto 0px 8px";
$numbers[2][2][1]["rotate"]=35;

$numbers[2][2][2]=array();
$numbers[2][2][2]["width"]="15px";
$numbers[2][2][2]["height"]="5px";
$numbers[2][2][2]["box-shadow"]="12px -5px 0 0px";
$numbers[2][2][2]["margin"]="39px auto 0px -3px";
$numbers[2][2][2]["rotate"]=10;

$numbers[3][0][0]=array();
$numbers[3][0][0]["width"]="30px";
$numbers[3][0][0]["height"]="15px";
$numbers[3][0][0]["box-shadow"]="8px 0px 0 0px";
$numbers[3][0][0]["margin"]="5px auto 0px -15px";
$numbers[3][0][0]["rotate"]=0;

$numbers[3][0][1]=array();
$numbers[3][0][1]["width"]="30px";
$numbers[3][0][1]["height"]="20px";
$numbers[3][0][1]["box-shadow"]="8px 0px 0 0px";
$numbers[3][0][1]["margin"]="20px auto 0px -15px";
$numbers[3][0][1]["rotate"]=0;

$numbers[3][1][0]=array();
$numbers[3][1][0]["width"]="20px";
$numbers[3][1][0]["height"]="18px";
$numbers[3][1][0]["box-shadow"]="8px 2px 0 0px";
$numbers[3][1][0]["margin"]="2px auto 0px -10px";
$numbers[3][1][0]["rotate"]=0;

$numbers[3][1][1]=array();
$numbers[3][1][1]["width"]="30px";
$numbers[3][1][1]["height"]="25px";
$numbers[3][1][1]["box-shadow"]="8px 2px 0 0px";
$numbers[3][1][1]["margin"]="20px auto 0px -15px";
$numbers[3][1][1]["rotate"]=0;

$numbers[3][2][0]=array();
$numbers[3][2][0]["width"]="20px";
$numbers[3][2][0]["height"]="20px";
$numbers[3][2][0]["box-shadow"]="5px 2px 0 0px";
$numbers[3][2][0]["margin"]="5px auto 0px 5px";
$numbers[3][2][0]["rotate"]=0;

$numbers[3][2][1]=array();
$numbers[3][2][1]["width"]="20px";
$numbers[3][2][1]["height"]="20px";
$numbers[3][2][1]["box-shadow"]="5px 2px 0 0px";
$numbers[3][2][1]["margin"]="22px auto 0px -4px";
$numbers[3][2][1]["rotate"]=0;

$numbers[4][0][0]=array();
$numbers[4][0][0]["width"]="4px";
$numbers[4][0][0]["height"]="25px";
$numbers[4][0][0]["box-shadow"]="5px 7px 0 0px";
$numbers[4][0][0]["margin"]="0px auto 0px 7px";
$numbers[4][0][0]["rotate"]=30;

$numbers[4][0][1]=array();
$numbers[4][0][1]["width"]="25px";
$numbers[4][0][1]["height"]="5px";
$numbers[4][0][1]["box-shadow"]="5px -5px 0 0px";
$numbers[4][0][1]["margin"]="33px auto 0px 0px";
$numbers[4][0][1]["rotate"]=0;

$numbers[4][0][2]=array();
$numbers[4][0][2]["width"]="15px";
$numbers[4][0][2]["height"]="40px";
$numbers[4][0][2]["box-shadow"]="5px -3px 0 0px";
$numbers[4][0][2]["margin"]="12px auto 0px 5px";
$numbers[4][0][2]["rotate"]=0;

$numbers[4][1][0]=array();
$numbers[4][1][0]["width"]="5px";
$numbers[4][1][0]["height"]="35px";
$numbers[4][1][0]["box-shadow"]="5px 7px 0 0px";
$numbers[4][1][0]["margin"]="-5px auto 0px 3px";
$numbers[4][1][0]["rotate"]=20;

$numbers[4][1][1]=array();
$numbers[4][1][1]["width"]="25px";
$numbers[4][1][1]["height"]="5px";
$numbers[4][1][1]["box-shadow"]="5px -5px 0 0px";
$numbers[4][1][1]["margin"]="35px auto 0px -2px";
$numbers[4][1][1]["rotate"]=10;

$numbers[4][1][2]=array();
$numbers[4][1][2]["width"]="10px";
$numbers[4][1][2]["height"]="40px";
$numbers[4][1][2]["box-shadow"]="5px 7px 0 0px";
$numbers[4][1][2]["margin"]="0px auto 0px 5px";
$numbers[4][1][2]["rotate"]=-10;

$numbers[4][2][0]=array();
$numbers[4][2][0]["width"]="15px";
$numbers[4][2][0]["height"]="25px";
$numbers[4][2][0]["box-shadow"]="5px 3px 0 0px";
$numbers[4][2][0]["margin"]="0px auto 0px -5px";
$numbers[4][2][0]["rotate"]=0;

$numbers[4][2][1]=array();
$numbers[4][2][1]["width"]="25px";
$numbers[4][2][1]["height"]="5px";
$numbers[4][2][1]["box-shadow"]="5px -5px 0 0px";
$numbers[4][2][1]["margin"]="27px auto 0px -2px";
$numbers[4][2][1]["rotate"]=-10;

$numbers[4][2][2]=array();
$numbers[4][2][2]["width"]="5px";
$numbers[4][2][2]["height"]="40px";
$numbers[4][2][2]["box-shadow"]="5px 5px 0 0px";
$numbers[4][2][2]["margin"]="0px auto 0px 11px";
$numbers[4][2][2]["rotate"]=0;

$numbers[5][0][0]=array();
$numbers[5][0][0]["width"]="20px";
$numbers[5][0][0]["height"]="5px";
$numbers[5][0][0]["box-shadow"]="5px -5px 0 0px";
$numbers[5][0][0]["margin"]="10px auto 0px 0px";
$numbers[5][0][0]["rotate"]=0;

$numbers[5][0][1]=array();
$numbers[5][0][1]["width"]="8px";
$numbers[5][0][1]["height"]="15px";
$numbers[5][0][1]["box-shadow"]="5px -5px 0 0px";
$numbers[5][0][1]["margin"]="12px auto 0px -3px";
$numbers[5][0][1]["rotate"]=0;

$numbers[5][0][2]=array();
$numbers[5][0][2]["width"]="30px";
$numbers[5][0][2]["height"]="25px";
$numbers[5][0][2]["box-shadow"]="8px 0px 0 0px";
$numbers[5][0][2]["margin"]="20px auto 0px -15px";
$numbers[5][0][2]["rotate"]=0;

$numbers[5][1][0]=array();
$numbers[5][1][0]["width"]="15px";
$numbers[5][1][0]["height"]="5px";
$numbers[5][1][0]["box-shadow"]="5px -5px 0 0px";
$numbers[5][1][0]["margin"]="15px auto 0px 5px";
$numbers[5][1][0]["rotate"]=0;

$numbers[5][1][1]=array();
$numbers[5][1][1]["width"]="5px";
$numbers[5][1][1]["height"]="10px";
$numbers[5][1][1]["box-shadow"]="5px 5px 0 0px";
$numbers[5][1][1]["margin"]="8px auto 0px 5px";
$numbers[5][1][1]["rotate"]=0;

$numbers[5][1][2]=array();
$numbers[5][1][2]["width"]="26px";
$numbers[5][1][2]["height"]="20px";
$numbers[5][1][2]["box-shadow"]="5px 0px 0 0px";
$numbers[5][1][2]["margin"]="22px auto 0px -5px";
$numbers[5][1][2]["rotate"]=0;

$numbers[5][2][0]=array();
$numbers[5][2][0]["width"]="25px";
$numbers[5][2][0]["height"]="5px";
$numbers[5][2][0]["box-shadow"]="5px 7px 0 0px";
$numbers[5][2][0]["margin"]="10px auto 0px 0px";
$numbers[5][2][0]["rotate"]=0;

$numbers[5][2][1]=array();
$numbers[5][2][1]["width"]="5px";
$numbers[5][2][1]["height"]="15px";
$numbers[5][2][1]["box-shadow"]="5px 7px 0 0px";
$numbers[5][2][1]["margin"]="8px auto 0px 2px";
$numbers[5][2][1]["rotate"]=0;

$numbers[5][2][2]=array();
$numbers[5][2][2]["width"]="25px";
$numbers[5][2][2]["height"]="20px";
$numbers[5][2][2]["box-shadow"]="8px -1px 0 0px";
$numbers[5][2][2]["margin"]="29px auto 0px -5px";
$numbers[5][2][2]["rotate"]=0;

$numbers[6][0][0]=array();
$numbers[6][0][0]["width"]="30px";
$numbers[6][0][0]["height"]="40px";
$numbers[6][0][0]["box-shadow"]="-5px 0px 0 0px";
$numbers[6][0][0]["margin"]="5px auto 0px 7px";
$numbers[6][0][0]["rotate"]=0;

$numbers[6][0][1]=array();
$numbers[6][0][1]["width"]="25px";
$numbers[6][0][1]["height"]="25px";
$numbers[6][0][1]["box-shadow"]="5px 0px 0 0px";
$numbers[6][0][1]["margin"]="20px auto 0px -3px";
$numbers[6][0][1]["rotate"]=0;

$numbers[6][1][0]=array();
$numbers[6][1][0]["width"]="40px";
$numbers[6][1][0]["height"]="30px";
$numbers[6][1][0]["box-shadow"]="-5px 0px 0 0px";
$numbers[6][1][0]["margin"]="5px auto 0px 7px";
$numbers[6][1][0]["rotate"]=0;

$numbers[6][1][1]=array();
$numbers[6][1][1]["width"]="15px";
$numbers[6][1][1]["height"]="15px";
$numbers[6][1][1]["box-shadow"]="5px 0px 0 0px";
$numbers[6][1][1]["margin"]="20px auto 0px 0px";
$numbers[6][1][1]["rotate"]=0;

$numbers[6][2][0]=array();
$numbers[6][2][0]["width"]="25px";
$numbers[6][2][0]["height"]="44px";
$numbers[6][2][0]["box-shadow"]="-5px 2px 0 0px";
$numbers[6][2][0]["margin"]="0px auto 0px 7px";
$numbers[6][2][0]["rotate"]=0;

$numbers[6][2][1]=array();
$numbers[6][2][1]["width"]="15px";
$numbers[6][2][1]["height"]="28px";
$numbers[6][2][1]["box-shadow"]="5px -3px 0 0px";
$numbers[6][2][1]["margin"]="20px auto 0px 0px";
$numbers[6][2][1]["rotate"]=0;

$numbers[7][0][0]=array();
$numbers[7][0][0]["width"]="25px";
$numbers[7][0][0]["height"]="7px";
$numbers[7][0][0]["box-shadow"]="5px 5px 0 0px";
$numbers[7][0][0]["margin"]="0px auto 0px 0px";
$numbers[7][0][0]["rotate"]=0;

$numbers[7][0][1]=array();
$numbers[7][0][1]["width"]="5px";
$numbers[7][0][1]["height"]="35px";
$numbers[7][0][1]["box-shadow"]="5px 7px 0 0px";
$numbers[7][0][1]["margin"]="-2px auto 0px 13px";
$numbers[7][0][1]["rotate"]=30;

$numbers[7][1][0]=array();
$numbers[7][1][0]["width"]="25px";
$numbers[7][1][0]["height"]="15px";
$numbers[7][1][0]["box-shadow"]="5px 5px 0 0px";
$numbers[7][1][0]["margin"]="-5px auto 0px 0px";
$numbers[7][1][0]["rotate"]=0;

$numbers[7][1][1]=array();
$numbers[7][1][1]["width"]="8px";
$numbers[7][1][1]["height"]="35px";
$numbers[7][1][1]["box-shadow"]="-5px 9px 0 0px";
$numbers[7][1][1]["margin"]="-2px auto 0px 23px";
$numbers[7][1][1]["rotate"]=20;

$numbers[7][2][0]=array();
$numbers[7][2][0]["width"]="22px";
$numbers[7][2][0]["height"]="15px";
$numbers[7][2][0]["box-shadow"]="5px 8px 0 0px";
$numbers[7][2][0]["margin"]="-5px auto 0px -4px";
$numbers[7][2][0]["rotate"]=0;

$numbers[7][2][1]=array();
$numbers[7][2][1]["width"]="18px";
$numbers[7][2][1]["height"]="40px";
$numbers[7][2][1]["box-shadow"]="-5px -4px 0 0px";
$numbers[7][2][1]["margin"]="15px auto 0px 15px";
$numbers[7][2][1]["rotate"]=0;

$numbers[8][0][0]=array();
$numbers[8][0][0]["width"]="10px";
$numbers[8][0][0]["height"]="8px";
$numbers[8][0][0]["box-shadow"]="4px 0px 0 0px";
$numbers[8][0][0]["margin"]="5px auto 0px 10px";
$numbers[8][0][0]["rotate"]=0;

$numbers[8][0][1]=array();
$numbers[8][0][1]["width"]="10px";
$numbers[8][0][1]["height"]="15px";
$numbers[8][0][1]["box-shadow"]="4px 0px 0 0px";
$numbers[8][0][1]["margin"]="11px auto 0px 10px";
$numbers[8][0][1]["rotate"]=0;

$numbers[8][0][2]=array();
$numbers[8][0][2]["width"]="10px";
$numbers[8][0][2]["height"]="8px";
$numbers[8][0][2]["box-shadow"]="-4px 0px 0 0px";
$numbers[8][0][2]["margin"]="5px auto 0px 15px";
$numbers[8][0][2]["rotate"]=0;

$numbers[8][0][3]=array();
$numbers[8][0][3]["width"]="10px";
$numbers[8][0][3]["height"]="15px";
$numbers[8][0][3]["box-shadow"]="-4px 0px 0 0px";
$numbers[8][0][3]["margin"]="11px auto 0px 15px";
$numbers[8][0][3]["rotate"]=0;

$numbers[8][1][0]=array();
$numbers[8][1][0]["width"]="10px";
$numbers[8][1][0]["height"]="18px";
$numbers[8][1][0]["box-shadow"]="4px 0px 0 0px";
$numbers[8][1][0]["margin"]="10px auto 0px 10px";
$numbers[8][1][0]["rotate"]=0;

$numbers[8][1][1]=array();
$numbers[8][1][1]["width"]="20px";
$numbers[8][1][1]["height"]="25px";
$numbers[8][1][1]["box-shadow"]="4px 0px 0 0px";
$numbers[8][1][1]["margin"]="21px auto 0px 5px";
$numbers[8][1][1]["rotate"]=0;

$numbers[8][1][2]=array();
$numbers[8][1][2]["width"]="10px";
$numbers[8][1][2]["height"]="18px";
$numbers[8][1][2]["box-shadow"]="-4px 0px 0 0px";
$numbers[8][1][2]["margin"]="10px auto 0px 15px";
$numbers[8][1][2]["rotate"]=0;

$numbers[8][1][3]=array();
$numbers[8][1][3]["width"]="20px";
$numbers[8][1][3]["height"]="25px";
$numbers[8][1][3]["box-shadow"]="-4px 0px 0 0px";
$numbers[8][1][3]["margin"]="21px auto 0px 15px";
$numbers[8][1][3]["rotate"]=0;

$numbers[8][2][0]=array();
$numbers[8][2][0]["width"]="22px";
$numbers[8][2][0]["height"]="12px";
$numbers[8][2][0]["box-shadow"]="4px 0px 0 0px";
$numbers[8][2][0]["margin"]="10px auto 0px 2px";
$numbers[8][2][0]["rotate"]=0;

$numbers[8][2][1]=array();
$numbers[8][2][1]["width"]="28px";
$numbers[8][2][1]["height"]="25px";
$numbers[8][2][1]["box-shadow"]="-4px 0px 0 0px";
$numbers[8][2][1]["margin"]="21px auto 0px 8px";
$numbers[8][2][1]["rotate"]=0;

$numbers[8][2][2]=array();
$numbers[8][2][2]["width"]="22px";
$numbers[8][2][2]["height"]="12px";
$numbers[8][2][2]["box-shadow"]="-4px 0px 0 0px";
$numbers[8][2][2]["margin"]="10px auto 0px 8px";
$numbers[8][2][2]["rotate"]=0;

$numbers[8][2][3]=array();
$numbers[8][2][3]["width"]="28px";
$numbers[8][2][3]["height"]="25px";
$numbers[8][2][3]["box-shadow"]="4px 0px 0 0px";
$numbers[8][2][3]["margin"]="21px auto 0px 0px";
$numbers[8][2][3]["rotate"]=0;

$numbers[9][0][0]=array();
$numbers[9][0][0]["width"]="30px";
$numbers[9][0][0]["height"]="25px";
$numbers[9][0][0]["box-shadow"]="-6px 0px 0 0px";
$numbers[9][0][0]["margin"]="4px auto 0px 7px";
$numbers[9][0][0]["rotate"]=0;

$numbers[9][0][1]=array();
$numbers[9][0][1]["width"]="22px";
$numbers[9][0][1]["height"]="45px";
$numbers[9][0][1]["box-shadow"]="5px 5px 0 0px";
$numbers[9][0][1]["margin"]="-5px auto 0px -5px";
$numbers[9][0][1]["rotate"]=0;

$numbers[9][1][0]=array();
$numbers[9][1][0]["width"]="30px";
$numbers[9][1][0]["height"]="20px";
$numbers[9][1][0]["box-shadow"]="-7px 2px 0 0px";
$numbers[9][1][0]["margin"]="7px auto 0px 9px";
$numbers[9][1][0]["rotate"]=0;

$numbers[9][1][1]=array();
$numbers[9][1][1]["width"]="26px";
$numbers[9][1][1]["height"]="45px";
$numbers[9][1][1]["box-shadow"]="5px -2px 0 0px";
$numbers[9][1][1]["margin"]="8px auto 0px -2px";
$numbers[9][1][1]["rotate"]=0;

$numbers[9][2][0]=array();
$numbers[9][2][0]["width"]="20px";
$numbers[9][2][0]["height"]="20px";
$numbers[9][2][0]["box-shadow"]="-5px 2px 0 0px";
$numbers[9][2][0]["margin"]="5px auto 0px 15px";
$numbers[9][2][0]["rotate"]=0;

$numbers[9][2][1]=array();
$numbers[9][2][1]["width"]="26px";
$numbers[9][2][1]["height"]="40px";
$numbers[9][2][1]["box-shadow"]="5px 0px 0 0px";
$numbers[9][2][1]["margin"]="8px auto 0px -2px";
$numbers[9][2][1]["rotate"]=0;

$_SESSION["captcha"]="";

$captcha_content="";

for ($i=1;$i<=6;$i++)
{
    $captcha_char=rand(0,9);
    $_SESSION["captcha"].=$captcha_char;

    $random_set=rand(0,2);
    $random_degree=rand(-25,25);
    
    $captcha_content.="<div style=\"display:inline-block;width:30px;height:50px;margin-left:-5px;-ms-transform: rotate(".$random_degree."deg);-webkit-transform: rotate(".$random_degree."deg);transform: rotate(".$random_degree."deg);\">";

    foreach($numbers[$captcha_char][$random_set] as $stroke)
    {
        $captcha_content.="<div style=\"position:absolute;-webkit-border-radius: 63px 63px 63px 63px / 108px 108px 72px 72px;border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;";
        $captcha_content.="width:".$stroke["width"].";";
        $captcha_content.="height:".$stroke["height"].";";
        $captcha_content.="box-shadow:".$stroke["box-shadow"].";";
        $captcha_content.="margin:".$stroke["margin"].";";
        $captcha_content.="-ms-transform: rotate(".$stroke["rotate"]."deg);";
        $captcha_content.="-webkit-transform: rotate(".$stroke["rotate"]."deg);";
        $captcha_content.="transform: rotate(".$stroke["rotate"]."deg);";
        $captcha_content.="\">";
        $captcha_content.="</div>";
    }

    $captcha_content.="</div>";
}

echo $captcha_content;

$captcha_content="";
?>
