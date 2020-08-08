<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    
    public function index(){
        $questions = DB::table('pertanyaan')->select()->get();
        return view('pertanyaan/pertanyaan',compact('questions'));
    }

    public function show($req){
        $questions = DB::table('pertanyaan')
                    ->select()
                    ->where('id', $req)
                    ->first();
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

        $query = DB::table('pertanyaan')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Ditambahkan!');
    }

    public function edit($id){
        $question = DB::table('pertanyaan')
                    ->select()
                    ->where('id', $id)
                    ->first();
        return view('pertanyaan/edit', compact('question'));
    }
    public function update($id,Request $request){
        
        $validatedData = $request->validate([
            'judul' => 'required|unique:pertanyaan|max:45',
            'isi' => 'required|max:255',
        ]);

        $query = DB::table('pertanyaan')->where('id',$id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Diubah!');
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/pertanyaan')->with('berhasil','Data Berhasil Dihapus!');
    }


}
