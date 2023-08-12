<?php
/*
*1 tính tổng các số chẵn từ 1đến n(n>=2)
T1 = 2 + 4 + 6 + ... +n
*2 tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n(n>=3)
t2 = 1/3 + 1/6 + ... + 1/n
*3tinhs tổng chuổi
T3 = 1/2 + 2/3 + 3/4 + ... n/n+1 (n>=1)
*giải phương trình bậc 2
*/
// $n = 10;
// $t1 = 0;
// for($i = 2; $i <= $n; $t1++){
//     if($t1 % 2 == 0)
//     $t1 = $t1 + $i;
// }
// echo $t1; ?>
<?php
$n = 6;
$t2 = 0;
for($i = 3; $i <= $n; $i += 3){
    $t2 += (1/$i);
}
echo $t2;   
?> </br>
<?php
$v1 = 10;
$v2 = 0;
for($i = 2; $i < $v1; $i++){
    $v2 = $v2 + $i;
}
echo $v2; 
?> </br> <?php
# cấu trúc lựa chọn btdk đúng để xuất ra
// if(btdk1){
//     #thực hiện btdk1 đúng ==> trual
// }elseif(btdk2){
//     thực thi btdk1 sai btdk2 đúng
// }... 
// elseif(btdk n){
//     thực hiện btdk1,2,...n-1 sai => thwucj hiện btdk n đúng
// }else{
//     thực hiện btdk 1,2,3,... n sai
// }
$n1 = 10;
$n2 = 5;
if($n1 == 15 && $n2 > 3){
        echo "btdk1 đúng";
    }elseif($n1 % 3 == 0){
        echo "$1 chia hết cho 3";
    }
    elseif($n1 % $n2 == 0){
        echo "n1/n2 bằng 2";
    }else{
       echo "vô nghiệm";
    } ?> </br>
    <?php
    $a = 2;
    $b = -4;
    $c = 0;
    $delta = $b*$b-4*$a*$c;
    if($delta < 0){
        echo "Phương trình vô nghiệm";
    }elseif($delta == 0){
    $x = -$b/2*$a;
    echo "phương trình có nghiệm là x={$x}";
}elseif($delta > 0){
    $x1 = (-$b + sqrt($delta))/2*$a;
    $x2 = (-$b - sqrt($delta))/2*$a;
    echo "phương trình có nghiệm là x1:={$x1} x2:={$x2}";
}else{
    echo "đây không phải là phương trình bậc 2".'</br>';
} ?> 
<?php echo $delta;
?>
<?php
