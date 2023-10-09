<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\State;
use App\Models\UserImage;
use Spatie\Permission\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $role = Role::get();
        $state = State::get();
        return view('auth.register',compact('state','role'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'state'=> $request->state,
            'city'=> $request->city,
            'contact_number'=> $request->contact_number,
            'postcode'=> $request->postcode,
            'password' => Hash::make($request->password),
            'hobbies'=> implode(", ", $request->hobbies),
            'gender' => $request->gender
        ]);

        $user->assignRole($request->role);
        if($request->files) {
            $images = [];

            foreach($request->file('files') as $file) {
                $namewithextension = $file->getClientOriginalName();
                $name = explode('.', $namewithextension)[0]; 
                $imageName = $name.'_'.time().'.'.$file->extension(); 
                
                $images[] = [ 
                    'user_id' => $user->id,
                    'image' => $imageName,
                ];

                $file->move(storage_path('app/public'), $imageName);
            }

            UserImage::insert($images);
        }

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
