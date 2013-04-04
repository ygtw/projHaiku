<?php
error_reporting(E_ALL);
session_start();

$sh = scws_open();
scws_set_charset($sh, 'utf-8');

scws_set_dict($sh, 'C:\dict_cht.utf8.xdb');
//scws_set_rule($sh, 'C:\rules_cht.utf8.ini');


$text = "也許有，那其實是賦諸你我的無形規律遂想起當年，凝結流光歲月的溫柔刻度。或許是，這伺擁內心難以描繪的若干形骸遂想起當年，散心時延展你我視線的大片翠綠。聽說心靈中的孤寂總是深邃時而神秘，那麼守住小徑兀自張望的無從湧動的乾涸吶喊，有沒有出離夢境帶來片斷記憶的一絲或然率?我們的思維說不清每一個悸動當下的念頭，絕對的推理永遠理不斷任何一次無心的書寫。路上行人果然多得出奇。彼此關係只建立在腳步的快慢腳印的深淺交疊發生的先後順序與，展開自速度的階級美學。於焉以極端時髦的審視角度，看人，以及繼續呼吸。自此眼聾耳盲。嘈雜中漸漸，輕視嗅覺與味覺終於，風華絕代殿堂中背熟了統一風格的奧義體系。我傲視群倫並且，躬背哈腰。我們只能這麼說了，城市心靈角隅優越與其突變的劣等基因，雜遝盤據在意識的剖面。我只能這麼說了，無須重組本質及無法為心情命名，並且風雨驟驚。如此而已。所以不明白。不明白自喉間一躍而起的熟悉同時陌生的音律，為何總驟跌在與空氣互疊的倒影裏，此般安靜。";
scws_send_text($sh, $text);
$rst = scws_get_result($sh);


// 冠詞  形容詞 名詞 動詞 介系詞

//	[q] [a]	[n nr ns] [v]  [p ba bei]
/*
  [6] => Array
        (
            [word] => 只有
            [off] => 21
            [len] => 6
            [idf] => 6.2600002288818
            [attr] => d
        )
		
*/
print_r( $rst );
foreach ( $rst as $key => $value )
{ 
	$ss [ $value['attr'] ][]= $value['word'];


}

$ss['n'] = array_merge (  $ss['n'] , $ss['nr'] );
$ss['n'] = array_merge (  $ss['n'] , $ss['ns'] );

$ss['v'] = array_merge (  $ss['v'] , $ss['vn'] );

$ss['p'] = array_merge (  $ss['p'] , $ss['ba'] );
$ss['p'] = array_merge (  $ss['p'] , $ss['bei'] );

//$rnum = rand ( 0 , count($ss['a'])-1 ) ;
echo $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
echo '<br>';
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
echo $ss[ 'v' ][ rand ( 0 , count($ss['v'])-1 ) ];
echo $ss[ 'p' ][ rand ( 0 , count($ss['p'])-1 ) ];
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
echo '<br>';
echo $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'uj' ][ rand ( 0 , count($ss['uj'])-1 ) ];
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];


print_r($ss);




?>