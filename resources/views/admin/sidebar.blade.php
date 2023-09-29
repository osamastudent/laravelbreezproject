 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="/index">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-navv" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-navv" class="nav-content collapse " data-bs-parent="#sidebar-navv">

        <a href="#">
          <i class="bi bi-circle"></i><span>Tooltips</span>
        </a>
      </li>
    </ul>
  



    <ul class="sidebar-nav" id="sidebar-nav">

  

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-navc" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-navc" class="nav-content collapse " data-bs-parent="#sidebar-navc">

        <a href="{{url('addcategory')}}">
          <i class="bi bi-circle"></i><span>Add Category</span>
        </a>
        <a href="{{url('showcategory')}}">
          <i class="bi bi-circle"></i><span>Show Category</span>
        </a>
      
      </li>   
    </ul>



    <ul class="sidebar-nav" id="sidebar-nav">

  

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

     
      <a href="{{url('product')}}">
        <i class="bi bi-circle"></i><span>Add Product</span>
      </a>

      <a href="{{url('showproduct')}}">
        <i class="bi bi-circle"></i><span>Show Product</span>
      </a>



      <a href="{{url('addsong')}}">
        <i class="bi bi-circle"></i><span>add song</span>
      </a>

      
      <a href="{{url('addsinger')}}">
        <i class="bi bi-circle"></i><span>add singer</span>
      </a>

      <a href="{{url('/')}}">
        <i class="bi bi-circle"></i><span>user dashboard</span>
      </a>
   

    </li>
 
 
 
 
</aside><!-- End Sidebar-->