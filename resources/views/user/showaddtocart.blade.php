<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Beautiflie</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="user/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="user/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="user/css/responsive.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- fevicon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link rel="icon" href="user/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="user/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="user/css/owl.carousel.min.css">
      <link rel="stylesheet" href="user/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <base href="/public ">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
         <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>

        




        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      
   <div class="offset-3">
   @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <ul>
                        <li style="margin-top:-26px;">
                        <x-app-layout>
                        </x-app-layout>
                        </li>
                        <li style="margin-top:-50px;">
          <a class="nav-link"><i class="fa-solid fa-cart-shopping h-100"></i><sup class="bg-info text-light mr-2">{{$cart}}</sup></a>
        </li>
                        </ul>

                        
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>
      
    </div>
  </div>
</nav>     </div>
      </div>

<br><br>
<div class="container">
<h1 class="text-center pt-5">Added To Cart</h1>
<table class="table text-center ">
<thead class="text-light bg-danger">

<th>User Email</th>
<th>User Phone</th>
<th>User Address</th>
<th>Product Name</th>
<th>Product Detail</th>
<th>Product Price</th>
<th>Product Quantity</th>
<th>Total Product Price</thh>
<th>Product Image</th>
</thead>
<tbody>
<form action="{{url('confirm')}}" method="post">
  @csrf
@foreach($cartall as $values)
<tr class="bg-dark text-light">
<td>{{$values->u_email}}</td>
<td>{{$values->u_phone}}</td>
<td>{{$values->u_address}}</td>
<td>{{$values->p_name}}</td>
<input type="hidden" name="pname[]" value="{{$values->p_name}}" id="">
<td>{{$values->p_detail}}</td>
<input type="hidden" name="pdetail[]" value="{{$values->p_detail}}" id="">
<td>{{$values->p_price}}</td>
<input type="hidden" name="pprice[]" value="{{$values->p_price}}" id="">
<td>{{$values->p_quantity}}</td>
<input type="hidden" name="pqty[]" value="{{$values->p_quantity}}" id="">

<td><?php echo  $values->p_quantity*$values->p_price?></td>
<td><img src="{{asset('admin/proimages/'.$values->p_image)}}" height="100" width="100"></td>
<input type="hidden" name="pimage[]" value="{{$values->p_image}}" id="">

</tr>
<?php @$total+= $values->p_quantity*$values->p_price?>
<input type="hidden" name="total[]" value="<?php echo  $values->p_quantity*$values->p_price?>" id="">

@endforeach

</tbody>
</table>
<div class="row">
<div class="col-md-4">
<b class="btn btn-primary block">Continue Shopping   </b>
</div>

<div class="col-md-4">
<b class="btn btn-success block">TOTAL PRICE: <?php 
if(@$total==""){
echo "[0]";
}
else{
 echo  @$total;
}
?>
</b>
</div>

<div class="col-md-4">
<a href="{{url('deleteall')}}" onclick="return confirm('are you sure?')" class="btn btn-dark text-light block"><i class="fa-sharp fa-solid fa-trash"></i>&nbsp;Delete All</a>
</div>

</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <input type="submit" class="btn btn-danger block" style="border-radius:50px;" value="Confirm Your Order">
</div>
<div class="col-md-3"></div>
</div>
</form>
</div>
<br><br>
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="user/js/jquery.min.js"></script>
      <script src="user/js/popper.min.js"></script>
      <script src="user/js/bootstrap.bundle.min.js"></script>
      <script src="user/js/jquery-3.0.0.min.js"></script>
      <script src="user/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="user/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="user/js/custom.js"></script>
      <!-- javascript --> 
      <script src="user/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>