<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class ListeController extends Controller
{
    public function liste()
    {
        $listes = User::all();
        // $listes = User::all()->orderBy('created_at', 'desc')->get();

        return view('liste.index',['listes' => $listes,]);
    }

    public function liste_update($id)
    {
        $liste = User::find($id);

        return view('liste.liste_update',['liste' => $liste,]);
    }

    public function liste_update_recherche($id)
    {
        $liste = User::find($id);

        return view('liste.liste_update_recherche',['liste' => $liste,]);
    }

    public function liste_recherche(Request $request)
    {

        $query = User::query();

        if ($request->filled('nom')) {
            $query->where('name', 'like', '%' . $request->input('nom') . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        if ($request->filled('tel')) {
            $query->where('tel', 'like', '%' . $request->input('tel') . '%');
        }

        $listes = $query->get();

        return view('liste.recherche',['listes' => $listes,]);

    }

    public function supprimer($id)
    {
        $vrf= User::where('id', $id)->first();

        if ($vrf->statut === 'en ligne') {

            return redirect()->back()->with('warning', 'Impossible de supprimer cet utilisateur, car il est en ligne.');
        }else{

            $suppr = User::where('id', $id)->delete();

            if ($suppr)
            {
                return redirect()->back()->with('success', 'Utilisateur supprimer.');
            }
        }

        return redirect()->back()->with('error', 'Echec de la suppression.');
    }

    public function update(Request $request)
    {
        $name = $request->input('nom');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $password = $request->input('password2');
        $id = $request->input('id');

        $up = User::find($id);
        $up->name = $name;
        $up->email = $email;
        $up->password = bcrypt($request->password);
        $up->tel = $tel;
        $up->update();

        if ($up) {

            return redirect()->route('liste')->with('success', 'Mise a jour éffectuée.');
        }

        return redirect()->back()->with('error', 'Echec de la mise a jour.');
    }

    public function update_recherche(Request $request)
    {
        $name = $request->input('nom');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $password = $request->input('password2');
        $id = $request->input('id');

        $up = User::find($id);
        $up->name = $name;
        $up->email = $email;
        $up->password = bcrypt($request->password);
        $up->tel = $tel;
        $up->update();

        if ($up) {

            return redirect()->route('liste_recherche')->with('success', 'Mise a jour éffectuée.');
        }

        return redirect()->back()->with('error', 'Echec de la mise a jour.');
    }

}
