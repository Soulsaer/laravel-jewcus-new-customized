<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Metal;
use App\Models\Gemstone;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('Admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        $metals = Metal::all();
        $gemstones = Gemstone::all();
        return view('Admin.product.create',compact('categories','metals','gemstones'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name', 
            'description', 
            'category_id', 
            'meta_title', 
            'meta_description', 
            'other_meta_info', 
            'product_sku', 
            'quantity', 
            'product_weight', 
            'price_in_india', 
            'price_in_us', 
            'special_price_india', 
            'special_price_us', 
            'url_key', 
            'metal_id', 
            'gemstone_id', 
            'plating', 
            'setting', 
            'stone_shape', 
            'stock_status'
        ]);

        if ($request->hasFile('image')) {
            // Upload image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('products/'), $imageName);
            $data['image'] = 'products/' . $imageName;
        }

        // Create the product
        Product::create($data);

        // Redirect with success message
        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::with([
            'metal' => function ($query) {
                $query->select('id', 'name'); // Include the primary key in the select
            },
            'gemstone' => function ($query) {
                $query->select('id', 'name'); // Include the primary key in the select
            },
            'category' => function ($query) {
                $query->select('id', 'name'); // Include the primary key in the select
            }
        ])->find($id);

        return view('Admin.product.show', compact('product'));
    }



    /**
     * Show the form for editing the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $metals = Metal::all();
        $gemstones = Gemstone::all();
        return view('Admin.product.edit', compact('product', 'categories', 'metals', 'gemstones'));
    }


    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Get the data from the request
        $data = $request->only([
            'name', 
            'description', 
            'category_id', 
            'meta_title', 
            'meta_description', 
            'other_meta_info', 
            'product_sku', 
            'quantity', 
            'product_weight', 
            'price_in_india', 
            'price_in_us', 
            'special_price_india', 
            'special_price_us', 
            'url_key', 
            'metal_id', 
            'gemstone_id', 
            'plating', 
            'setting', 
            'stone_shape', 
            'stock_status'
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('products/'), $imageName);
            $data['image'] = 'products/' . $imageName;
        } 
        else {
            // Retain the existing image if no new image is uploaded
            $data['image'] = $product->image;
        }

        // Update the product with the data
        $product->update($data);

        // Redirect with a success message
        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}
