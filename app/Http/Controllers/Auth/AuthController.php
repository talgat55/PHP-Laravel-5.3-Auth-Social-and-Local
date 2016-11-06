<?php

namespace App\Http\Controllers\Auth; 
use Validator;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
class AuthController extends Controller
{
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function handleLinkedinCallback()
    {
        try 
        {
            $user = Socialite::driver('linkedin')->user();
            return view('dashboard')->with('user',$user);
          
        } 
        catch (Exception $e) 
        {
            return redirect()->route('authlinkedin');
        }
    }

    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function handleTwitterCallback()
    {
        try 
        {
            $user = Socialite::driver('twitter')->user();
            return view('dashboard')->with('user',$user);
        } 
        catch (Exception $e) 
        {
            return redirect()->route('authtwitter');
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try 
        {
            $user = Socialite::driver('google')->user();
            return view('dashboard')->with('user',$user);
        } 
        catch (Exception $e) 
        {
            return redirect()->route('authgoogle');
        }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try 
        {
            $user = Socialite::driver('facebook')->user();
            return view('dashboard')->with('user',$user);
        } 
        catch (Exception $e) 
        {
            return redirect()->route('authfacebook');
        }
    }
}
