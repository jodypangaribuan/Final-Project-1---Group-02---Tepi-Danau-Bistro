<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title'] = 'Gallery';
        $data['galery'] = Galery::orderBy('id', 'desc')->get();

        return view('galery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $data = new Galery();
            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/galery/');
                $image->move($destinationPath, $name);
                $data->img = $name;
            }
            $data->save();

            return redirect()->back()->with('success', 'Save data successfully');
        } catch (\Throwable $th) {
            Log::error('Failed to save gallery: ' . $th->getMessage());
            return redirect()->back()->with('failed', 'Failed to save data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        return view('galery.show', compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        return view('galery.edit', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = Galery::find($id);

        if (!$data) {
            Log::error('Gallery not found with id: ' . $id);
            return redirect()->back()->with('failed', 'Gallery not found');
        }

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/img/galery/');
            try {
                $image->move($destinationPath, $name);
                $data->img = $name;
            } catch (\Exception $e) {
                Log::error('Failed to move image: ' . $e->getMessage());
                return redirect()->back()->with('failed', 'Failed to upload image');
            }
        }

        try {
            $data->save();
            return redirect()->back()->with('success', 'Save data successfully');
        } catch (\Throwable $th) {
            Log::error('Failed to save gallery: ' . $th->getMessage());
            return redirect()->back()->with('failed', 'Failed to save data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Galery::find($id);

        if (!$data) {
            Log::error('Gallery not found with id: ' . $id);
            return redirect()->back()->with('failed', 'Gallery not found');
        }

        try {
            $data->delete();
            return redirect()->back()->with('success', 'Delete data successfully');
        } catch (\Throwable $th) {
            Log::error('Failed to delete gallery: ' . $th->getMessage());
            return redirect()->back()->with('failed', 'Failed to delete data');
        }
    }
}
