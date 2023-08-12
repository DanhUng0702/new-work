<?php 
#cho biến a và nếu a là số nguyên chẵn và dương thì công 1 đơn vị cho a rồi xuất ra
$a  = 5;
if(($a >= 0) && ($a % 2 == 0)){
    $a = $a + 1;
} 
echo "a={$a}"; 
?>
