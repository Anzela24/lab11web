<?php
namespace App\Controllers;
class Page extends BaseController
{
public function about()
{
    return view('about',[
    'title'-> 'halaman about',
    'content' => 'ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
    ]);
echo "Ini halaman About";
}
public function contact()
{
echo "Ini halaman Contact";
}
public function faqs()
{
echo "Ini halaman FAQ";
}
}