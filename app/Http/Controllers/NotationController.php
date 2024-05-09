<?php

namespace App\Http\Controllers;

use App\Models\Notation;
use App\Models\Universite;
use App\Models\Note;
use Illuminate\Http\Request;

class NotationController extends Controller
{
    public function index(){
        $notations = Notation::all();
        return view('critere.listeCritere', compact('notations'));
    }
    public function create(){
        return view('critere.createCritere');
    }
    public function store(Request $request){
        $notation = Notation::create([
            'critere'=>$request->critere,
            'note'=>$request->note,
        ]);
        $notation->save();
        return redirect()->route('critere_page');
    }
    public function oneUniversite(Request $request, $id)
    {
        $universite = Universite::findOrFail($id);
        $notations= Notation::All();
        return view('notation.addNote', ['universite' => $universite, 'notations'=> $notations]);
    }
    public function allcritere(Request $request)
    {
        $notations = Notation::all();
        return view('critere.listeCritere', ['notations' => $notations]);
    }

    public function edit($id)
    {
        $notation = Notation::find($id);
        if (!$notation) {
            return redirect()->route('critere_page')->with('error', 'Le critère n\'a pas été trouvé.');
        }
        return view('critere.editCritere', compact('notation'));
    }

    public function update(Request $request, $id)
    {
        $notation = Notation::find($id);
        if ($notation) {
            $notation->update([
                'critere'=>$request->critere,
                'note'=>$request->note,
            ]);
            return redirect()->route('critere_page')->with('success', 'Les informations du critère ont été mises à jour avec succès.');
        }
        return redirect()->route('critere_page')->with('error', 'Le critère n\'a pas été trouvé.');
    }

    public function delete($id)
    {
        $notation = Notation::find($id);
        if ($notation) {
            $notation->delete();
            return redirect()->route('critere_page')->with('success', 'Le critère a été supprimé avec succès.');
        }
        return redirect()->route('critere_page')->with('error', 'Le critère n\'a pas été trouvé.');
    }
}

