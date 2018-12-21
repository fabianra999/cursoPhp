<?php

    /*  $apiUrl = 'http://api.cne.cl/v3/combustibles/calefaccion/estaciones?token=PT33JekNhp&distribuidor=Copec';

      $curl = curl_init ($apiUrl);
      curl_setopt ($curl, CURLOPT_ENCODING, "");
      curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
      $json = curl_exec ($curl);
      $text = json_decode ($json);

      echo ($text->estado).'<br/>';
      print_r ($text->data[0]->id);


      curl_close ($curl);*/



    $url =  'https://jsonplaceholder.typicode.com/users';
    $json =   file_get_contents ($url) ;
    $data =  json_decode($json, tue);

    //$data = json_decode (file_get_contents ('https://jsonplaceholder.typicode.com/users'), true);


    foreach ($data as $clave => $valor) {
        //echo"<h2>$data[$valor][name]</h2>";
        echo "<h2>" . $data[$clave]['name'] . "</h2>";
    };

    for ($i = 0; $i <= count ($data); $i++) {
        echo "<h2>" . $data[$i]['email'] . "</h2>";
    }
