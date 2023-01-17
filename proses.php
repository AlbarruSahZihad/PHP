<?php
    //   $form = ['nama','email','pesan'];
  
      
      if($_POST['nama'] == ''){
        echo " nama anda bukan ini <br>";
      }else{
        echo "nama   : " . $_POST['nama'] ."<br>" ;
      };

      if($_POST['email'] == ''){
        echo " email anda bukan ini <br>";
      }else{
        echo "email   : " . $_POST['email'] ."<br>" ;
      };

      if($_POST['pesan'] == ''){
        echo " pesan anda bukan ini <br>";
      }else{
        echo "pesan   : " . $_POST['pesan'] ."<br>" ;
      };
?>