<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Hewan;

class HewanController extends Controller
{
    public function index(){
        $data = Hewan::orderBy('id')->get();
        return view('ui.hewan.index', compact(["data"]));
    }

    public function create(){
        return view('ui.hewan.create');
    }

    public function detail(Request $request){
        $hewan = Hewan::find($request->id);
        return view('ui.hewan.detail', compact("hewan"));
    }
    public function store(Request $request){

        try {
            $data = $this->validate($request, [
                'nama' => 'required',
                'jumlah_kaki' => 'required',
            ]);
            Hewan::create($data);
            return redirect('/hewan')->with('message', 'Data hewan berhasil ditambahkan');
        } catch(\Exception $e) {
            return redirect('/hewan')->with('message', 'Data tidak valid');
        }
    }
    public function update(Request $request){
        $hewan = Hewan::find($request->id);
        return view('ui.hewan.form', compact("hewan"));
    }

    public function saveUpdate(Request $request, $id){
        try {
            $data = $this->validate($request, [
                'nama' => 'required',
                'jumlah_kaki' => 'required',
            ]);
            $hewan  = Hewan::find($id);
            $hewan->update([
                "nama" => $request->nama,
                "jumlah_kaki" => $request->jumlah_kaki
            ]);
            return redirect('/hewan')->with('message', 'Data hewan berhasil diupdate');
        } catch(\Exception $e) {
            return redirect('/hewan')->with('message', 'Data tidak valid');
        }
    }
    
    public function destroy(Request $request, $id){
        $hewan = Hewan::findOrFail($id);
        $hewan->delete();
        return redirect('/hewan')->with('message', 'Data hewan berhasil diupdate');
    }
}
