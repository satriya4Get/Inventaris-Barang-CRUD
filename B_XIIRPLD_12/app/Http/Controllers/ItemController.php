<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::orderBy('id', 'desc')->get();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'merk' => 'required',
            'specifications' => 'required',
            'condition' => 'required',
            'stock' => 'required',
            'locate' => 'required',
        ]);
        $imagePath = $request->file('image')->store('image', 'public');

        Item::create([
            'name' => $request->name,
            'image' => $imagePath,
            'merk' => $request->merk,
            'specifications' => $request->specifications,
            'condition' => $request->condition,
            'stock' => $request->stock,
            'locate' => $request->locate,
        ]);

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'merk' => 'required',
            'specifications' => 'required',
            'condition' => 'required',
            'stock' => 'required',
            'locate' => 'required',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($item->image);
            $imagePath = $request->file('image')->store('image', 'public');
            $item->image = $imagePath;
        }

        $item->update([
            'name' => $request->input('name'),
            'merk' => $request->input('merk'),
            'specifications' => $request->input('specifications'),
            'condition' => $request->input('condition'),
            'stock' => $request->input('stock'),
            'locate' => $request->input('locate'),
        ]);

        return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        Storage::disk('public')->delete($item->image);
        $item->delete();
        return redirect()->route('items.index');
    }
}
