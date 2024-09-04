@php
    $mobile = session()->get('sellerMobileno');

    if (isset($mobile)) {
        echo $mobile;
    } else {
        echo "<script>
            window.location.href = ('seller_login')
        </script>";
    }

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <!-- Custom css files -->
    <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">

    <!-- {{-- Bootstrap js --}} -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('Custom js/index.js') }}"></script>



</head>

<body>
    <main>

    </main>


    <div class='row m-3'>
        <div class='col-xl-12 '>
            <div class='official-color h3 text-center'>ADMIN PANEL</div>
            <div class='official-color h3 text-center'>Dashboard</div>
            <div class="row">
                <div class='col-9'>Admin Name</div>
                <button class='cart border-0   col-2 btn mb-3' name="ll">Logout</button>
            </div>

            <div class=' row'>
                <div class='col-1'>ID</div>
                <div class='col-2   text-center ms-5'>Product Name</div>

                <div class='col-2'>Image</div>
                <div class='col-2'>Rate</div>
                <div class='col-2'>Quantity</div>
                <div class='col-1'>Action</div>
                <a href="{{ url('addproduct') }}" class='btn cart col-1' target="_blank">Add Product</a>

            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-2   ">{{ $loop->index + 1 }}</div>
                <div class="col-1 px-1" style="margin-right: 50px">{{ $product->name }}</div>
                <div class="col-2">
                    <img src="upload/user/{{ $product->photo }}" alt="no image found" class="py-1"
                        style="height: 70px;width:100px">
                </div>

                <div class="col-2">{{ $product->rate }}</div>
                <div class="col-2">{{ $product->quantity }}

                </div>
                <div class="col-1"><a href="Products/Edit/{{ $product->productid }} "class="btn cart">Edit</a></div>
                <div class="col-1 btn btn-danger"><a
                        href="Products/Delete/{{ $product->productid }} "class="btn cart">Delete</a></div>
                {{--  <div class="col-1"><a href="{{$product->id}}Edit "class="btn cart">Delete</a></div>  --}}
            @endforeach

        </div>

    </div>



</body>

</html>
