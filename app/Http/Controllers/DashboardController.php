<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $missions = Mission::all();
        return view('dashboard', ['missions' => $missions]);
    }


    public function create()
    {
        return view('create-mission');
    }


    public function store(Request $request)
    {
        $mission = new Mission();
        $mission->icon = $request->icon;
        $mission->name = $request->name;
        $mission->save();
        
        return redirect()->intended('dashboard');
    }


    public function show(string $id)
    {
        $mission = Mission::findOrFail($id);

        return view('show', ['mission' => $mission]);
    }


    public function edit(string $id)
    {
        $mission = Mission::findOrFail($id);
        return view('edit', ['mission' => $mission]);
    }


    public function update(Request $request, string $id)
    {
        $mission = Mission::findOrFail($id);
        $mission->update($request->all());
        return redirect('dashboard');
    }


    public function destroy(string $id)
    {
        $mission = Mission::findOrFail($id);
        $mission->delete();

        return redirect()->intended('dashboard');
    }
}
