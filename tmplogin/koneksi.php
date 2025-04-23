<?php
    
    $data = mysqli_connect("localhost","root","","desagereba");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>