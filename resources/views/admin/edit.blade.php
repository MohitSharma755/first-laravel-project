 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

      <!-- Custom css files -->
      <link rel="stylesheet" href="{{ asset('Custom css/custom.css') }}">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Bootstrap css -->
      <link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">

      <!-- {{-- Bootstrap js --}} -->
      <script src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="{{ asset('Custom js/index.js') }}"></script>


</head>

<body>

    <form action="/Products/Update/{{$productid->productid}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="h1 text-warning text-center py-2">Edit Product's</div>
        <h3>Productid {{$productid->productid}}  </h3>
        <div class="d-flex  justify-content-center ">
            <div class="col-8 mb-4">
                <label for="pr" class="h-color py-2 mb-2">Category <span class="text-danger">*</span> </label>
                <input type="text" name="cat" id="cat" class="rounded-3  py-1 form-control col-12" required="required" value="{{$productid->category}}">

                <label for="pr" class="h-color py-2 mb-2">Name<span class="text-danger">*</span> </label>
                <input type="text" name="name" id="cat" class="rounded-3  py-1 form-control col-12" required="required" value="{{$productid->name}}">


                <!-- <select name="" id="pr" class="form-control">
                <option value="" >Fruit</option>
                <option value="">Vegetables</option>
            </select> -->


                <label for="kg" class="h-color py-2 mb-2">Quantity*</label>
                <input type="text" name="qua" id="kg" class="rounded-3  py-1 form-control col-12" value="{{$productid->quantity}}" required>

                <label for="kg" class="h-color py-2 mb-2">Rate*</label>
                <input type="text" name="rate" id="rate" class="rounded-3  py-1 form-control col-12" value="{{$productid->rate}}"  required>

                <label for="img" class="h-color py-2 mb-2">Product Image*</label>
                <input type="file" name="photo" id="img" class="rounded-3  py-1 form-control col-12" required>



                <input type="submit" class="cart mt-2 bg-warning rounded px-3 py-1   border-0" id="addproductbtn"
                    name="add">
            </div>
        </div>
    </form>

</body>

</html>
