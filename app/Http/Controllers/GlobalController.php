<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Infosperso;
use App\Models\User;
use App\Models\Pages;
use App\Models\Emails;
use App\Models\Location;
use App\Models\Vente;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GlobalController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        
        return view('index');
    }


    static function pages()
    {
        $pages = Pages::all();
        return $pages;
    }

    static function blog()
    {
        $blog = Blogs::where('id', 1)->get();
        return $blog;
    }

    static function oneBlog(Request $request)
    {
        $blogo = Blogs::where('id', $request->id)->get();
        return view('oneblog', compact('blogo'));
    }

    static function blogs()
    {
        $blogs = Blogs::where('id', '!=', 1)->get();
        return $blogs;
    }

    static function emails()
    {
        $emails = Emails::all();
        return $emails;
    }

    public function rent(Request $request)
    {
        $lastlocations = Location::where('status', '!=', 'Non')->orderBy('id', 'desc')->limit('2')->get();
        $locations = Location::where('status', '!=', 'Non');
        $q = request()->input('q');
        if ($request->filled('q')) {
            $locations->where('name', 'like', '%' . $q . '%');
            $lastlocations =  $locations->where('name', 'like', '%' . $q . '%')->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('surface')) {
            $surface = $request->surface;
            $locations->where('surface', '<=', $surface);
            $lastlocations =  $locations->where('surface', '<=', $surface)->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('nb_piece')) {
            $nb_piece = $request->nb_piece;
            $locations->where('nb_piece', '<=', $nb_piece);
            $lastlocations =  $locations->where('nb_piece', '<=', $nb_piece)->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('type')) {
            $type = $request->type;
            $locations->where('type', '=', $type);
            $lastlocations =  $locations->where('type', '=', $type)->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('prix')) {

            $prix = $request->prix;
            $locations->where('prix', '<=', $prix);
            $lastlocations =  $locations->where('prix', '<=', $prix)->orderBy('id', 'desc')->limit('2')->get();
        }
        return view('rent', [
            'locations' => $locations->paginate(8),  //a la place d'un get me demande pas pourquoi!
            'q' => $q,
            'lastlocations' => $lastlocations,
        ]);
    }



    public function buy(Request $request)
    {
    
        $lastventes = Vente::where('status', '!=', 'Non')->orderBy('id', 'desc')->limit('2')->get();
        $ventes = Vente::where('status', '!=', 'Non');
        $q = request()->input('q');
        if ($request->filled('q')) {
            $ventes->where('name', 'like', '%' . $q . '%');
            $lastventes = $ventes->where('name', 'like', '%' . $q . '%')->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('surface')) {
            $surface = $request->surface;
            $ventes->where('surface', '<=', $surface);
            $lastventes = $ventes->where('name', 'like', '%' . $q . '%')->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('nb_piece')) {
            $nb_piece = $request->nb_piece;
            $ventes->where('nb_piece', '<=', $nb_piece);
            $lastventes = $ventes->where('name', 'like', '%' . $q . '%')->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('type')) {
            $type = $request->type;
            $ventes->where('type', '=', $type);
            $lastventes = $ventes->where('name', 'like', '%' . $q . '%')->orderBy('id', 'desc')->limit('2')->get();
        }
        if ($request->filled('prix')) {

            $prix = $request->prix;
            $ventes->where('prix', '<=', $prix);
            $lastventes = $ventes->where('name', 'like', '%' . $q . '%')->orderBy('id', 'desc')->limit('2')->get();
        }
        return view('buy', [
            'ventes' => $ventes->paginate(8),  //a la place d'un get me demande pas pourquoi!
            'q' => $q,
            'lastventes' => $lastventes,
        ]);
    }


    
    public function annonce(Request $request)
    {
        $locations = Location::where('status', '!=', 'Non');
        $locations = $locations->where('id', $request->id)->first();
        return view(('annonce_locations'), compact('locations'));
    }

    public function vente(Request $request)
    {
        $ventes = Vente::where('status', '!=', 'Non');
        $ventes = $ventes->where('id', $request->id)->first();
        return view(('annonce_ventes'), compact('ventes'));
    }

    public function build()
    {
        return view('build');
    }

    public function sell()
    {

        return view('sell');
    }

    public function service()
    {
        return view('service');
    }

    public function annonce_verifiee()
    {
        return view('annonce_verifiee');
    }

    public function profil_verifiee()
    {
        return view('profil_verifiee');
    }

    

    static function version()
    {
        $filename = '../public/build/manifest.json';
        // $ver = date('d/m/y H:i', filemtime($filename) + 3600);
        $ver = '1.1.0';
        $version = $ver;
        return $version;
    }

    public function getProfil()
    {
      
    }

   

    public function saveAddress(Request $request)
    {
        if (backpack_auth()->check()) {
            $usermail = backpack_auth()->user()->email;
            $userid = backpack_auth()->user()->id;
            if (Infosperso::where('user_id', $userid)->exists()) {
                Infosperso::where('user_id', $userid)->update([
                    'nom' => $request->lastname,
                    'prenom' => $request->firstname,
                    'adresse' => $request->address,
                    'codepostal' => $request->zip,
                    'ville' => $request->city,
                    
                ]);
                return back();
            } else {
                $infos = new Infosperso();
                $infos->nom = $request->lastname;
                $infos->prenom = $request->firstname;
                $infos->user_id = $request->user_id;
                $infos->adresse = $request->address;
                $infos->codepostal = $request->zip;
                $infos->ville = $request->city;
                $infos->save();
                $infos = Infosperso::where('user_id', $userid)->get();
                return back();
            }
        } else {
            return redirect('/');
        }
    }



    public function deleteUser(Request $id)
    {
        $thisuser = User::where('id', $id)->get();
        $thisuser[0]->delete();
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    static function getUsers()
    {
        //retrive all users
        $users = User::all();
        return $users;
    }

    static function getSessions()
    {
        //retrive all users
        $users_session = Sessions::all();
        return $users_session;
    }

    static function getLegal()
    {
        return view('legal');
    }

    static function getConf()
    {
        return view('confidentialite');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    /**
 * Change session locale
 * @param  Request $request
 * @return Response
 */
public function changeLocale()
{

    \Session::put('locale', 'en');
    return redirect()->back();
}

}
