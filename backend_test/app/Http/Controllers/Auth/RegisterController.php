<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the registration data
        $this->validator($request->all())->validate();

        // Create user
        $user = $this->create($request->all());

        // Send Thank You email
        Mail::to($user->email)->send(new SendEmail($user->name));

        // Optional: Log the user in
        // Auth::login($user);
        session(['name' => $user->name]);
        return redirect()->route('thank.you');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telephone' => ['required', 'numeric', 'min:11'],
            'add1' => ['required', 'string', 'max:255'],
            'add2' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'numeric'],
            'user' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'add1' => $data['add1'],
            'add2' => $data['add2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'username' => $data['user'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showThankYou()
    {
        return view('auth.thankyou');
    }
}
