<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    
    public function index(){
        $questions = Pertanyaan::all();
        return view('pertanyaan/pertanyaan',compact('questions'));
    }

    public function show($req){
        $questions = Pertanyaan::where('id', $req)->first();
        
        //dd($questions);
        return view('pertanyaan/detail',compact('questions'));
    }

    public function create(){
        return view('pertanyaan/create');
    }

    public function store(Request $request){
        
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

    public function edit($id){
        $question = Pertanyaan::where('id', $id)->first();
        return view('pertanyaan/edit', compact('question'));
    }
    public function update($id,Request $request){
        
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

    public function destroy($id){
        $query = Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Dihapus!');
    }


}
