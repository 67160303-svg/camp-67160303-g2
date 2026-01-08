<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    // แสดงข้อมูลทั้งหมด
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('myview.index', compact('pokedexs'));
    }

    // หน้าเพิ่มข้อมูล
    public function create()
    {
        return view('myview.create');
    }

    // บันทึกข้อมูล (Insert)
    public function store(Request $request)
    {
        Pokedex::create($request->all());
        return redirect('/pokedexs');
    }

    // หน้าแก้ไข
    public function edit($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        return view('myview.edit', compact('pokedex'));
    }

    // อัปเดตข้อมูล (Update)
    public function update(Request $request, $id)
    {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());
        return redirect('/pokedexs');
    }

    // ลบข้อมูล (Delete)
    public function destroy($id)
    {
        Pokedex::destroy($id);
        return redirect('/pokedexs');
    }
}
