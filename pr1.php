<?php 
function nexseed($greeting,$name){
 // echo $greeting.$name."くん";
	$greet = $greeting.$name."くん";
    return $greet;
}
// nexseed('こんばんは','たが');
echo nexseed('おはよう','いちのへ');

echo '</br>';

//演習問題1
function multiplication($a,$b){
    $m =  $a*$b;
    return $m;
}
echo multiplication(2,3);

echo '</br>';

//演習問題2
function average($a,$b){
	$c = ($a + $b)/2;
	if ($c>=10) {
        return $c;
	}else{
		return 0;
	}
}
echo average(16,10);
echo '</br>';
echo average(2,4);

echo '</br>';

//演習問題3
function shopping($a,$b){
	if ($a < $b) {
		return "お金が足りてません";
	}
	$c = $a-$b;
	return $c;
}
echo shopping(100,80);
echo '</br>';
echo shopping(40,60);

echo '</br>';

//演習問題4
function m($a,$b){
    if($a>=$b){
    	return $a;
    }else{
    	return $b;
    }
}
echo m(3,9);
 ?>