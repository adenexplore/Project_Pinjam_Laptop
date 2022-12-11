<?php

namespace App\Http\Controllers;
use App\Models\Pagepinjam;
use Illuminate\Http\Request;

class PagepinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagepinjams = Pagepinjam::orderBy('created_at', 'desc')->get();

        return view('pagepinjam.index', compact('pagepinjams'))
            ->with('i', (request()->input('pagepinjam', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagepinjam.create');
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

        Pagepinjam::create($request->all());

        return redirect()->route('pagepinjam.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pagepinjam.edit', compact('pagepinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        Pagepinjam::create($request->all());

        return redirect()->route('pagepinjam.index')
            ->with('success', 'Berhasil Di Edit !');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagepinjam $pagepinjam )
    {
        $pagepinjam->delete();

        return redirect()->route('pagepinjam.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
