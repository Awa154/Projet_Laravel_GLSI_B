<?php

namespace App\Http\Controllers;

use App\Models\Universite;
use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    public function index(){
        $universites = Universite::all();
        return view('university.listeUni', compact('universites'));
    }
    public function create(){
        return view('university.createUni');
    }

    public function store(Request $request){
        $universite = Universite::create([
            'nom'=>$request->nom,
            'description'=>$request->description,
            'image_path'=>$request->image_path,
            'addresse'=>$request->addresse,
            'contact'=>$request->contact,
        ]);
        $universite->save();
        return redirect()->route('university_page');
    }

    public function alluniversite(Request $request)
    {
        $universites = Universite::all();
        return view('university.listeUni', ['universites' => $universites]);
    }

    public function oneUniversite(Request $request, $id)
    {
        $universite = Universite::findOrFail($id);
        return view('university.detailUni', ['universite' => $universite]);
    }

    public function alluniversitethree(Request $request)
    {
        $universites = Universite::all();
        return view('accuiel', ['universites' => $universites]);
    }

    public function edit($id)
    {
        $universite = Universite::find($id);
        if (!$universite) {
            return redirect()->route('university_page')->with('error', 'L\'université n\'a pas été trouvé.');
        }
        return view('university.editUni', compact('universite'));
    }

    public function update(Request $request, $id)
    {
        $universite = Universite::find($id);
        if ($universite) {
            $universite->update([
                'nom'=>$request->nom,
                'description'=>$request->description,
                'image_path'=>$request->image_path,
                'addresse'=>$request->addresse,
                'contact'=>$request->contact,
            ]);
            return redirect()->route('university_page')->with('success', 'Les informations de l\'université ont été mises à jour avec succès.');
        }
        return redirect()->route('university_page')->with('error', 'L\'université n\'a pas été trouvé.');
    }

    public function delete($id)
    {
        $universite = universite::find($id);
        if ($universite) {
            $universite->delete();
            return redirect()->route('university_page')->with('success', 'L\'université a été supprimé avec succès.');
        }
        return redirect()->route('university_page')->with('error', 'L\'université n\'a pas été trouvé.');
    }
}
