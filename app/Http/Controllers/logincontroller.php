<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(Request $request){
       

        
        $email=$request->get('email');
        session(['user_email' => $email]);
        $password=$request->get('password');
        $user=new User();
        //$userExists = User::where('email', $email)->exists();
        $userExists =$user->where('email', $email)->exists();
        
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
           return redirect()->route('Dashboard');
        } 
        else if ($email==="admin@gmail.com" &&$password==='admin'){
            return redirect()->route('admin');

        }
        else {
            // Authentication failed, return an error message
            return redirect()->route('log-in')->withErrors(['error' => 'Invalid credentials!']);
        }
        
       
        
        
    }
    public function signup(Request $request){
        $username=$request->get('name');
        $email=$request->get('email');
        $password=$request->get('password');
        
        $user=new User();
        
        $user->name = $username;
        $user->email = $email;
        $user->password = bcrypt($password); 
        $user->save();

        redirect().route('log-in');
        
    }
    public function show_name(Request $request){
        $email = session('user_email'); 
        $user = Auth::user();
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                ->where('email', $email)
                ->get();
        $orderCount = $orders->count();
        $paidOrders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('email', $email)
                    ->where('paid', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('paid') // Exclude null values for paid
                    ->get();
        $paidCount = $paidOrders->count();
        $revisedOrders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('email', $email)
                    ->where('revision', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('revision') // Exclude null values for paid
                    ->get();
        $revisedCount = $revisedOrders->count();       
    
        return view('layouts/pages/dashboard', compact('user', 'orderCount','paidCount','revisedCount'));
        

            
    }
    public function inProgress(Request $request)
    {
        $email = session('user_email'); 
        $user = Auth::user();
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
        ->where('email', $email)
        ->get();
        $orderCount = $orders->count();
        return view('layouts.pages.progress', compact('user', 'orders','orderCount'));
    }

    public function revision(Request $request)
    {
        $user = Auth::user();
        $email = session('user_email'); 
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('email', $email)
                    ->where('revision', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('revision') // Exclude null values for paid
                    ->get();
        
        return view('layouts.pages.dashrevision', compact('user', 'orders'));
    }

    public function paid(Request $request)
    { $email = session('user_email'); 
        $user = Auth::user();
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('email', $email)
                    ->where('paid', true) // Filter for paid orders
                    ->get();
        $orderCount = $orders->count();
        return view('layouts.pages.paid', compact('user', 'orders'));
    }

    public function completed(Request $request)
    {
        $user = Auth::user();
        $email = session('user_email'); 
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('email', $email)
                    ->where('completed', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('completed') // Exclude null values for paid
                    ->get();
        return view('layouts.pages.completed', compact('user', 'orders'));
    }

    public function disputed(Request $request)
    {
        $user = Auth::user();
        $email = session('user_email'); 
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('email', $email)
                    ->where('disputed', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('disputed') // Exclude null values for paid
                    ->get();
        return view('layouts.pages.disputed', compact('user', 'orders'));
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}





