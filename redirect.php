<?php
  $links = [
    "tweet" => "https://twitter.com/intent/tweet?text=%E9%AB%98%E5%B0%82%E3%82%AB%E3%83%B3%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9%20in%20%E5%90%8D%E5%8F%A4%E5%B1%8B%202018&url=https%3A%2F%2F124nagoya2018.kosen.cf&hashtags=kosenconf%2Ckosenconf124nagoya2018&related=Ymgn_Bass",
    "map" => "https://www.google.com/maps/embed/v1/search?q=%E6%84%9B%E7%9F%A5%E7%9C%8C%E5%90%8D%E5%8F%A4%E5%B1%8B%E5%B8%82%E6%9D%B1%E5%8C%BA%E6%9D%B1%E6%A1%9C2%E4%B8%81%E7%9B%AE3%E7%95%AA7%E5%8F%B7%28%E6%9D%B1%E3%82%AB%E3%83%B3%E5%90%8D%E5%8F%A4%E5%B1%8B%E3%82%AD%E3%83%A3%E3%82%B9%E3%83%86%E3%83%BC%E3%83%AB%29&key=AIzaSyC5g64WfjB0_6RNKTf_WT_m_tJNQYUrd68",
    "youtube" => "https://www.youtube.com/channel/UCGZ9qbTw9isdB-izVjQDzxA"
  ];

  header("Location: " . $links[$_REQUEST["id"]]);
?>