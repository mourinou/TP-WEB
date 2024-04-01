<?php
$N=mt_rand(100,999);
$cmp=0;
for($cmpt=0;$cmp!=$N;$cmpt++)
    $cmp=mt_rand(100,999);
echo "le nombre est $N et le nombre d'éssaie est $cmpt";
?>