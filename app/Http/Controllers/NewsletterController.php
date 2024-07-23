<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
// afficher la page gérer les articles
            $newsletters = Newsletter::all();
            return view('admin_pages.dashboard_newsletter', compact('newsletters'));
        }
        public function store(Request $request)
        {

            $post = Newsletter::create([
                'id_user' => auth()->id(),
                'titre' => $request->input('titre'),
                'contenu' => $request->input('contenu'),

            ]);
            return redirect('/dashboard/newsletter');
        }

        // public function update($id)
        // {
        //     $newsletter = Newsletter::findOrFail($id);
        //     return view('admin_pages.updateArticle', ['newsletter' => $Newsletter]);
        // }
        public function updateConfirmNewsletter(Request $request, $id)
        {
            $post = Newsletter::findOrFail($id);
            $post->update([
                'titre' => $request->input('titre'),
                'contenu' => $request->input('contenu'),
                'photo' => $request->input('photo')
            ]);
            return redirect('/dashboard/newsletter');
        }
        public function delete($id)
        {
            $newsletter = Newsletter::findOrFail($id);
            $newsletter->delete();
            return redirect('/dashboard/newsletter');
        }
    };


