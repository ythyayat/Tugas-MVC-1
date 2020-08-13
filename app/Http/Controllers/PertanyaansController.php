<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Pertanyaan::all();
        return view('pertanyaan/pertanyaan',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:pertanyaan|max:45',
            'isi' => 'required|max:255',
        ]);

        $query = Pertanyaan::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Pertanyaan::where('id', $id)->first();
        
        //dd($questions);
        return view('pertanyaan/detail',compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Pertanyaan::where('id', $id)->first();
        return view('pertanyaan/edit', compact('question'));
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
        $validatedData = $request->validate([
            'judul' => 'required|unique:pertanyaan|max:45',
            'isi' => 'required|max:255',
        ]);

        $query = Pertanyaan::where('id',$id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi 
            ]);

        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Dihapus!');
    }
}
