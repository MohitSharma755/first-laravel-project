<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use App\Models\ContactData;
use App\Models\Product;
use App\Models\SellerData;
use App\Models\UserRegistartion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class testingcontroller extends Controller
{
    public function Onlytest()
    {
        return "<h1>This is first controller</h1>";

    }


    //   Second class
    public function indexpage()
    {
        $mobile=session('mobile');
        if (isset($mobile)) {
            echo $mobile;
        } else {
           $rand_mobile = 'rand'.rand(1000, 9999);
        //    $_SESSION['mobile'] = $mobile;
           Session::put('mobile',$rand_mobile);
           echo session()->get('mobile');
        //    $loginType = "random";
        //    $_SESSION['login_type'] = $loginType;
        //    echo $loginType;


        }
        $products = Product::get();
        return view('welcome', ['products' => $products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function cart()
    {
        $userid=session('mobile');
        $cartitem = Cart::where('userid',$userid)->get();
        if($cartitem){
            return view('cart', ['cartitem' => $cartitem]);
        }
        else{

            return view('cart', ['errormessage' => "No User Found"]);

        }
    }
    public function check()
    {
        return view('checkout');
    }
    public function user()
    {
        return view('user_registration');
    }

    public function addproduct()
    {
        return view('addproduct');
    }

    public function test()
    {
        return view('testimonial');
    }

    public function page()
    {
        return view('404page');
    }
    public function admin()
    {
        $adminid=session('sellerMobileno');

        $products = Product::Where('seller_mobile',$adminid)->get();

        return view('admin/admin', ['products' => $products]);
    }
    public function edit($productid)
    {
        $productid = Product::where('productid', $productid)->first();

        // dd ($productid);
        return view('admin/edit', ['productid' => $productid]);
    }


    // update code
    public function update($productid, Request $request)
    {

        //   echo $productid;
        // dd($request->all());
        $product_object = Product::where('productid', $productid)->first();
        $product_object->category = $request->cat;
        $product_object->name = $request->name;

        $product_object->quantity = $request->qua;
        $product_object->rate = $request->rate;
        $product_object->seller_mobile = $request->seller_mobile;
        if (isset($request->photo)) {

            $file = $request->file('photo');
            $request->validate(['photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $extension = $file->getClientOriginalName();
            $fileName = time() . '.' . $extension;
            $file->move('upload/user', $fileName);
        }
        $product_object->photo = $fileName;


        if ($product_object->save()) {
            echo "<script>alert(data inserted)</script>";
            return redirect()->route('admin');
        } else {
            echo " error";
        }

    }
    // delete from admin panel
    public function delete(Request $request, $productid)
    {
        $product = Product::where('productid', $productid)->first();
        $product->delete();
        return redirect()->route('admin');


    }
    public function seller()
    {

        return view('seller_registration');
    }

    public function thankyou()
    {

        return view('thankyou');
    }
    public function loginseller()
    {

        // echo "i am here";
        return view('seller_login');
    }

    public function sellerloginmein(Request $request)
    {
        // echo "clicked";
        // dd($request->all());
        $request->validate([
            'sellername' => 'required',
            'sellerpassword' => 'required'
        ]);
        $data = DB::table('seller_data')->Where('mobile', $request->sellername)->where('password', $request->sellerpassword)->get();
        // echo count($data);
        $products = Product::get();
        if (count($data) > 0) {
            session()->put('sellerMobileno', $request->sellername);
            if (session('sellerMobileno')) {
                // echo session('sellerMobileno');
                return view('admin/admin', ['products' => $products])->with(compact('data'));

            } else {
                return redirect()->back()->with('error', 'User not found.');

            }
        } else {
            echo "No data found";
        }
    }

    public function loginuser()
    {
        // echo "clicked";

        return view('user_login');
    }

    public function userloginme(Request $request)
    {
        // dd($request->all());
        // echo "clicked";
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = DB::table('user_registartions')->Where('mobile', $request->username)->where('password', $request->password)->get();
        // echo count($data);
        if (count($data) > 0) {
            session()->put('mobile', $request->username);
            $mobile = session('mobile');
            if (!empty($mobile)) {
                // echo session('mobile');
                return view('welcome')->with(compact('data'));
            } else {
                echo "No data found";
            }
        } else {
            return redirect()->back()->with('error', 'User not found.');

        }

        // if($data){
        //   dd($data);
        // }
        // return view('user_login');

    }
    public function shop()
    {

        return view('shop');
    }
    public function detailshop()
    {
        return view('detail');
    }

    public function submitFormData(Request $request)
    {
        // echo "<pre>";
        // print_r($request);
        // echo "</pre>";

        $contact_object = new ContactData();
        $contact_object->name = $request->name;
        $contact_object->email = $request->email;
        $contact_object->message = $request->message;

        if ($contact_object->save()) {
            // echo "<script>alert('Data inserted ')</script>";
            return redirect()->route('contact');
        }
    }


    public function Seller_Registration(Request $request)
    {
        // echo "<pre>";
        // print_r($request);
        // echo "<pre>";

        $seller_object = new SellerData();
        $seller_object->fname = $request->fname;
        $seller_object->lname = $request->lname;
        $seller_object->address = $request->address;
        $seller_object->city = $request->town;
        $seller_object->zip = $request->zip;
        $seller_object->country = $request->country;
        $seller_object->mobile = $request->ph;
        $seller_object->email = $request->mail;
        $seller_object->password = $request->pass;
        $seller_object->image = $request->photo;
        $seller_object->login_type = $request->login_type;


        if ($seller_object->save()) {
            echo "<script>alert('Data inserted ')</script>";
            return redirect()->route('loginseller');

        }
        // else return 1;
    }
    public function User_Registartion(Request $request)
    {
        // echo "<pre>";
        //   print_r($request);
        //   echo "<pre>";

        $user_object = new UserRegistartion();


        $user_object->fname = $request->fname;
        $user_object->lname = $request->lname;
        $user_object->address = $request->add;
        $user_object->city = $request->town;
        $user_object->zip = $request->zip;
        $user_object->country = $request->country;
        $user_object->mobile = $request->ph;
        $user_object->email = $request->mail;
        $user_object->password = $request->pass;
        // Upload file code
        $file = $request->file('image');
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        $extension = $file->getClientOriginalName();
        $fileName = time() . '.' . $extension;
        $file->move('upload/user', $fileName);
        $user_object->image = $fileName;


        $user_object->login_type = $request->login_type;

        if ($user_object->save()) {
            return redirect()->route('loginuser')->with('status', 'image uploaded ');
        }


    }
    public function Addproducts(Request $request)
    {
        // echo "<pre>";
        //   print_r($request);
        //   echo "<pre>";
        $product_object = new Product();
        $product_object->category = $request->cat;
        $product_object->name = $request->product;
        $product_object->description = $request->des;
        // $product_object->photo=$request->photo;
        $product_object->quantity = $request->qua;
        $product_object->rate = $request->rate;
        $product_object->seller_mobile = $request->seller_mobile;

        $file = $request->file('photo');
        $request->validate(['photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        $extension = $file->getClientOriginalName();
        $fileName = time() . '.' . $extension;
        $file->move('upload/user', $fileName);
        $product_object->photo = $fileName;


        if ($product_object->save()) {
            echo "<script>alert(data inserted)</script>";
            return redirect()->route('admin');
        } else {
            echo " error";
        }
    }



    public function checkoutinsert(Request $request)
    {
        //  echo "<pre>";
        //   print_r($request);
        //   echo "<pre>";

        $checkout_object = new Checkout();

        $checkout_object->first = $request->fname;
        $checkout_object->last = $request->lname;
        $checkout_object->userid = $request->user_session;
        $checkout_object->address = $request->add;
        $checkout_object->city = $request->town;
        $checkout_object->country = $request->country;
        $checkout_object->postcode = $request->zip;
        $checkout_object->mobile = $request->ph;
        $checkout_object->email = $request->mail;

        if ($checkout_object->save()) {
            return redirect()->route('thankyou');
        }
    }


    public function insertcart(Request $request, $productid)
    {
        $userid = session('mobile');
        // echo $userid;
        // dd($request);
        // echo $request;
        // echo $productid;
        $cart = new Cart();

        $productDetails = Product::find($productid);
        // dd($productDetails);
        if ($productDetails) {
            $name = $productDetails->name;
            $category = $productDetails->category;
            $quantity = $productDetails->quantity;

            $quantity = 1;

            $rate = $productDetails->rate;
            $photo = $productDetails->photo;
            $productid = $productDetails->productid;
        }
        $cart->name = $name;
        $cart->category = $category;
        $cart->quantity = $quantity;
        $cart->rate = $rate;
        $cart->productid = $productid;
        $cart->userid = $userid;
        $cart->photo = $photo;
        $cart->totalprice = $rate;


        // if ($request->hasFile('photo')) {
        // $photo = $request->file('photo');
        // $request->validate(['photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

        // $extension = $photo->getClientOriginalExtension();
        // $fileName = time() . '.' . $extension;
        // $photo->move(public_path('upload/cart'), $fileName);
        // $cart->photo = $fileName;
        // }
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $request->validate(['photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

            $extension = $photo->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;

            try {
                $photo->move(public_path('upload/cart'), $fileName);
                echo "File uploaded successfully to: " . public_path('upload/cart') . '/' . $fileName;
                $cart->photo = $fileName;
            } catch (\Exception $e) {
                echo "File upload failed: " . $e->getMessage();
            }
        } else {
            echo "No file detected in the request.";
        }

        if ($cart->save()) {
            echo "<script>alert('$name.Add in cart')</script>";
            // return redirect()->route('welcome');
        } else {

        }

        // echo "done";

    }
}

