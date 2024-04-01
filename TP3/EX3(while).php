<?php
$N=mt_rand(100,999);
$cmp=0;
$cmpt=0;
while($cmp!=$N){
    $cmp=mt_rand(100,999);
    $cmpt++;}
echo "le nombre est $N et le nombre d'éssaie est $cmpt";