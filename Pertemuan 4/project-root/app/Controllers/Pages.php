<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>'Selamat Datang | Website Anda', 
            'tes' => ['satu', 'dua', 'tiga'] 
        ];
        echo view ('layout/header',$data);
        echo view ('pages/home',$data);
        echo view ('layout/footer');
    }
    public function about()
{
    $data = [
        'title' =>'Selamat Datang | Unipdu Press',
        'tes' => ['satu', 'dua', 'tiga'] 
    ];
    echo view ('layout/header',$data);
    echo view ('pages/about',$data);
    echo view ('layout/footer');
}
}

