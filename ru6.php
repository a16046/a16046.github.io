<?php
function Parse($p1, $p2, $p3) {
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
 
$String = file_get_contents('http://iptvsmotri.ru/tvru_iptvsmotri_ru/JGFIHIJLKLJHGUHJIJ5HGYH75HGFDUKJH8876HGYUUH/fluss.m3u');
$string = "echo $String";
$new_string = str_replace(", -", ",", $string);
echo $new_string;

?>