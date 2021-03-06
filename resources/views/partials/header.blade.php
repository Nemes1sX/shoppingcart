<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color: #eeeeee">   
        <a class="navbar-brand" href="{{ url('/')}}" style="background-color: #eeeeee">Palangos shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent"  style="background-color: #eeeeee">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>  
      </li>  
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="{{ url ('search') }}">
        @csrf_field
        @method('POST')
        <a href="{{url ('wishlist')}}" style="color: grey; padding-right: 5px;"><i class="fas fa-heart"></i>Wishlist</a> 
        <a href="{{url ('cart')}}" style="color: grey; padding-right: 5px;"><i class="fas fa-shopping-cart"></i>Shopping cart
          <span class="badge badge-secondary">
            {{Session::has('cart') ? Session::get('cart')->totalPrice  : '' }}
          </span>
        </a> 
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="title">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
