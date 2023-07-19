<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index ()
    {
        $customers = Customer::all();
        return view ('customers.index',compact(['customers']));
    }    
    
    public function create ()
    {
        return view ('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'email' => 'required|email',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);


        Customer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pelanggan')->with('success','Data Customer Berhasil Ditambahkan.');
    }

    public function edit ($id)
    {
        $customer = Customer::find($id);
        return view ('customers.edit',compact(['customer']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'email' => 'required|email',
            'nomor' => 'required',
            'alamat' => 'required',
        ]);

        $customer = Customer::find($id);
        $customer->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pelanggan')->with('success','Data Customer Berhasil Diedit.');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/pelanggan')->with('success','Data Customer Berhasil Dihapus.');
    }
}
