<?php 
 $url = 'http://theblacksheeponline.com/article/goldy-goes-on-strike-sanford-the-sloth-gets-called-up-to-the-big-leagues';
$json_string = file_get_contents('http://graph.facebook.com/?ids=' . $url);
    $json = json_decode($json_string, true);
    $return = 0;
    if (!empty($json[$url]['shares'])) {
        $return = intval($json[$url]['shares']);
    }
   echo $return;
    
    ?>
