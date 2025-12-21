<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFromController extends Controller
{
     // แสดงหน้า Workshop #HTML-FORM เดิม
    public function index()
    {
        return view('html101');
    }

    // รับค่าจากฟอร์ม และส่งไปแสดงผลหน้าใหม่
    public function store(Request $request)
    {
        $data = $request->all();

        return view('myview2', compact('data'));
    }
}
