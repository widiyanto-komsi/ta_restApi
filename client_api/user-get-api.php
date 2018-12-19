<?php
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, 'https://tugasharisenin.herokuapp.com/users');
  $result = curl_exec($ch);

  $results = json_decode($result);
  $response = $results->data;
  
?>
