<html><body>
<?
//Составить 30 матриц 3х3, заполненных уникальными значениями от 1 до 9 рандомно (значения в одной матрице 3х3 не повторяются)
//Посчитать для каждой строки сумму и вывести список уникальных сумм

 //   phpinfo();
  //  $a=[1];
 //   $d=[];
    $n=30;$matrix=3;
    for ($i=0;$i<$n;$i++){
        for($k=1;$k<=$matrix*$matrix;$k++){
            $d[$k] = $k;
        }
        for ($t=0;$t<=$matrix*$matrix-1;$t++) {
            $current = array_rand($d); //Возвращает слючайный ключ
            $a[$i][$t%$matrix][$t/$matrix] = $d[$current];
            unset($d[$current]);
        }
    }
//    $s=[];
    for ($j=0;$j<$n;$j++){
        for ($ki=0;$ki<=$matrix-1;$ki++){
            $s[$j+$ki*$n] = array_sum($a[$j][$ki]);
        }
    }
    $s = array_unique($s);
    echo "<pre>";
        var_dump($s);
        var_dump(count($s));
//        var_dump($a);
    echo "<pre>";

// shuffle array_values - можно было сделать так
?>
</body></html>