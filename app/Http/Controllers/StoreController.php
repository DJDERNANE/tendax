<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\abonnementBoutique;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index(){
        $cats  = Category::where('parent_id', null)->paginate(12);
        $products = Product::where('accepted', true)->get();
        $brands = Brand::all();
        $stores = Store::where('isActive', true)->get();
        return view('store.index', compact('cats', 'products', 'brands', 'stores'));
        //return $cats[1]->subCategories[0]->subsubCategories;
    }

    public function products(){
        $cats  = Category::all();
        $products = Product::where('accepted', true)->get();
        return view('store.products', compact('products','cats'));
    }
    public function marques(){
        $brands = Brand::all();
        return view('store.marques', compact('brands'));
    }
    public function Stores(){
        $stores = Store::where('isActive', true)->get();
        return view('store.allStores', compact('stores'));
    }
    public function marqueProducts(Brand $brand){
        $products = $brand->products;
        return view('store.marqueProducts', compact('products', 'brand'));
    }
    public function productDetails(Product $product){
       // Fetch category IDs associated with the given product
       $categoryIds = $product->categories->pluck('id');

       // Fetch products that belong to any of these categories, excluding the current product
       $products = Product::whereHas('categories', function ($query) use ($categoryIds) {
           $query->whereIn('categories.id', $categoryIds);
       })->where('id', '<>', $product->id)->get();

       return view('store.productDetails', compact('product', 'products'));
    }
    public function createStore(){
        return view('createStore');
    }

    public function saveStore(Request $request){
        $coverName = '';
        $logoName= '';
        if ($request->hasFile('logo')) {
            $logoName = $request->file('logo')->getClientOriginalName();
            $logo = $request->file('logo')->storeAs('./storeLogos',$logoName,'pictures');
        }
        if ($request->hasFile('cover')) {
            $coverName = $request->file('logo')->getClientOriginalName();
            $cover = $request->file('logo')->storeAs('./storeCovera',$coverName,'pictures');
        }

        $store = Store::create([
            'storeName'=> $request->storeName,
            'logo'=> $logoName,
            'cover'=> $coverName,
            'user_id'=> Auth::id(),
        ]);
        
        if ($store) {
            $startDate = now();
            $endDate = $startDate->copy()->addDays(5);
            $abnm = abonnementBoutique::create([
                'store_id' => $store->id,
                'date_debut'=>$startDate,
                'date_fin'=>$endDate
            ]);
            return redirect()->route('store');
        }
    }

    public function allStores(){
        $stores = Store::where('isActive', false)->get();
        return view('admin.store.stores', compact('stores'));
    }
    
    public function acceptedStores(){
        $stores = Store::where('isActive', true)->get();
        return view('admin.store.acceptedStores', compact('stores'));
    }


    public function active($id){
        $store = Store::find($id);
        $store->update([
            'isActive'=> true
        ]);
        $stores = Store::all();
        return redirect()->route('stores.pending');
    }
    
    public function block(Store $store){
        $store->update([
            'isActive'=> false
        ]);
        return redirect()->route('stores.accepted');
        
    }
    
    public function show(Store $store){
        return view('store.boutique', compact('store'));
    }
    public function showStoreAdmin(Store $store){
        return view('admin.store.editStore', compact('store'));
    }

    public function editStoreAdmin(Request $request, Store $store){
        if ($request->hasFile('logo')) {
            $logoName = $request->file('logo')->getClientOriginalName();
            $logo = $request->file('logo')->storeAs('./storeLogos',$logoName,'pictures');
            $store->logo =  $logoName;
        }
        if ($request->hasFile('cover')) {
            $coverName = $request->file('logo')->getClientOriginalName();
            $cover = $request->file('logo')->storeAs('./storeCovera',$coverName,'pictures');
            $store->cover =  $cover;
        }

        $store->storeName =  $request->nom;

        $store->save();
        
        return redirect()->route('stores.accepted');
    }
}
