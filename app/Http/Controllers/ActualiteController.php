<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\User;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{

    public function index()
    {
        $actualites = Actualite::all();
        return view('admin_pages.dashboard_actualite', compact('actualites'));
    }
    public function store(Request $request)
    {

        $post = Actualite::create([
            'id_user' => auth()->id(),
            'titre' => $request->input('titre'),
            'contenu' => $request->input('contenu'),
            'photo' => $request->input('photo'),
        ]);
        return redirect('/dashboard/actualite');
    }

    public function update($id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('admin_pages.updateActualite', ['actualite' => $actualite]);
    }
    public function updateConfirmActualite(Request $request, $id)
    {
        $post = Actualite::findOrFail($id);
        $post->update([
            'titre' => $request->input('titre'),
            'contenu' => $request->input('contenu'),
            'photo' => $request->input('photo')
        ]);
        return redirect('/dashboard/actualite');
    }
    public function delete($id)
    {
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();
        return redirect('/dashboard/actualite');
    }
}
