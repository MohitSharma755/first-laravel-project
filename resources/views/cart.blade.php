<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>


    <script src="{{ asset('Custom js/index.js') }}"></script>
    <script src="{{ asset('Custom js/delete.js') }}"></script>

    <!-- Custom css files -->
    <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">

    <!-- {{-- Bootstrap js --}} -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>


</head>

<body>
    <div class=" back-img" style="background-image:url('{{ asset('/images/image/cart-page-header-img.jpg') }}')">

        <div class="d-flex align-items-center justify-content-center   text-white "><span class="mt-5 h1">Cart
            </span>
        </div>
        <div class="text-center">
            <span class="official-color">Home <span class="ms-2 h-color">/</span></span>
            <span class="official-color ms-2">Pages <span class="ms-2 h-color ">/</span> </span>
            <span class="text-white ms-1">Cart</span>
        </div>
    </div>
    <div class="container py-5">
        <div class="row   ">
            <div class='col-2 h-color '>Products</div>
            <div class='col-2 h-color'>Name</div>
            <div class='col-2 h-color'>Price</div>
            <div class='col-2 h-color '>Quantity</div>
            <div class='col-2 h-color '>Total</div>
            <div class='col-2 h-color '>Handler</div>
            <hr>
        </div>
    </div>
    <div class="container">
        {{--  echo $cartitem;  --}}
        @foreach ($cartitem as $cart)
            <div class='row border-bottom '>
                <div class='col-2 contanier'>
                    <img src='upload/cart/{{ $cart->photo }}' class='img-fluid col-5 col-sm-7 py-3 rounded '
                        alt='no image found'>

                </div>

                <div class='col-2 h-color   py-4'>
                    <p class='h-color col-10 '>{{ $cart->name }}</p>
                </div>

                <div class='col-2 h-color  py-4 ' id='price{{ $cart->cartid }}'>{{ $cart->rate }} </div>

                <div class='col-2 h-color'>
                    <div class='row py-4'>
                        <div class='col-2 rounded-circle bg-light text-secondary btn'
                            onclick='countminus({{ $cart->cartid }})' id='minus'>
                            <span type='button'>−</span>
                        </div>

                        <div id='quantity{{ $cart->cartid }}' class='col-2 mt-1 '>{{ $cart->quantity }}</div>

                        <div class='col-2 rounded-circle bg-light text-secondary btn 'id='click'
                            onclick='countadd({{ $cart->cartid }})'>
                            <span type='button' class='text-center'>+</span>
                        </div>
                    </div>
                </div>


                <div class='col-2 h-color py-4' id='totalprice{{ $cart->cartid }}'>{{ $cart->totalprice }}</div>

                <div class='col-2 h-color py-3'>

                    <a href="{{ url('Deletecart/' . $cart->cartid) }}" class='btn'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'
                            class='text-danger rounded-circle bg-light' onclick='  del({{ $cart->cartid }})'
                            viewBox='0 0 32 32'>
                            <path fill='currentColor'
                                d='m24.778 21.42l-5.502-5.503l5.5-5.502l-2.827-2.83l-5.503 5.502l-5.502-5.502l-2.828 2.83l5.5 5.502l-5.5 5.502l2.83 2.828l5.5-5.502l5.5 5.502z' />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <main class="container">
        {{--  <section id="addtocart">
            <!-- here code is coming from cartajax.js -->
        </section>  --}}
        <div class="row py-5 ">
            <input type="text" class=" border-0 border-bottom  col-3  " placeholder="Coupn Code">
            <a href="#" class=" btn rounded-5  py-3 ms-3 col-2  border-warning cart">Apply Coupn</a>
        </div>
        <div class="row">
            <div class="col-8"></div>
            <div class="container py-5 mb-4  bg-light rounded col-4">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h-color">Cart Total</h1>
                    </div>
                    <div class="row py-2">
                        <div class="h4 col-10 h-color px-3">Subtotal:</div>
                        <div class="col-2 h-color ">$96</div>
                    </div>
                    <div class="row py-2">
                        <div class="h4 col  h-color px-3">Shipping:</div>
                        <div class="col-6 text-end h-color px-3 mb-4">Flate rate:$3.00 <br> Shipping to Ukraine.</div>
                    </div>
                    <hr>

                    <div class="py-3 row">
                        <div class="h4 col-10 h-color px-3">Total:</div>
                        <div class="col-2 h-color ">$96</div>
                    </div>
                    <hr>


                    <a href="{{ url('checkout') }}"
                        class="mt-2  btn rounded-5 bg-none  py-3 ms-3 col-8 border text-center border-warning cart">PROCEED
                        CHECKOUT</a>



                </div>

            </div>
        </div>
    </main>


    @include('footer');

</body>

</html>
