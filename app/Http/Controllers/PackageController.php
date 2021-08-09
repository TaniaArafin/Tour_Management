<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Package;
//use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    //
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('admin');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('package', 'public');

            $price = $request->get('price');
            $discount = $request->get('discount');
            $finalPrice = $price - ($price * ($discount / 100));
            // Store the record, using the new file hashname which will be it's new filename identity.
            $package = new Package([
                "title" => $request->get('title'),
                "description" => $request->get('description'),
                "price" => $price,
                "durationDay" => $request->get('durationDay'),
                "durationNight" => $request->get('durationNight'),
                "discount" => $discount,
                "finalPrice" => $finalPrice,
                "file_path" => $request->file->hashName()
            ]);
            $package->save();
        }
        return redirect('/admin')->with('status', 'Package Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $package = Package::find($id);
        return view('packages.edit')
                ->with('package', $package);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        //
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
            ]);
            
            $package = Package::find($id);

            if($package->file_path) {
                Storage::delete('/public/package/'.$package->file_path);
            }

            $package->title = $request->get('title');
            $package->description = $request->get('description');
            $package->price = $request->get('price');
            $package->discount = $request->get('discount');
            $package->finalPrice = ($package->price) - (($package->price * (($package->discount)/100)));
            $package->file_path = $request->file->hashName();
            
            // Save the file locally in the storage/public/ folder under a new folder named /package
            $request->file->store('package', 'public');

            $package->save();

            return redirect('/admin')->with('status', 'Package Updated Successfully');
        }
    }*/

    public function updatePackage(Request $request, $id)
    {
        //
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg|max:4096' // Only allow .jpg, .bmp and .png file types.
            ]);
            
            $package = Package::find($id);

            if($package->file_path) {
                Storage::delete('/public/package/'.$package->file_path);
            }

            $package->title = $request->get('title');
            $package->description = $request->get('description');
            $package->price = $request->get('price');
            $package->discount = $request->get('discount');
            $package->durationDay = $request->get('durationDay');
            $package->durationNight = $request->get('durationNight');
            $package->finalPrice = ($package->price) - (($package->price * (($package->discount)/100)));
            $package->file_path = $request->file->hashName();
            
            // Save the file locally in the storage/public/ folder under a new folder named /package
            $request->file->store('package', 'public');

            $package->update();

            return redirect('/admin')->with('status', 'Package Updated Successfully');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $package = Package::find($id);
        if($package->file_path) {
            Storage::delete('/public/package/'.$package->file_path);
        }
        $package->delete();
        return redirect('/admin')->with('status', 'Package Deleted Successfully');
    }
    
    public function showAllPackages() {
        $package = Package::paginate(6);
        return view('packages')
                ->with('packages', $package);
    }

    public function showPackageDetail($id) {
        $package = Package::find($id);
        return view('packages.detail', ['package' => $package]);
    }

    public function showSearchResults(Request $request) {
        $search = $request->get('search');
        if ($search != '') {
            $results = DB::table('packeges')
                        ->where('title', 'like', '%'.$search.'%');
            /*$price = DB::table('products')
                        ->where('name', 'like', '%'.$search.'%')
                        ->value('price');
            $discount = DB::table('products')
                        ->where('name', 'like', '%'.$search.'%')
                        ->value('discount');
            $finalPrice = $price - $discount; */     
            $results = $results->get();

            return view('searchResults')
                ->with('Results', $results)
                ->with('Query', $search);
                //->with('FinalPrice', $finalPrice);
        }
    }

    /*function addToCart(Request $request)
    {
        if (Auth::check()) {
            $cart = new Cart;
            $user = Auth::user();
            $cart->user_id = $user->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/cart');
        }
        else {
            return redirect('/login');
        }
    }*/

    /*static function cartItem() {
        if (Auth::check()) {
            $user = Auth::user();
            $user_id = $user->id;
            return Cart::where('user_id', $user_id)->count();
        }
    }*/

    /*function showCart() {
        $user = Auth::user();
        $user_id = $user->id;
        $products = DB::table('cart')
                    ->join('products', 'cart.product_id', '=', 'products.id')
                    ->where('cart.user_id', $user_id)
                    ->select('products.*', 'cart.id as cart_id')
                    ->get();

        return view('cart', ['products' => $products]);
    }*/

    /*function removeFromCart($id) {
        Cart::destroy($id);
        return redirect('cart');

    }*/

    /*function showProductDetail($id) {
        $product = Product::find($id);
        return view('products.productDetail', ['product' => $product]);
    }*/

    /*function proceedToCheckout() {
        $user = Auth::user();
        $user_id = $user->id;
        $products = DB::table('cart')
                    ->join('products', 'cart.product_id', '=', 'products.id')
                    ->where('cart.user_id', $user_id);
        $discount = $products->sum('products.discount');
        $total = $products->sum('products.price');
                    
        return view('checkout')
                ->with('total', $total);
    }*/
}
