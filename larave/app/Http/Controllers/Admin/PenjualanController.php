<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
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
            $penjualan = Penjualan::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('no_hp', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('kota', 'LIKE', "%$keyword%")
                ->orWhere('negara', 'LIKE', "%$keyword%")
                ->orWhere('kurir', 'LIKE', "%$keyword%")
                ->orWhere('pembayaran', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $penjualan = Penjualan::latest()->paginate($perPage);
        }

        return view('admin.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.penjualan.create');
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
        $this->validate($request, [
			'nama' => 'required',
			'email' => 'required',
			'no_hp' => 'required',
			'alamat' => 'required',
			'kota' => 'required',
			'negara' => 'required',
			'kurir' => 'required',
			'pembayaran' => 'required',
			'total' => 'required'
		]);
        $requestData = $request->all();

        Penjualan::create($requestData);

        return redirect('admin/penjualan')->with('flash_message', 'Penjualan added!');
    }


    public function simpan(Request $request)
    {
        $barang = Barang::find(request('barang'));
        $data = new Penjualan();
        $data->barang=request('barang');
        $data->nama=request('nama');
        $data->email=request('email');
        $data->no_hp=request('no_hp');
        $data->alamat=request('alamat');
        $data->kota=request('kota');
        $data->negara=request('negara');
        $data->total=$barang->harga;
        $data->kurir=request('kurir');
        $data->pembayaran=request('pembayaran');
        $data->save();
        $request->session()->flash('pesan','Pesanan anda berhasil, silahkan cek email anda!');
        return redirect('/pembayaran');
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
        $penjualan = Penjualan::findOrFail($id);

        return view('admin.penjualan.show', compact('penjualan'));
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
        $penjualan = Penjualan::findOrFail($id);

        return view('admin.penjualan.edit', compact('penjualan'));
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
        $this->validate($request, [
			'nama' => 'required',
			'email' => 'required',
			'no_hp' => 'required',
			'alamat' => 'required',
			'kota' => 'required',
			'negara' => 'required',
			'kurir' => 'required',
			'pembayaran' => 'required',
			'total' => 'required'
		]);
        $requestData = $request->all();

        $penjualan = Penjualan::findOrFail($id);
        $penjualan->update($requestData);

        return redirect('admin/penjualan')->with('flash_message', 'Penjualan updated!');
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
        Penjualan::destroy($id);

        return redirect('admin/penjualan')->with('flash_message', 'Penjualan deleted!');
    }
}
