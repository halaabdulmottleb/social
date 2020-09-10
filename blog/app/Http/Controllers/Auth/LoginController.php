<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\User;
use Illuminate\Http\Request;
use App\Services\SocialAuthService;
use GuzzleHttp\Client;

class LoginController extends Controller { 
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
    /*** Where to redirect users after login. 
    ** @var string 
    */
    protected $redirectTo = '/home';
    /*** Create a new controller instance. 
    * * @return void 
    */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }
   public function handleFacebookCallback() {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
         //   dd($user);
            if ($finduser) {

               Auth::login($finduser);
                return redirect('/');
            } else {
                // dd($user);
                $newUser = User::create(['name' => $user->name, 'email' => $user->email, 'facebook_id' => $user->id , 'profile' =>$user->avatar]);
                Auth::login($newUser);
                  return redirect('/');
            }
        }
        catch(Exception $e) {
            return redirect('auth/facebook');
        }
    }
    // Instgram controller 
  
 public function redirectToInstagramProvider()
{
    Auth::logout();
    $appId = '606342090244329';
    $redirectUri = 'http://localhost:8000/login/instagram/callback';
    return redirect()->to("https://api.instagram.com/oauth/authorize?client_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
}

public function instagramProviderCallback(Request $request)
{
    $code = $request->code;
    if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

    $appId = config('services.instagram.client_id');
    $secret = config('services.instagram.client_secret');
    $redirectUri = config('services.instagram.redirect');
    $client = new Client();

    // Get access token
     $post = [
                 'app_id' => $appId,
                'app_secret' => $secret,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $redirectUri,
                'code' => $code,
    ];    

    $ch = curl_init('https://api.instagram.com/oauth/access_token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);    

    // execute!
    $response = curl_exec($ch);    

    // close the connection, release resources used
    curl_close($ch);    

    // do anything you want with your response
    var_dump($response);

    

    // do your code here
}


    // logout 

    public function logout() {
        Auth::logout();
        return redirect()->back();
    }

} 