<?php


function __($str){
  $ln = [
      'hello' => 'ഹലോ',
      'mango' => 'മാമ്പഴം',
      'sevafarm' => 'സേവാഫാം',
      'ladyfinger' => 'വെണ്ടക്ക',
      'quantity' => 'അളവ്' ,
  ];
    $str = strtolower($str);
    if( array_key_exists($str,$ln) ){
        echo $ln[$str];
    }
    else{
        echo $str;
    }
}
?>
