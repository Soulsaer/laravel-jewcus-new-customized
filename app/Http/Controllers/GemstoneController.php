<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gemstone;
use Illuminate\Http\Request;

class GemstoneController extends Controller
{
    public function index()
    {
        $gemstones = Gemstone::paginate(10); 
        return view('Admin.gemstone.index', compact('gemstones'));
    }

    public function create()
    {
        return view('Admin.gemstone.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'alt']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('gemstones/'), $imageName);
            $data['image'] = 'gemstones/' . $imageName;
        }

        Gemstone::create($data);

        return redirect()->route('admin.gemstone.index')->with('success', 'Gemstone created successfully.');
    }


    public function show($id)
    {
        $gemstone = Gemstone::findOrFail($id);
        return view('Admin.gemstone.show', compact('gemstone'));
    }

    public function edit($id)
    {
        $gemstone = Gemstone::findOrFail($id);
        return view('Admin.gemstone.edit', compact('gemstone'));
    }

    public function update(Request $request, $id)
    {
        $gemstone = Gemstone::findOrFail($id);
        $data = $request->only(['name', 'alt']);
        if ($request->hasFile('image')) {
            if ($gemstone->image && file_exists(public_path($gemstone->image))) {
                unlink(public_path($gemstone->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('gemstones/'), $imageName);
            $data['image'] = 'gemstones/' . $imageName;
        } 
        else {
            $data['image'] = $gemstone->image;
        }

        $gemstone->update($data);

        return redirect()->route('admin.gemstone.index')->with('success', 'gemstone updated successfully.');
    }

    public function destroy($id)
    {
        $gemstone = Gemstone::findOrFail($id);
        $gemstone->delete();

        return redirect()->route('admin.gemstone.index')->with('success', 'Gemstone deleted successfully.');
    }
}
