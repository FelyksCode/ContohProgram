<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function functionbaru()
    {
        return "Ini page function baru";
    }

    public function index()
    {
        $names = [
            'Felix',
            'Bang Jek',
            'Sion',
            'Stefan'
        ];
        return view('welcome')->with('names', $names);
    }

    public function create()
    {
        return "Ini create page";
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
        return "Ini show page ID: " . $id;
    }

    public function edit(string $id)
    {
        return "Ini edit page ID: " . $id;
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
