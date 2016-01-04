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

echo flames('Karthik','Karthika');
//echo "-------------------------------------------------------- \n";


function flames($name1, $name2){

//initialize
$tot=0;
$flames='flames';

$name1=str_replace(" ", "", $name1);
$name2=str_replace(" ", "", $name2);

//find string length
$name1_len=strlen($name1);
$name2_len=strlen($name2);
$flames_len=strlen($flames);

$name1_len.$name2_len;

//find odd values
for($i=0;$i<$name1_len; $i++){
	//echo $i.$name1[$i]."--";
	for($j=0;$j<$name2_len; $j++){
		//echo $j.$name2[$j]."\n";
		if($name1[$i]==$name2[$j])
		{
			$name2[$j]=" ";
			$name1[$i]=" ";
			break;
		}

	}	

}

//sum odd values
$name1_val=str_replace(" ", "", $name1);
$name2_val=str_replace(" ", "", $name2);
$tot=strlen($name1_val)+strlen($name2_val);
$name1=str_replace(" ", "_", $name1);
$name2=str_replace(" ", "_", $name2);
echo "[ODD WORDS] ".$name1." -- ".$name2."\n";

echo "[Flames Numerical Value] ".$tot."\n";
$j=0;

//find flames value
for($k=0;$k<6;$k++){
for($i=1;$i<=$tot;$i++){
	if($j==strlen($flames)){
		$j=0;
	}
	if($i==$tot AND strlen($flames)>1){
	//echo $i."-".$flames[$j];	
	$flames[$j]=" ";	
	$flames=str_replace(" ", "", $flames);
	}
	else{
	$j=$j+1;
	}
}
//echo "\n";
}

//display flames value
return "\nYour Relation with the person is: ".flames_value($flames)."\n";
}

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


