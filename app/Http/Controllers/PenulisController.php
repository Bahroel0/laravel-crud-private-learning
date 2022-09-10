<?php

namespace App\Http\Controllers;
use App\Model\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $data = Penulis::latest()->get();
        return view('ui.penulis.index', compact($data));
    }

    public function create(){
        return view('ui.penulis.create');
    }

    public function store(Request $request){
        return view('ui.penulis.index')->with('message', 'Penulis berhasil ditambahkan');
    }
}
