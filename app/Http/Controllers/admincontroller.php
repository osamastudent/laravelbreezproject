<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\catogory;
use App\Models\product;
class admincontroller extends Controller
{
    public function  category(){
    return view('admin.addcategory');
    }
    
    public function addcategory(Request $req){
    $obj=new catogory();
       $obj->c_name=$req->cname;
if($req->hasfile('cimage')){
$file=$req->file('cimage');
$extension=$file->getClientOriginalName();
$filename=time().''.$extension;
$file->move('admin/categorytimages/',$filename);
$obj->c_image=$filename;
  }
  $obj->save();
  return redirect()->back()->with('message','new category added');
}




function search(Request $req){
  $search=$req->search;
  if($search!=""){
    $pro=product::find(3);
    $inv=catogory::find(6);
        $data=catogory::where('c_name','like', '%'.$search.'%')->get();
    return view('admin.showcategory',compact('data','pro','inv'));
  }
  else{
    $pro=product::find(3);
    $inv=catogory::find(6);
    $data=catogory::paginate(2);
    return view('admin.showcategory',compact('data','pro','inv'));
  }

}
}