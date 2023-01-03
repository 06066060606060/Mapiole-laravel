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

    public function rent()
    {
        $locations = Location::where('status', '!=', 'Non')->inRandomOrder()->limit('8')->get();
        return view('rent', compact('locations'));
    }

    public function annonce()
    {
        return view('annonce');
    }

    public function buy()
    {
    
        $ventes = Vente::where('status', '!=', 'Non')->inRandomOrder()->limit('8')->get();
        return view('buy' , compact('ventes'));
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
        return view("/");
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
