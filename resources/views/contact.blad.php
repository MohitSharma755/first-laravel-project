<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
 
<link rel="stylesheet" href="{{ asset('Bootstrap css/bootstrap.css') }}">
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Cart</title> -->
</head>

<body>
    <div class=" back-img">
        <div class="d-flex align-items-center justify-content-center   text-white "><span class="mt-5 h1">Contact
            </span>
        </div>
        <div class="text-center">
            <span class="official-color">Home <span class="ms-2 h-color">/</span></span><span
                class="official-color ms-2">Pages <span class="ms-2 h-color ">/</span> </span><span
                class="text-white ms-1">Contact
            </span>
        </div>
    </div>


    <div class=" container bg-light py-5 rounded mt-5 mb-5 col-xl-12">
        {{-- <div class="text-center official-color h1">
            <p>Get in touch</p>
            <h6 class="h-color">The contact form is currently inactive. Get a functional and working contact form with
                Ajax & <br> PHP in a few
                minutes. Just copy and paste the files, add a little code and you're done.</h6>
            <a href="https://htmlcodex.com/contact-form/" class="official-color h6 mb-3">Download now</a>
        </div> --}}
        {{-- <div class="text-center mb-2 mt-4 ">
            <!-- <div class=""> -->
            <!-- <div class=""> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223359.80334972573!2d77.53414281232779!3d28.987462064032993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c64f457b66325%3A0x42faa83387a6be5e!2sMeerut%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sbd!4v1717064503599!5m2!1sen!2sbd"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" class="rounded col-11 "
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- </div> -->
            <!-- </div> -->
        </div> --}}

        <form action="{{url('submitFormData')}}" class="px-3" method="POST">
            @csrf
            <div class="row px-5 ">
                <div class="col-xl-7">
                    <div class="py-2">
                        <input type="text" name="name" class="form-control py-3 rounded-3 " placeholder="Your name">
                    </div>
                    <div class="py-3">
                        <input type="text" name="email" class="form-control py-3 rounded " placeholder="Your Email">
                    </div>
                    <textarea name="message" id="" cols="74" rows="5" placeholder="Your Message"
                        class="rounded py-3 col-12"></textarea>
                    <button class="btn border border-warning rounded bg-white addtocart w-100 my-4 py-3">
                        Submit</button>
                </div>
                {{-- <div class="py-1 col-xl-5">
                    <div class=" rounded bg-white text-center mt-2">
                        <div class="row">
                            <div class="col-1 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="official-color"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4a2 2 0 0 0 0 4z" />
                                </svg>
                            </div>
                            <div class=" col-7  py-3">
                                <h1 class="h-color h4 text-center  col-7 mb-1">Address</h1>
                                <p class="h-color   text-center">123 Street NEW YORK USA</p>
                            </div>
                        </div>
                    </div>
                    <!-- Mail us start -->
                    <div class=" rounded bg-white text-center mt-4">
                        <div class="row">
                            <div class="col-1 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" class="official-color"
                                    viewBox="0 0 48 48">
                                    <mask id="ipSMail0">
                                        <g fill="none" stroke-linejoin="round" stroke-width="4">
                                            <path fill="#fff" stroke="#fff" d="M4 39h40V9H4v30Z" />
                                            <path stroke="#000" stroke-linecap="round" d="m4 9l20 15L44 9" />
                                            <path stroke="#fff" stroke-linecap="round" d="M24 9H4v15m40 0V9H24" />
                                        </g>
                                    </mask>
                                    <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSMail0)" />
                                </svg>
                            </div>
                            <div class=" col-7  py-3">
                                <h1 class="h-color h4 text-center  col-7 mb-1">Mail Us</h1>
                                <p class="h-color   text-center">info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- Mail us  close -->

                    <!-- Telephone start -->
                    <div class=" rounded bg-white text-center mt-4">
                        <div class="row">
                            <div class="col-1 py-3 px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" class="official-color"
                                    viewBox="0 0 1025 1023">
                                    <path fill="currentColor"
                                        d="m308 288l-88 87q18 65 95 160.5T487.5 708T649 803l87-87q15-15 53-12.5t76.5 12T929 737q56 27 82 66.5t3 61.5L907 972q-43 44-117 49.5t-160-23T448 908T265 759T115.5 575.5T24.5 393t-23-159.5T51 117L158 10q21-21 55 4.5T286 95q19 27 30 97t-8 96z" />
                                </svg>
                            </div>
                            <div class=" col-7  py-3">
                                <h1 class="h-color h4 text-center  col-7 mb-1">Telephone</h1>
                                <p class="h-color   text-center">(+012)3456789 </p>
                            </div>
                        </div>
                    </div>
                    <!-- Telephone end -->
                </div> --}}
            </div>
        </form>
    </div>
</body>

</html>


 