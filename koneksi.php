<?php

$con = mysqli_connect("localhost","root","","bm203");

if($con){
    //echo "Koneksi database berhasil";
}else{
    echo "Gagal koneksi database ". mysqli_connect_error();
}