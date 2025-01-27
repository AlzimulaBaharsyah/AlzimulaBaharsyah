<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $barang = Barang::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('harga', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('kategori', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $barang = Barang::latest()->paginate($perPage);
        }

        return view('admin.barang.index', compact('barang'));
    }

    public function pod()
    {
        $barang = barang::where('kategori', request('nama'))
        ->orWhere('nama', 'like', '%' . request('nama') . '%')->get();
        return view('pod', ['barang' => $barang]);
    }

    public function mod()
    {
        $barang = barang::where('kategori', request('nama'))
        ->orWhere('nama', 'like', '%' . request('nama') . '%')->get();
        return view('mod', ['barang' => $barang]);
    }

    public function rda()
    {
        $barang = barang::where('kategori', request('nama'))
        ->orWhere('nama', 'like', '%' . request('nama') . '%')->get();
        return view('rda', ['barang' => $barang]);
    }

    public function coil()
    {
        $barang = barang::where('kategori', request('nama'))
        ->orWhere('nama', 'like', '%' . request('nama') . '%')->get();
        return view('coil', ['barang' => $barang]);
    }

    public function baterai()
    {
        $barang = barang::where('kategori', request('nama'))
        ->orWhere('nama', 'like', '%' . request('nama') . '%')->get();
        return view('baterai', ['barang' => $barang]);
    }

    public function liquid()
    {
        $barang = barang::where('kategori', request('nama'))
        ->orWhere('nama', 'like', '%' . request('nama') . '%')->get();
        return view('liquid', ['barang' => $barang]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $this->validate($request, [
			'nama' => 'required',
            'foto' => 'mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024',
			'harga' => 'required',
			'deskripsi' => 'required',
			'kategori' => 'required'
		]);
        $foto = $request->file('foto')->getClientOriginalName();
        $destination = base_path() . '/public/download';
        $request->file('foto')->move($destination, $foto);
        $requestData['foto'] = $foto;


        Barang::create($requestData);

        return redirect('admin/barang')->with('flash_message', 'Barang added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);

        return view('admin.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $this->validate($request, [
			'nama' => 'required',
            'foto' => 'mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024',
			'harga' => 'required',
			'deskripsi' => 'required',
			'kategori' => 'required'
		]);

        $foto = $request->file('foto')->getClientOriginalName();
        $destination = base_path() . '/public/download';
        $request->file('foto')->move($destination, $foto);
        $requestData['foto'] = $foto;

        $barang = Barang::findOrFail($id);
        $barang->update($requestData);

        return redirect('admin/barang')->with('flash_message', 'Barang updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Barang::destroy($id);

        return redirect('admin/barang')->with('flash_message', 'Barang deleted!');
    }
}
