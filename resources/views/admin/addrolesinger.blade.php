@include('admin/head')
@include('admin/navbar')
@include('admin/sidebar')
<main id="main" class="main">
<div class="pagetitle">
    <br><br>

<h1>addsinger</h1>
<form action="{{url('addsinger')}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="sname" class="w-25 rounded-pill" placeholder=" Enter singer Name"><br><br>

<input type="submit" class="btn btn-primary btn-outline-info bg-success text-light"  value="Add singer">

</form>

</div>
</main>
</div>

@include('admin/foot')
@include('admin/script')