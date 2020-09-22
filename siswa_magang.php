<?php

$data_siswa=[];

while(true)
{
    //Data siswa

    $siswa=&$data_siswa;

    //Banner Aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    //User input data siswa magang

    $input_siswa=readline("Masukkan data siswa ? ");

    //Validasi huruf

    if(!preg_match("/^[A-Za-z\s]*$/",$input_siswa) || empty($input_siswa))
    {
        echo PHP_EOL;
        echo "Masukkan nama siswa dengan benar !";
        continue;
    }

    //Simpan Data Siswa

    $siswa[]=$input_siswa;

    //Munculkan data siswa

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil ("$nomor.$key");
        $nomor++;
    }

    //Tanya user untuk masukkan data lagi

    tanyaUser();
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function tanyaUser()
{
    $tanya = readline("Tambah data (yes/no) ?");

    if ($tanya == "no" || $tanya!=="yes") 
    {
        tampil("Terima Kasih");
        exit;
    }
}

function tampilData($data)
{
    $nomor = 1;

    foreach ($data as $key) 
    {
        tampil("$nomer.$key");
        $nomor++;
    }
}

function manuAplikasi()
{

}

// CRUD (Create Read Update Delete)

function inputData(&$data)
{

}



