<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Ad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    public function index()
    {
        return view('panel.ads.index', ['ads'=>Ad::paginate(10),]);
    }
    public function create()
    {
        return view('panel.ads.create', [
            'cities'=>DB::table('cities')->get(),
            'categories'=>DB::table('categories')->get()
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
        $data['employer_id'] = 1;
        Ad::create($data);
        return redirect()->route('ads.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        return view('panel.ads.edit', ['ad'=>Ad::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        Ad::find($id)->update($data);
        return redirect()->route('ads.index');
    }
    public function destroy($id)
    {
        Ad::destroy($id);
        return redirect()->route('ads.index');
    }
}
