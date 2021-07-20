<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Exclusif;
use App\User;
use App\Rumah;
use App\Setting;
use App\Pengguna;
use Auth;

class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function login(Request $request)
     {
         $user = User::where('email', $request->email)
             ->where('password', md5($request->password))
             ->first();
         Auth::login($user);
         return redirect('/beranda');
     }



    public function showLoginForm()
    {
        $title = 'Situs Jual Beli Properti, Rumah, Apartemen & Tanah di Indonesia';
        $nav = 'login';
        $jumlah = Rumah::all()->count();
        $settingProduk = Setting::all();
        $rumahku = Rumah::with(['fasilitas', 'DetailRumahModel'])
            ->get()
            ->sortByDesc('id_rumah')
            ->take(6);
        // $ourAgen = Pengguna::with(['agen', 'detailuser'])->get();
        $ourAgen = User::with(['agen', 'detailuser'])->get();
        $ekslusif = Exclusif::with('detailrumah')->get();
        return view('auth.login', compact('title', 'rumahku', 'jumlah', 'nav', 'settingProduk', 'ourAgen', 'ekslusif'));
    }
}
