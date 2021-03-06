<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $social_user = Socialite::driver($provider)->user();
        if ($user = User::where('email', $social_user->email)->first()) {
            return $this->authAndRedirect($user);
        } else {
            $user = User::create([
                'name' =>  $social_user->name,
                'email' => $social_user->email,
                'avatar' => $social_user->avatar
            ]);
            return $this->authAndRedirect($user);
        }
    }

    public function authAndRedirect($user)
    {
        Auth::login($user);
        return redirect()->to('/home#');
    }
}
