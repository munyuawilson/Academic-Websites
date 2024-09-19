<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        

        $email=$request->get('email');
        session(['user_email' => $email]);
        $password=$request->get('password');
        $user=new User();
        //$userExists = User::where('email', $email)->exists();
        $userExists =$user->where('email', $email)->exists();
        
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            if ($email==="undergraduateshighschoolassign@gmail.com"){
                return redirect()->route('admin');}
           return redirect('dashboard');
        } 
       
        else {
            // Authentication failed, return an error message
            return redirect('/login')->withErrors(['error' => 'Invalid Email or Password!']);
        }
    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validation = $request->validate([
            'name'=>['required','string'],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
        ]);
        
        $user = new User();
        $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password')); // Hash the password for security
    $user->save();

    return view('pages.login', ['user'=> $user]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::all(); // Retrieve all users
        return response()->json($users); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
