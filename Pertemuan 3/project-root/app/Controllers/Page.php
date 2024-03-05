<?php namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Term of Service";
    }

    public function biodata()
    {
        echo "Nama : Abiyan Nur";
        echo "<br>NIM : 4122024";
        echo "<br>Tempat Tanggal lahir : Jombang, 30 April 2004";
        echo "<br>Alamat : RT?RW 03/02 Mojojejer, Mojowarno, Jombang";
        echo "<br>E-mail : nurabiyan99@gmail.com";
        echo "<br>Hobi : Baca Novel ringan";
    }

    
}