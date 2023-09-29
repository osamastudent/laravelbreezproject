@include('admin/head')
@include('admin/navbar')
@include('admin/sidebar')
<main id="main" class="main">
<div class="pagetitle">
    <br><br>
<table class="table">
<thead>
<th>Category Name</th>
<th>Product Name</th>
<th>Product Details</th>
<th>Product Price</th>
<th>Image</th>
<th>Actions</th>
</thead>
<tbody>
@foreach($data as $values)
<tr>
<td>{{$values->c_name}}</td>

<td>{{$values->p_name}}</td>
<td>{{$values->pro_detail}}</td>
<td>{{$values->pro_price}}</td>
<td><img src="{{asset('admin/proimages/'.$values->p_image)}}" height="100" width="100"></td>
<td><a href="{{url('editproduct',$values->id)}}" class="btn btn-primary">Update</a></td>
</tr>
</tbody>
@endforeach
</table>
<div class="div">
  <!-- 
    
   -->
</div>
</main>
</div>

@include('admin/foot')
@include('admin/script')