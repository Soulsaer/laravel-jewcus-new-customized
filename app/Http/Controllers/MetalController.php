<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Metal;
use Illuminate\Http\Request;

class MetalController extends Controller
{
    public function index()
    {
        $metals = Metal::paginate(10); 
        return view('Admin.metal.index', compact('metals'));
    }

    public function create()
    {
        return view('Admin.metal.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'alt']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('metals/'), $imageName);
            $data['image'] = 'metals/' . $imageName;
        }

        Metal::create($data);

        return redirect()->route('admin.metal.index')->with('success', 'Metal created successfully.');
    }


    public function show($id)
    {
        $metal = Metal::findOrFail($id);
        return view('Admin.metal.show', compact('metal'));
    }

    public function edit($id)
    {
        $metal = Metal::findOrFail($id);
        return view('Admin.metal.edit', compact('metal'));
    }

    public function update(Request $request, $id)
    {
        $metal = Metal::findOrFail($id);
        $data = $request->only(['name', 'alt']);
        if ($request->hasFile('image')) {
            if ($metal->image && file_exists(public_path($metal->image))) {
                unlink(public_path($metal->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('metals/'), $imageName);
            $data['image'] = 'metals/' . $imageName;
        } 
        else {
            $data['image'] = $metal->image;
        }

        $metal->update($data);

        return redirect()->route('admin.metal.index')->with('success', 'Metal updated successfully.');
    }


    public function destroy($id)
    {
        $metal = Metal::findOrFail($id);
        $metal->delete();

        return redirect()->route('admin.metal.index')->with('success', 'Metal deleted successfully.');
    }
}
