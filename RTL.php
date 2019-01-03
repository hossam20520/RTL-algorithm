


<?php  


$array_text = explode(" ", $strings);
								   
	$ar = array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','Q','q','R','r','S','s','T','t','U','u','V','v','W','w','X','x','Y','y','Z','z');
							   
$total = 0;
 for($ii =0; $ii<count($array_text); $ii++){
	 $txt = $array_text[$ii];
	 $first_char = substr($txt , 0,1);
for($i =0; $i<count($ar); $i++ ){
	
	if($ar[$i] == $first_char){
		
		$total++;
	}
}


 }
 $total;
 $total_array = count($array_text);
 $percent = $total/$total_array * 100;
 if($percent >= 50 ){
     
	$DIR = "ltr";
	 
 }else{
	 
	$DIR = "rtl";
 }



?>