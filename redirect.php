<?php
  $links = [
    "tweet" => "https://twitter.com/intent/tweet?text=%E9%AB%98%E5%B0%82%E3%82%AB%E3%83%B3%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9%20in%20%E5%90%8D%E5%8F%A4%E5%B1%8B%202018&url=https%3A%2F%2F124nagoya2018.kosen.cf&hashtags=kosenconf%2Ckosenconf124nagoya2018&related=Ymgn_Bass",
    "map" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.309926630484!2d136.91592781554138!3d35.17382716523831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370dc1a82dd29%3A0x7c11a57882aff772!2z5p2x44Kr44Oz5ZCN5Y-k5bGL44Kt44Oj44K544OG44O844Or!5e0!3m2!1sen!2sjp!4v1556971850739!5m2!1sen!2sjp",
    "youtube" => "https://www.youtube.com/channel/UCGZ9qbTw9isdB-izVjQDzxA"
  ];

  header("Location: " . $links[$_REQUEST["id"]]);
?>