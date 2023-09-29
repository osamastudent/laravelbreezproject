@include('admin/head')
@include('admin/navbar')
@include('admin/sidebar')
<main id="main" class="main">
<div class="pagetitle">
<h1>Add Category</h1>
@if(session('message'))

<div class="alert alert-primary" id="alt" role="alert">
{{session('message')}}
</div>
@endif
<form action="{{url('addcategory')}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="cname" class="w-25 rounded-pill" placeholder=" Enter Product Name"><br><br>
<input type="file" name="cimage" class="w-25 "><br><br>
<input type="submit" class="btn btn-primary btn-outline-info bg-success text-light"  value="Add Category">

</form>

<script>
setInterval(alertt, 1000);

function alertt(){
    let c=document.getElementById('alt');
}
</script>
</div>
</main>

@include('admin/foot')
@include('admin/script')