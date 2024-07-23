<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

        // $post = Actualite::create([
        //     'id_user' => auth()->id(),
        //     'titre' => $request->input('titre'),
        //     'contenu' => $request->input('contenu'),
        //     'photo' => $request->input('photo'),
        // ]);
        // return redirect('/dashboard/actualite');

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $photoPath = Storage::url($path);

            $post = Actualite::create([
                'id_user' => auth()->id(),
                'titre' => $request->input('titre'),
                'contenu' => $request->input('contenu'),
                'photo' => $path,
            ]);

            return redirect()->back()->with('photoPath', $photoPath);
        }

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
