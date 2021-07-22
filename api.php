<?php

$url = "http://35.175.118.233:3000/api/hello";
$api = json_decode(file_get_contents($url), true);
$videoId = implode($api);
$embed = "<iframe width=\"600\" height=\"450\" src=\"https://www.youtube.com/embed/$videoId?feature=oembed&amp;rel=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
$cn_embed = "<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/$videoId?autoplay=1&controls=0&feature=oembed&amp;rel=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
$android = $videoId;
$ios = $videoId;



$arr = [
    'embed' => $embed,
    'cn_embed' => $cn_embed,
    'streaming_android' => $android,
    'streaming_ios' => $ios
];

echo json_encode($arr);

?>