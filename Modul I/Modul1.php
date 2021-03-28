<!DOCTYPE html>
<head>
    <title>Modul 1</title>
</head>
</style>
<body>

<?php 
$nama = ["Kevin Immanuel Rui Costa", 
         "Kevin Immanuel Rui C",
         "Kevin Immanuel RC", 
         "Kevin IRC",
         "Kevin",
         "KIRC"] ;

function hurufvokal($kata) {
  $a = substr_count($kata, 'a');
  $i = substr_count($kata, 'i');
  $u = substr_count($kata, 'u');
  $e = substr_count($kata, 'e');
  $o = substr_count($kata, 'o');
  $A = substr_count($kata, 'A');
  $I = substr_count($kata, 'I');
  $U = substr_count($kata, 'U');
  $E = substr_count($kata, 'E');
  $O = substr_count($kata, 'O');
  $vokal = ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);

  return $vokal;
}

function hurufkonsonan($kata) {
  $Huruf = strlen($kata);
  $a = substr_count($kata, 'a');
  $i = substr_count($kata, 'i');
  $u = substr_count($kata, 'u');
  $e = substr_count($kata, 'e');
  $o = substr_count($kata, 'o');
  $A = substr_count($kata, 'A');
  $I = substr_count($kata, 'I');
  $U = substr_count($kata, 'U');
  $E = substr_count($kata, 'E');
  $O = substr_count($kata, 'O');

  $konsonan = $Huruf - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O) - substr_count($kata,' ');

  return $konsonan;
}

function Spasi($kata){
return strlen($kata) - substr_count($kata,' ');
}

for ($i = 0  ; $i <= 5 ; $i++){
    echo "Nama ke - ".($i + 1)." : ".$nama[$i]."<br>";
    echo "Jumlah Kata  : " .str_word_count($nama[$i]). "<br>";
    echo "Jumlah Huruf : " .Spasi($nama[$i]). "<br>";
    echo "Kebalikan : " .strrev ($nama[$i]). "<br>";
    echo "Jumlah Huruf Konsonan : " .hurufkonsonan($nama[$i]). "<br>";
    echo "Jumlah Huruf Vokal :" .hurufvokal($nama[$i]). "<br><br>" ;  
}
?> 
</body>
</html>