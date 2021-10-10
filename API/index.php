<?php

echo "Posts: </br></br>";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/labb2-noah/wordpress/wp-json/wp/v2/posts?oauth_consumer_key=ck_b3b9ddf67bab4f46816ae81c01a0347873655193&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1633867727&oauth_nonce=Rl1TWCScTP0&oauth_version=1.0&oauth_signature=Ql6%2FPQvuPwxrP26k9u3frWfJyks%3D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo ($response);

echo "</br></br> Products: </br> </br>";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/labb2-noah/wordpress/wp-json/wc/v3/products?oauth_consumer_key=ck_b3b9ddf67bab4f46816ae81c01a0347873655193&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1633867307&oauth_nonce=MVLaPV5bpTZ&oauth_version=1.0&oauth_signature=jXMQoFEsRM5Dw50vQtvgLe7vx1E%3D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

echo "</br></br> Orders: </br> </br>";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/labb2-noah/wordpress/wp-json/wc/v3/orders?oauth_consumer_key=ck_b3b9ddf67bab4f46816ae81c01a0347873655193&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1633866347&oauth_nonce=fA8EK44gZkm&oauth_version=1.0&oauth_signature=EuD7kthrLdnxMSzqypx%2BP9Qn%2BMg%3D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;