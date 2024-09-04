
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product</title>
         
  <!-- Custom css files -->
  <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">

<!-- {{-- Bootstrap js --}} -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- <script src="addproduct.js"></script> -->

</head>
@php
  $mobile=session()->get('sellerMobileno');

    if(isset($mobile)){
  
    }
    else{
echo "error";
    }
@endphp
<body>

    <form action="{{url('admin')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="h1 text-warning text-center py-2">Add Product's</div>
        <div class="d-flex  justify-content-center ">
            <div class="col-8 mb-4">
                <label for="pr" class="h-color py-2 mb-2">Category <span class="text-danger">*</span> </label>
                <input type="text" name="cat" id="cat" class="rounded-3  py-1 form-control col-12" ="">

                <label for="pr" class="h-color py-2 mb-2">Product Name <span class="text-danger">*</span> </label>
                <input type="text" name="product" id="pr" class="rounded-3  py-1 form-control col-12"
                    ="">

                <!-- <select name="" id="pr" class="form-control">
                <option value="" >Fruit</option>
                <option value="">Vegetables</option>
            </select> -->
                <label for="Des" class="h-color py-2 mb-2">Description*</label>
                <input type="text" name="des" id="Des" class="rounded-3  py-1 form-control col-12" ="">

                <label for="kg" class="h-color py-2 mb-2">Quantity*</label>
                <input type="text" name="qua" id="kg" class="rounded-3  py-1 form-control col-12" >

                <label for="kg" class="h-color py-2 mb-2">Rate*</label>
                <input type="text" name="rate" id="rate" class="rounded-3  py-1 form-control col-12" >

                <label for="img" class="h-color py-2 mb-2">Product Image*</label>
                <input type="file" name="photo" id="img" class="rounded-3  py-1 form-control col-12" >

                <label for="seller-session" class="h-color py-2 mb-2 ">Seassion*</label>
                <input type="text" value={{$mobile}} name="seller_mobile" id="seller-session"
                    class="rounded-3  py-1 form-control col-12" >

                <input type="submit" class="cart mt-2 bg-warning rounded px-3 py-1   border-0" id="addproductbtn"
                    name="add">
            </div>
        </div>
        
    </form>


</body>

</html>