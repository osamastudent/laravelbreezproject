<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\product;
use App\Models\addtocart;
use App\Models\order;
class homecontroller extends Controller{
    
    public function redirect(){
$usertype=Auth()->user()->usertype;
if($usertype=='1'){
    return view('admin.index');
}
else{
    $product=product::all();
    $cart=addtocart::count('u_phone');
    return view('user.home',compact('product','cart'));
}
}


public function home(){
    return view('user.home');
}


public function cart(){
    $product=product::all();
    $user=auth::user();
    $cart=addtocart::where('u_email',$user->email)->count();
    /* $cart=addtocart::count('u_phone'); */
    return view('user.home',compact('product','cart'));
    
}

/* functio end */


public function showcart(){
    $user=auth::user();
    $cart=addtocart::where('u_email',$user->email)->count();
    $cartall=addtocart::all();
    return view('user.showaddtocart',compact('cart','cartall'));
}

/* functio end */

public function deleteall(){
    $user=auth::user();
    $cart=addtocart::where('u_email',$user->email)->count();
    $cartall=addtocart::all();
    $del=DB::table('addtocarts')->delete();
    /* $del=addtocart::where('u_email',$user->email)->delete(); */
return view('user.showaddtocart',compact('cart','cartall','del'));
}
/* functio end */


public function confirmorder(Request $req){

$user=auth::user();
$name=$user->name;
$phone=$user->phone;
$address=$user->address;
$email=$user->email;


foreach($req->pname as $key=> $values){
$obj=new order();
$obj->u_name=$name;
$obj->u_phone=$phone;
$obj->u_address=$address;
$obj->u_email=$email;

$obj->p_name=$req->pname[$key];
$obj->p_detail=$req->pdetail[$key];
$obj->p_price=$req->pprice[$key];
$obj->p_quantity=$req->pqty[$key];
$obj->total_product_price=$req->total[$key];
$obj->save();
}
$cart=addtocart::where('u_email',$user->email)->count();
/* DB::table('addtocarts')->delete(); */
return view('user.shopbtn',compact('cart'));
}


public function shopbtn(){
    
    return view('shopbtn');
}







}
