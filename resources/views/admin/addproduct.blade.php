@include('admin/head')
@include('admin/navbar')
@include('admin/sidebar')
<main id="main" class="main">
<div class="pagetitle">
<h1>Add Product</h1>
@if(session('message'))
<script>
alert("{{session('message')}}");
</script>
@endif

@error('pimage')
{{$message}}
@enderror

@error('pname')
{{$message}}
@enderror

<form action="{{url('addproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <select name="c_fk_id" id="" class="w-25 rounded-pill">
    <option value="">---select---</option>
    @foreach($cat as $values)
    
     <option value="{{$values->id}}">{{$values->c_name}}</option>
    @endforeach   
</select><br><br>
    
<input type="text" name="pname" class="w-25 rounded-pill" placeholder=" Enter Product Name"><br><br>
<input type="text" name="pdetail" class="w-25 rounded-pill" placeholder=" Enter Product detail"><br><br>
<input type="text" name="pprice" class="w-25 rounded-pill" placeholder=" Enter Product price"><br><br>
<input type="file" name="pimage" class="w-25 "><br><br>
<input type="submit" class="btn btn-primary btn-outline-info bg-success text-light"  value="Add Product">

</form>


</div>
</main>

@include('admin/foot')
@include('admin/script')