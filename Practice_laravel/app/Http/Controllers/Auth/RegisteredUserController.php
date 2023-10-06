<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ocupation' => ['required', 'string','max:255' ],
            'Dob' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([  //////// akhane jehetu User model ar sathe create method take call kore amader database ar users table ar moddhe data save kora hoyeche tai amader User model ar moddhe giye fillable array ar moddhe giye amader akhan theke amader users table ar jei koita column ar moddhe amra amader data save korchi oi koita column amader User model ar moddhe fillable array ar moddhe likhe dite hobe jodi amai oikhane kono column ar nam na likhi tahole amra aikhane jei koita column ar moddhe data save korchi ai koita column ar theke jodi akta colunm ar nam likhi amader User model ar  fillable array ar moddhe tahole amra dekhte pabo amader User model jei users table take represent kore oi table ar moddhe amader sob column ar value add hobe kintu amra jei column ar num ta oikhane na likhbo oi column ar value ta amader database aaa add hobe na akhan theke oi column aa data pass korle oooo...tai amader sob somoy mone rakhte hobe jodi ami aivabe model take call kore create method() thake call kore amader database ar table ar column ar moddhe ai vabe data pathai tahole amader oi model ar moddhe giye fillable array ar moddhe giye amader ai column ar na gulo sob oikhane likhe dite hobe tahole amra aikhan theke jei column ar moddhe data pathabo oi datagulo amader database ar oi column ar moddhe datagulo set hoy jabe. 
            'name' => $request->name,
            'user_ocupation' => $request->ocupation,
            'dob' => $request->Dob,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
