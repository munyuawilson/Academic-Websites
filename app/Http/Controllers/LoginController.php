<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Services\CustomMailer;
use Illuminate\Support\Facades\Log;
session_start();
class LoginController extends Controller
{

    protected $mailer;


    public function __construct(CustomMailer $mailer)
    {
        $this->mailer = $mailer;
    }
    function login(Request $request){
        $email=$request->get('email');
       
        $password=$request->get('password');
       
       


        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            if ($email=="opessaytutors@gmail.com"){
                return redirect()->route('Dashboard');}
           
        } 
        else{
            return redirect()->route('login')->withErrors(['error' => 'No such user!']);

        }
      
      
        




          
    }
    public function show_name(Request $request){
        
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                ->get();
        $orderCount = $orders->count();
        $paidOrders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('paid', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('paid') // Exclude null values for paid
                    ->get();
        $PaidCount = $paidOrders->count();
        $revisedOrders =Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('revision', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('revision') // Exclude null values for paid
                    ->get();
        $RevisionCount = $revisedOrders->count();       
    
        return view('pages/admin/admin', compact('orderCount','PaidCount','RevisionCount'));
        

            
    }
    public function inProgress(Request $request)
    {
        
        
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
        
        ->get();
        $orderCount = $orders->count();
        return view('pages/admin/progress', compact('orders','orderCount'));
    }

    public function revision(Request $request)
    {
        
        $orders =Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('revision', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('revision') // Exclude null values for paid
                    ->get();
        
        return view('pages/admin/dashrevision', compact( 'orders'));
    }

    public function paid(Request $request)
    { 
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    
                    ->where('paid', true) // Filter for paid orders
                    ->get();
        $orderCount = $orders->count();
        return view('pages/admin/paid', compact( 'orders'));
    }

    public function completed(Request $request)
    {
       
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    
                    ->where('completed', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('completed') // Exclude null values for paid
                    ->get();
        return view('pages/admin/completed', compact( 'orders'));
    }

    public function disputed(Request $request)
    {
        
       
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('disputed', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('disputed') // Exclude null values for paid
                    ->get();
        return view('pages/admin/disputed', compact( 'orders'));
    }

    public function forgotPassword(Request $request){

        $email=$request->get('email');
        $newPassword=$request->get('password');

        //Generate a unique code
      
    function generateRandomCode($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomCode = '';
        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomCode;
    }


     $code=generateRandomCode($length = 6);


    $this->mailer->sendEmail($email, "Forgot Password", $code,['wmunyua4@gmail.com','topessaytutors@gmail.com']);

    /*session(['code' => $code]);
    
    session(['email' => $email]);
    session(['newPassword' => $newPassword]);
    Log::info('Session data in forgotPassword:', session()->all());*/
    session()->put('code',$code);
    session()->put('email',$email);
    session()->put('newPassword',$newPassword);


return view('pages/confirm');



    }


    function confirmCode(Request $request){
        
        $code=$request->get('code');
        $realCode=session('code');
        $password=session('newPassword');
        $email=session('email');
        

        if ($realCode==$code){
            //add to database
             $user = User::where('email', $email)->first();
             
            
    if ($user){

    // Hash the new password
        $user->password = bcrypt($password);
        echo $password;

    // Save the updated user
        $user->save();
        return redirect()->route('login');
}
else{
    
    return redirect()->route('confirm')->withErrors(['error' => 'Invalid code!']);
   
}


 }
        else{
            
            
            return redirect()->route('confirm')->withErrors(['error' => 'No such user!']);
           
        }
        
       


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

