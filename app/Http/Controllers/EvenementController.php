<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return view('admin_pages.dashboard_evenement', compact('evenements'));
    }
    public function store(Request $request)
    {

        $post = Evenement::create([
            'id_user' => auth()->id(),
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
            'date' => $request->input('date'),
            'lieu' => $request->input('lieu'),
        ]);
        return redirect('/dashboard/evenement');
    }
    public function update($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('admin_pages.updateEvenement', ['evenement' => $evenement]);
    }
    public function updateConfirmEvenement(Request $request, $id)
    {
        $post = Evenement::findOrFail($id);
        $post->update([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
            'date' => $request->input('date'),
            'lieu' => $request->input('lieu'),
        ]);
        return redirect('/dashboard/evenement');
    }
    public function delete($id)
    {
        $evenements = Evenement::findOrFail($id);
        $evenements->delete();
        return redirect('/dashboard/evenement');
    }
}
