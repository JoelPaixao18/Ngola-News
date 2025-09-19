<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    //
    /*  public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = User::updateOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name'     => $socialUser->getName(),
                    'password' => bcrypt(str()->random(16)), // senha aleatória
                ]
            );

            Auth::login($user);

            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Falha ao autenticar com ' . ucfirst($provider));
        }
    } */

    // Redireciona pro Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
        /* $url = Socialite::driver('google')->redirect()->getTargetUrl();
        dd($url); */
        /* return redirect($url); */
    }

    // Callback do Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Procura ou cria usuário
            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => bcrypt(uniqid()), // senha fake, pq vai logar só com Google
                ]
            );

            Auth::login($user);

            return redirect()->route('admin.dashboard'); // ajusta para tua rota de dashboard
        } catch (Exception $e) {
            return redirect('/login')->withErrors(['msg' => 'Falha ao autenticar com Google.']);
        }
    }
}
