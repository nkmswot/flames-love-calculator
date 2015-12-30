<?php
//ini_set('max_execution_time', 10); 
/**
	*	Flames Calculator 1.0
	*	@author Karhik <mail2nkm@gmail.com>
	*	@copyright Karthik Swot
	*	@param string $name1
	*	@param  string $name
	*	@return string Flames Value
*/
//initialize
$tot=0;
$name1="karthik mani";
$name2="anitha";
$flames='flames';


//find string length
$name1_len=strlen(str_replace(" ", "", $name1));
$name2_len=strlen(str_replace(" ", "", $name2));
$flames_len=strlen($flames);



//find odd values
for($i=0;$i<$name1_len; $i++){
	for($j=0;$j<$name2_len; $j++){
		if($name1[$i]==$name2[$j]){
			$name2[$j]=" ";
			$name1[$i]=" ";
			break;
		}
	}	
}

//sum odd values
$tot=strlen(str_replace(" ", "", $name1))+strlen(str_replace(" ", "", $name2));
echo $tot;
$j=0;

//find flames value
for($k=0;$k<6;$k++){
for($i=1;$i<=$tot;$i++){
	if($j==strlen($flames)){
		$j=0;
	}
	if($i==$tot AND strlen($flames)>1){
	echo $i."-".$flames[$j];	
	$flames[$j]=" ";	
	$flames=str_replace(" ", "", $flames);
	}
	else{
	$j=$j+1;
	}
}
echo "\n";
}

//display flames value
echo "\n ".flames_value($flames);


function flames_value($alpha){
	switch($alpha){

	case 'f':
	return "Friend";
	
	case 'l':
	return "Lover";
	
	case 'a':
	return "Affection";

	case 'm':
	return "Marriage";

	case 'e':
	return "Enemy";

	case 's':
	return "Sister";

	default:
	return "Wrong Input";
}

}
