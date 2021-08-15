<?php


function __($str){
  $ln = [
      'hello' => 'ഹലോ',
      'sevafarm' => 'സേവാഫാം',
      'quantity' => 'അളവ്' ,
      'delivery' => 'ഡെലിവറി',
      'notifications' => 'അറിയിപ്പ്',
      'entry' => 'ഉൽപ്പന്നങ്ങൾ വാങ്ങുക',
      'database' => 'ഡാറ്റാബേസ്',
      'stocks' => 'ഉൽപ്പന്നങ്ങൾ',
      'payment'=> 'പേയ്മെന്റ്',
      
      'cold storage'=> 'ശീതസംഭരണി',
      'open storage'=> 'തുറന്ന സംഭരണം',
      'temp'=>'താപനില',
      'humidity'=>'ഈർപ്പം',
      'control'=>'നിയന്ത്രിക്കു',
      'seasonal products'=>'സീസണൽ ഉൽപ്പന്നങ്ങൾ',
      'storage conditions'=>'സംഭരണ നില',
      
      'category'=>'വിഭാഗം',
      'fruits'=>'പഴം',
      'vegetables'=>'പച്ചക്കറി',
      'cereals'=>'ധാന്യങ്ങൾ',
      'pulses'=>'പയർവർഗ്ഗങ്ങൾ',
      'product'=>'ഉൽപ്പന്നം',
      'products'=>'ഉൽപ്പന്നങ്ങൾ',
      'date'=>'തീയതി',
      'details'=>'വിശദാംശങ്ങൾ',
      'name'=>'പേര്',
      'account'=>'അക്കൗണ്ട്',
      'dues'=>'കുടിശ്ശിക',
      'customer id'=>'കസ്റ്റമർ ഐഡി',
      'id'=>'ഐഡി',
      'status'=>'നിലവിൽ',
      'order time'=>'ഓർഡർ സമയം',
      'farmer id'=>'കർഷക ഐഡി',
      'open'=>'തുറക്കു',
      'add'=>'ചേർക്കുക',
      'price'=>'വില /kg',
      'edit price'=>'വില മാറ്റങ്ങൾ',
      //products
      'ladyfinger' => 'വെണ്ടക്ക',
      'mango' => 'മാമ്പഴം',
    
      
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
