<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return view('admin_pages.dashboard_evenement', compact('evenements'));
    }
    public function store(Request $request)
    {

        // $post = Evenement::create([
        //     'id_user' => auth()->id(),
        //     'titre' => $request->input('titre'),
        //     'description' => $request->input('description'),
        //     'photo' => $request->input('photo'),
        //     'date' => $request->input('date'),
        //     'lieu' => $request->input('lieu'),
        // ]);
        // return redirect('/dashboard/evenement');
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'titre' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'lieu' => 'required|string',
        ]);
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $photoPath = Storage::url($path);
    
            $evenement = Evenement::create([
                'id_user' => auth()->id(),
                'titre' => $request->input('titre'),
                'description' => $request->input('description'),
                'date' => $request->input('date'),
                'lieu' => $request->input('lieu'),
                'photo' => $path,
            ]);
    
            return redirect()->back()->with('photoPath', $photoPath);
        }
    
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
