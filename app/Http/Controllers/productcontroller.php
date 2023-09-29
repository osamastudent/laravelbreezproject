<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\product;
use App\Models\catogory;
use App\Models\addtocart;
use App\Models\User;
use Pagination;
class productcontroller extends Controller
{
public function selectproduct(){
   $cat=catogory::all();
    return view('admin.addproduct',compact('cat'));
}


public function addproduct(Request $req){
    $obj=new product();

    $req->validate([
    
        'pimage'=>'required |image|mimes:jpg,jpeg|' /* max:20000 */
    ],
    [
        
        'pimage'=>'image field shoud be required',
        'pimage.mimes'=>'image extension should be jpg jpeg and png only',
        /* 'pimage.max'=>'size should not be more than 200 kb' */
    ]);
    $obj->p_name=$req->pname;
    $obj->p_detail=$req->pdetail;
    $obj->p_price=$req->pprice;
    $obj->catogory_id=$req->c_fk_id;
if($req->hasfile('pimage')){
$file=$req->file('pimage');
$extension=$file->getClientOriginalName();
$filename=time().' '. $extension;
$file->move('admin/proimages/',$filename);
$obj->p_image=$filename;
}
$obj->save();
    return redirect()->back()->with('message','new product added ');
    }
 
    /* function end */

     public function showproduct(){
    $data=catogory::join('products','products.catogory_id','=', 'catogories.id')->get(['catogories.c_name', 'products.id','products.p_name','products.p_detail as pro_detail','products.p_price as pro_price','products.p_image']);

    return view('admin.showproduct',compact('data'));
     }
    /* function end */

    function showcat(){
        $pro=product::find(3);
         $data=catogory::paginate(2);
return view('admin.showcategory',compact('data','pro'));

    }
        function onetoone(){
        $data=catogory::paginate(2);
        $pro=product::find(11);
        $inv=catogory::find(6);
        return view('admin.showcategory',compact('data','pro','inv'));
           
    }

/* function end */
public function showproducttouser(){
$product=product::all();
$cart=addtocart::count('u_phone');
return view('user.home',compact('product','cart'));

}
/* function end */

public function addtocart(Request $req){
$user=Auth::user();
if(auth::id()){
$addtocart=new addtocart();
$addtocart->u_phone=$user->phone;
$addtocart->u_address=$user->address;
$addtocart->u_email=$user->email;
$addtocart->p_password=$user->password;
$addtocart->p_name=$req->pname;
$addtocart->p_detail=$req->pdetail;
$addtocart->p_quantity=$req->pqty;
$addtocart->p_price=$req->pprice;
$addtocart->p_image=$req->pimage;
$addtocart->save();
return redirect()->back()->with('message','added cart successfully');
}

else{
return redirect('login')->with('message','you have to log in first');
}
}
 /* functio end */
public function editproduct($id){
$edit=product::find($id);
$cat=catogory::all();
return view('admin.updateproduct',compact('edit','cat'));
}
/* functio end */
public function updateproduct(Request $req, $id){
$obj=product::find($id);
$obj->catogory_id=$req->c_fk_id;
$obj->p_name=$req->pname;
$obj->p_detail=$req->pdetail;
$obj->p_price=$req->pprice;

if($req->hasfile('pimage')){
$destination='admin/proimages/'.$obj->p_image;
    if(File::exists($destination))
    {
    File::delete($destination);
    }

$file=$req->file('pimage');
$extension=$file->getClientOriginalName();
$filename=time().''.$extension;
$file->move('admin/proimages/',$filename);
$obj->p_image=$filename;
}
$obj->update();
return redirect('showproduct');
}

    }

