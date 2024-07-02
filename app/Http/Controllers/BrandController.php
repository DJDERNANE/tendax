<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Brand::all();
        return view('admin.store.brands', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('picture')) {
            $imageName = $request->file('picture')->getClientOriginalName();
            $image = $request->file('picture')->storeAs('./Brands',$imageName,'pictures');
            Brand::create([
                'name' => $request->name,
                'picture' => $imageName // This will be null if no file was uploaded
            ]);
           
            return redirect()->route('brands.all');
        }
    
        
     
      return redirect()->route('brands.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.store.editBrand', compact('brand')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Check if a new picture file has been uploaded
    if ($request->hasFile('picture')) {
        // Get the original name of the uploaded file
        $imageName = $request->file('picture')->getClientOriginalName();
        
        // Store the file in the 'Brands' directory with the original name
        $image = $request->file('picture')->storeAs('./Brands', $imageName, 'pictures');

        // Update the brand's picture
        $brand->picture = $imageName;
    }

    // Update the brand's name
    $brand->name = $request->name;
    
    // Save the updated brand
    $brand->save();

    // Redirect to the 'brands.all' route with a success message
    return redirect()->route('brands.all')->with('success', 'Brand updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ids = $request->input('ids');
        $SubCategory = SubCategory::whereIn('id', $ids)->delete();
        return response()->json(['message' => 'Successfully deleted categories and their pictures.']);
    }
}
