<?php

namespace App\Http\Controllers;
use App\Models\pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjamans = Pinjaman::latest()->paginate(5);
      
        return view('pinjamans.index',compact('pinjamans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinjamans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'region' => 'required',
            'purproses' => 'required',
            'ket' => 'required',
            'date' => 'required',
            'return_date' => 'required',
            'teacher' => 'required'
        ]);
      
        Pinjaman::create($request->all());
       
        return redirect()->route('pinjamans.index')
                        ->with('success','Pinjaman created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pinjaman $pinjaman)
    {
        return view('pinjamans.show',compact('pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pinjaman $pinjaman)
    {
        return view('pinjamans.edit',compact('pinjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request, Pinjaman $pinjaman)
    {
        $request->validate([
            'name' => 'required',
            'region' => 'required',
            'purproses' => 'required',
            'ket' => 'required',
            'date' => 'required',
            'return_date' => 'required',
            'teacher' => 'required'
        ]);
      
        $pinjaman->update($request->all());
      
        return redirect()->route('pinjamans.index')
                        ->with('success','Pinjaman updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pinjaman $pinjaman)
    {
        $pinjaman->delete();
       
        return redirect()->route('pinjamans.index')
                        ->with('success','Pinjaman deleted successfully');
    }
}
