<?php  
//Change this text 
$strings = "الصوديوم هو عنصر كيميائي رمزه Na (من النطرون) وعدده الذرّي 11. ينتمي العنصر في الجدول الدوري إلى مجموعة الفلزّات القلوية كثاني عناصر المجموعة الأولى وضمن عناصر الدورة الثالثة";
include("RTL.php");
?>


<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RTL-algorithm</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<p>RTL algorithm created By Hossam hassan</p>
       
<div class="container">     
<p dir="<?php echo $DIR;  ?>"><?php echo $strings;  ?></p>
      </div>  
         <p>Percentage of English: <font color="red"><?php echo $percent  ?>%</font></p>
        <p>Dir: <font color="green"><?php echo $DIR;  ?></font> </p>
        <p>Original Text Without RTl</p>
   
        <div class="container">     
<p><?php echo $strings;  ?></p>
      </div>  
        
        
        
        
    </body>
</html>