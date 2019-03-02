<?php





namespace App\Http\Controllers;

use App\Http\Requests;

use App\model\Home;
use App\model\parfum;
class HomeController extends Controller
{
    public function index(){
      $ph = Home::all();
      $pr = parfum::all();
      $arr['pr'] = $pr;
      $arr['p'] = $ph;
      //dd($ph[0]->path);
      return view('welcome', $arr);

     }
}
