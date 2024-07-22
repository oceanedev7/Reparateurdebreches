<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ParamètreController extends Controller
{
    public function index()
    {
        $id = auth()->id();
        $parametre = User::findOrFail($id);
        return view('admin_pages.dashboard_paramètre', ['parametre' => $parametre]);
    }
    public function updateConfirmParametre(Request $request)
    {
        $id = auth()->id();
        $post = User::findOrFail($id);
        $post->update([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
        ]);
        return redirect('/dashboard/parametre');
    }
}
