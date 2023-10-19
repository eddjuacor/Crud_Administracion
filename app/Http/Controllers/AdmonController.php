<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admon;

class AdmonController extends Controller
{
    public function index()
    {
        $admon = Admon::all();
        return view('admon.index', compact('admon'));
    }

    public function create()
    {
        return view('admon.create');
    }

    public function store(Request $request)
    {
         Admon::create($request->all());
         return redirect()->route('admon.index');
    }

    public function edit(Admon $admon)
    {
        return view('admon.edit', compact('admon'));

    }
    public function update(Request $request, Admon $admon)
        {
        $admon->update($request->all());
        return redirect()->route('admon.index');
    }

    public function show(Admon $admon)
    {
        return view('admon.show', compact('admon'));
    }

    public function destroy( Admon $admon)
    {
        $admon->delete();
        return redirect()->route('admon.index');
    }
}
