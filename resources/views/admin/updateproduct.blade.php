<base href="/public">
@include('admin/head')
@include('admin/navbar')
@include('admin/sidebar')
<main id="main" class="main">
<div class="pagetitle">
<h1>Update Product</h1>

@foreach($edit as $values)

<form action="{{url('updatepro',$edit->id)}}" method="post" enctype="multipart/form-data">
    @csrf
   <select name="c_fk_id" class="w-25 rounded-pill">
    <option value="">--select---</option>
    @foreach($cat as $c)
    <option value="{{$c->id}}">{{$c->c_name}}</option>
    @endforeach
   </select><br><br>
<input type="text" name="pname" value="{{$edit->p_name}}" class="w-25 rounded-pill" placeholder=" Enter Product Name"><br><br>
<input type="text" name="pdetail" value="{{$edit->p_detail}}" class="w-25 rounded-pill" placeholder=" Enter Product detail"><br><br>
<input type="text" name="pprice" value="{{$edit->p_price}}" class="w-25 rounded-pill" placeholder=" Enter Product price"><br><br>
<input type="file" name="pimage" value="{{$edit->p_image}}" class="w-25 rounded"><br><br>
<input type="submit" class="btn btn-primary btn-outline-info bg-success text-light"  value="Add Product">

</form>
@break
@endforeach
</div>
</main>

@include('admin/foot')
@include('admin/script')