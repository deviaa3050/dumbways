<?php

      function cekUsername($username){
        if(preg_match('@[A-Z]@', $username)){
          $answer = "Invalid, username harus huruf kecil semua.";
        }
        elseif(strlen($username)>6){
          $answer = "Invalid, username harus max 6 huruf.";
        }
        else{
          $answer = "Username sesuai.";
        }
        return $answer;
      }

      function cekEmail($email){
        if (strpos($email,"@")) {
          if (preg_match('@[A-Z]@', $email)) {
            $answer = "Invalid, email harus huruf kecil semua.";
          }
          else {
            $answer = "Valid, Email sesuai.";
          }
        }else {
          $answer = "Invalid, email harus mengandung unsur @.";
        }
        return $answer;
      }

      function cekPassword($pass){
        if (strlen($pass)>8) {
          $answer = "Ivalid, pass harus max 8 huruf.";
        }elseif (!preg_match('@[A-Z]@', $pass)) { //maaf sedikit ambigu di saya. Persyaratannya apakah harus 1 huruf besar atau mengandung minimal 1 huruf besar.
          $answer = "Invalid, password harus ada 1 huruf besar."; // saya mengambil logika pada umumnya, yaitu pilihan kedua (mengandung minimal 1 huruf besar).
        }
        elseif (!preg_replace('/([^0-9]+)/','',$pass)) {
          $answer = "Invalid, password harus ada angkanya.";
        }
        else {
          $answer = "Valid, password sesuai.";
        }
        return $answer;
      }

      echo cekUsername('Kamusiapa')."<br>";
	    echo cekEmail('kamusiapa@gmail.com')."<br>";
	    echo cekPassword ('Kamusiapa2169')."<br>";
