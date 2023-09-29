@include('admin/head')
@include('admin/navbar')
@include('admin/sidebar')
<main id="main" class="main">
<div class="pagetitle">
    <br><br>
<form action="{{url('search')}}">
<input type="search" name="search" class="w-75" placeholder="search">
<button class="btn btn-primary text-light bg-primary">search</button>
</form>

<table class="table">
<thead>
<th>Category Name</th>
<th>Actions</th>
</thead>
<tbody>
@foreach($data as $values)
<tr>
<td>{{$values->c_name}}</td>
</tr>
@endforeach
</tbody>


</table>
{!! $data->links() !!}
</main>
</div>

@include('admin/foot')
@include('admin/script')