<?php
$n = $nn = 54;
$arLetter = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$str = '';
$cnt = count($arLetter);
$ost = 0;

while (intdiv($n, $cnt))
{ // пока есть целая часть от деления
      $ost = $n % $cnt; // остаток от деления
      $ost = $ost?:$cnt; // если делится без остатка, то это последняя буква алфавита
      $str .= $arLetter[$ost-1];
      $n = intdiv($n, $cnt);
      if($ost == $cnt) // если делится без остатка, то возврат к предыдущему блоку колонок
            $n--;
}

if($ost != 26 || $nn > $cnt)
      $str .=  $arLetter[$n-1]; // добавляем последнюю букву
$str = strrev($str); // переворачиваем строку

echo $str; // колонка xls

?>



<?php
function dp($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
?>
