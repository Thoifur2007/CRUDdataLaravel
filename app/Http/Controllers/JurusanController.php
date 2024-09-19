<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\View\View;
use Illuminate\Http\Request;
//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                //get all products
                $jurusan = Jurusan::latest()->paginate(10);

                //render view with products
                return view('admin.jurusan.jurusan', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            
            'jurusan'         => 'required|min:1',
            'detail'   => 'required|min:1',

        ]);

        //create product
        Jurusan::create([
            'jurusan'  => $request->jurusan,
            'detail'  => $request->detail,
        ]);

        //redirect to index
        return redirect()->route('jurusan')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        //
    }
}
