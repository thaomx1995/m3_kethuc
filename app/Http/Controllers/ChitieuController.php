<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChitieuRequest;
use App\Models\Chitieu;
use Illuminate\Http\Request;

class ChitieuController extends Controller
{
    public function index()
    {
        $chitieus = Chitieu::all();
        return view('chitieu.index',compact('chitieus'));
    }
    public function create()
    {

        return view('chitieu.create');
    }
    public function store(ChitieuRequest $request)
    {
        $chitieus = new Chitieu();
        $chitieus->danhmuc = $request->danhmuc;
        $chitieus->ngay = $request->ngay;
        $chitieus->sotien = $request->sotien;
        $chitieus->ghichu = $request->ghichu;
        $chitieus->save();
        return redirect()->route('chitieu.index');
    }
    public function edit($id)
    {
        $chitieus = Chitieu::find($id);
        return view('chitieu.edit',compact('chitieus'));

    }
    public function update(Request $request ,$id)
    {
        $chitieus = Chitieu::find($id);
        $chitieus->danhmuc = $request->danhmuc;
        $chitieus->ngay = $request->ngay;
        $chitieus->sotien = $request->sotien;
        $chitieus->ghichu = $request->ghichu;
        $chitieus->save();
        return redirect()->route('chitieu.index');
    }
    public function destroy(Chitieu  $chitieu)
    {
        $chitieu->delete();
        // dd( $categorys);
        return redirect()->route('chitieu.index');

    }
}
