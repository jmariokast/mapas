<?php

function numero($number,$n) {
return str_pad((int) $number,$n,"0",STR_PAD_LEFT);
}

for($i=1; $i <=999; $i++){
$id = date("Ym").numero($i,3);
if($id == '201309150' ){}else{echo $id."<br>";}
//if($i == '10'){}else{echo $i."<br>";}


}


?>