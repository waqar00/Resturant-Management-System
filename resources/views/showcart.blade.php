
<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>{{ config('app.name') }}</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>


    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li>
                                @auth
                                <a href="{{ url('showCart',Auth::user()->id) }}"><i class="fa fa-shopping-cart"></i>
                                    Cart
                                    <span style="color: red;"></sup>{{ $count }}</span>
                                  </a>

                                @else
                                <a href="cart.php"><i class="fa fa-shopping-cart"></i>
                                    Cart
                                    <span style="color: red;"></sup></span>
                                  </a>
                                  @endauth



                            </li>

                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                       <li>
                                        <x-app-layout>

                                        </x-app-layout>
                                           </li>
                                    @else
                                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                </li>
                                        @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div id="top">
 <div class="container-fluid">
    <div class="row d-flex justify-content-center">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Food Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                      <form method="post" action="{{ url('orderConfirm') }}">
                        @csrf
                  @foreach($data as $data)
                      <tr>
                      <td>
                          <input type="text" name="foodname[]" value="{{ $data->title }}" hidden >
                          {{ $data->title }}
                        </td>
                      <td>
                        <input type="number" name="price[]" value="{{ $data->price }}"hidden >
                          {{ $data->price }}
                        </td>
                      <td>
                        <input type="text" name="quantity[]" value="{{ $data->quantity }}"hidden >
                          {{ $data->quantity }}
                        </td>

                    </tr>
                    @endforeach
                    @foreach ($data2 as $data2 )
                        <tr style="position:relative; top:-100px; right:-179px; ">
                            <td><a href="{{ url('remove',$data2->id) }}" class="btn btn-danger">Remove</a> </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>

</div>


<div class="d-flex justify-content-center mt-3">
    <button type="button" class="btn btn-primary" id="order">Order Now</button>
</div>

<div  id="appear" class="d-flex justify-content-center mt-2" style="display:none;">
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
    </div>
    <div>
        <label>Phone</label>
        <input type="number" name="phone" >
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="add" placeholder="Address">
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="confirm Order">
        <button id="close" type="button" class="btn btn-danger">close</button>
    </div>
</div>
</form>




<script type="text/javascript">

jQuery(document).ready(function() {

    jQuery("#order").click(
    function(){
        jQuery("#appear").show();
    });

    jQuery("#close").click(
        function(){
            jQuery("#appear").hide();
        });
    });

</script>


    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>

    <!-- Global Init -->

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
</body>
