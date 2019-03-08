<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\Home;
use App\model\parfum;
use App\model\info;
class adminController extends Controller
{
      // حبيت اختصر كلشي شغل بكونترولار واحد لان مو محرزة
      // هون رح يكون الاندكس والابديت والديليت تبع العطر
      public function index(){
        $pr = info::all()->random(1);
        $arr['pr'] = $pr;
        return response()->json(array('msg'=> $pr), 200);
        return view('admin.index', $arr);
      }
      public function show(){
       $ph = Home::all();
       $pr = parfum::all();
       $arr['pr'] = $pr;
       $arr['p'] = $ph;
         return view('admin.show', $arr);
       }

      public function index1(){
      $ph = Home::all();
      $pr = parfum::all();
      $arr['pr'] = $pr;
      $arr['p'] = $ph;

      return view('admin.index', $arr);
    }
      public function deletep(Request $r,$id){
           $parfum = parfum::find($id);
           if($r->isMethod('post')) {
             $parfum->delete();
               return redirect(route('home.admin'));
             } else {
                   $arr['p']= $parfum;
                   return view('admin.deletep',$arr);
                 }
      }
      public function updatep(Request $r, $id){
          $parfum = parfum::find($id);
         if($r->isMethod('post')) {
           $photo = $r->file('photo');
           if(!is_null($photo)) {
             $path = $photo->storeAs('filter1', $photo->getClientOriginalName(),'filter');
             $parfum->path = $path;
           }
           $parfum->name = $r->input('name');
           $parfum->price = $r->input('price');
           $parfum->type = $r->input('type');
           $parfum->content = $r->input('co');
             $parfum->save();
             return redirect(route('home.admin'));
           } else {
              $arr['p']= $parfum;
             return view('admin.updatep',$arr);
           }
         }
      public function parfun(Request $r){
           if($r->isMethod('post')) {
             $photo = $r->file('photo');
             //dd($r->file('photo'));
             $path = $photo->storeAs('filter1', $photo->getClientOriginalName(),'filter');
             $per = parfum::create([
               'path'=> $path,
               'name'=> $r->input('name'),
               'type'=> $r->input('type'),
               'price' => $r->input('price'),
               'content' => $r->input('co')
               ]);
             } else {
              return view('admin.parfun');
             }

            }
      /////////////////////////////////////
      // هون حباشات الهيدر
      public function index2(){
         $ph = Home::all();
         $pr = parfum::all();
         $arr['pr'] = $pr;
         $arr['p'] = $ph;
       //  dd($ph);
       return view('admin.index2', $arr);
      }
      public function header(Request $r){
         if($r->isMethod('post')) {
           $photo = $r->file('photo');
           //dd($r->file('photo'));
           $path = $photo->storeAs('slider/img', $photo->getClientOriginalName(),'slider');
           $per = Home::create([
             'path'=> $path,
             'imagHeader'=> $r->input('header'),
             'imagContant'=> $r->input('contant'),
           ]);
         } else {
         return view('admin.header');
       }}
      public function deleteh(Request $r,$id){
            $Home = Home::find($id);
            if($r->isMethod('post')) {
              $Home->delete();
                return redirect(route('home.adminh'));
              }
              else {
                    $arr['p']= $Home;
                    return view('admin.deleteh',$arr);
                  }
       }
      public function updateh(Request $r, $id){
          $Home = Home::find($id);
         if($r->isMethod('post')) {

           $photo = $r->file('photo');
           //dd($r->input('header'));
           if(!is_null($photo)) {
             $path = $photo->storeAs('slider/img', $photo->getClientOriginalName(),'slider');
             $Home->path = $path;
           }
           $Home->imagHeader = $r->input('imagHeader');
           $Home->imagContant = $r->input('imagContant');

             $Home->save();
             return redirect(route('home.adminh'));
           } else {
              $arr['p']= $Home;
             return view('admin.updateh',$arr);
           }
         }

         /////////////////////////////////////
         // هون حباشات المعلومات

       public function index3(){
          $ph = info::all();
          $arr['p'] = $ph;
        //  dd($ph);
        return view('admin.index3', $arr);
       }
       public function deletei(Request $r,$id){
             $info = info::find($id);
             if($r->isMethod('post')) {
               $info->delete();
                 return redirect(route('home.admini'));
               }
               else {
                     $arr['p']= $info;
                     return view('admin.deletei',$arr);
                   }
        }
       public function updatei(Request $r, $id){
           $info = info::find($id);
          if($r->isMethod('post')) {

            $info->cont = $r->input('cont');
              $info->save();
              return redirect(route('home.admini'));
            } else {
               $arr['p']= $info;
              return view('admin.updatei',$arr);
            }
          }
       public function info(Request $r){
         if($r->isMethod('post')) {
           $info = info::create([
             'cont'=> $r->input('cont')
           ]);
         } else {
         return view('home.admini');
       }}
}
