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


class AuthController extends Controller
{
    public function login_view()
    {

        return view('auth.login');

    }

    public function registre_view()
    {
        return view('auth.registre');
    }

    public function auth_registre(Request $request)
    {
        $name = $request->input('nom');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $password = $request->input('password2');
        $statut = 'deconnecte';

        $vrf = User::where('tel', $request->tel)->Orwhere('email', $request->email)->first();
        if ($vrf) {
            return back()->with('error', 'Cet utilisateur existe déjà.');
        }

        $users = new User();
        $users->name = $name;
        $users->email = $email;
        $users->password = bcrypt($request->password);
        $users->tel = $tel;
        $users->statut = $statut;
        $users->save();

        if ($users) {
            
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                Session::forget('url.intended');

                //Auth::logoutOtherDevices($request->password);

                $user_id = Auth::user()->id;

                $up = User::find($user_id);
                $up->statut = 'en ligne';
                $up->update();

                return redirect()->intended(route('accueil'))->with('success', 'Votre compte a étè crée avec succées.');
            }

        }

        return redirect()->back();
    }

    public function user_new(Request $request)
    {
        $name = $request->input('nom');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $password = $request->input('password2');
        $statut = 'deconnecte';

        $vrf = User::where('tel', $request->tel)->Orwhere('email', $request->email)->first();
        if ($vrf) {
            return back()->with('error', 'Cet utilisateur existe déjà.');
        }

        $users = new User();
        $users->name = $name;
        $users->email = $email;
        $users->password = bcrypt($request->password);
        $users->tel = $tel;
        $users->statut = $statut;
        $users->save();

        return redirect()->back()->with('success', 'Nouveau utilisateur ajouté.');
    }

    public function auth_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            Session::forget('url.intended');

            //Auth::logoutOtherDevices($request->password);
            
            $user_id = Auth::user()->id;

            $up = User::find($user_id);
            $up->statut = 'en ligne';
            $up->update();

            return redirect()->intended(route('accueil'))->with('success', 'Connexion réussi.');
        }

        return redirect()->back()->with('error', 'L\'authentification a échoué. Veuillez vérifier vos informations d\'identification et réessayer.',);
    }

    public function deconnexion(Request $request)
    {
        $up = User::find(Auth::user()->id);
        $up->statut = 'deconnecte';
        $up->update();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('info', 'Vous avez été déconnecté avec succès.');
    }
}
