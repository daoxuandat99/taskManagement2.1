<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function add(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        return view('add', compact('name', 'phone', 'email'));
    }

    public function show($id)
    {
        return view('show', compact('id'));
    }

    public function delete($id)
    {
        return view('delete', compact('id'));
    }
}
