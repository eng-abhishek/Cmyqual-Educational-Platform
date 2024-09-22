<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Booking;
use App\User;
use App\Brand;
use DB;

class SitemapController extends Controller
{
  public function index(){
     return view('website.sitemap');

  }
  
  public function robot(){
      //echo '123';
    // return view('website.robot');
     $myfile = fopen("'website.robot.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("'website.robot.txt"));
fclose($myfile);

  }
  
  public function sitemap_xml(){
    //  echo '1poipoipo23';
    // return view('website.sitemap_xml');
    return response()->view('website.sitemap_xml')->header('Content-Type', 'text/xml');

  }
  
  
}
