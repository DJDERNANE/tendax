<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        $products = Product::where('accepted', true)->get();
        return view('admin.store.categories', compact('cats', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        if ($request->hasFile('picture')) {
            $iconName = '';
            $imageName = $request->file('picture')->getClientOriginalName();
            $image = $request->file('picture')->storeAs('./Category',$imageName,'pictures');
            if ($request->hasFile('icon')) {
                $iconName = $request->file('icon')->getClientOriginalName();
                $icon = $request->file('icon')->storeAs('./Category/Icons',$iconName,'pictures');
            }
            Category::create([
                'icon' => $iconName,
                'name' => $request->name,
                'picture' => $imageName // This will be null if no file was uploaded
            ]);
           
            return redirect()->route('categories.all');
        }
    } catch (\Throwable $th) {
        return $th;
    }
   

    
 
 
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ids = $request->input('ids');
        $categories = Category::whereIn('id', $ids)->get();

        // Loop through each category and delete associated pictures
        foreach ($categories as $category) {
            $imagePath = 'Category/' . $category->picture;

            // Delete the file from the 'pictures' disk
            Storage::disk('pictures')->delete($imagePath);

            // Delete the file from the default disk (e.g., 'public')
            Storage::delete($imagePath);

            // Delete the record from the database
            $category->delete();
        }
        return response()->json(['message' => 'Successfully deleted categories and their pictures.']);
    }
}
