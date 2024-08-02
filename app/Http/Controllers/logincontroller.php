<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use App\Services\CustomMailer;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    protected $mailer;


    public function __construct(CustomMailer $mailer)
    {
        $this->mailer = $mailer;
    }
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
            if ($email==="undergraduateshighschoolassign@gmail.com"){
                return redirect()->route('admin');}
           return redirect()->route('Dashboard');
        } 
       
        else {
            // Authentication failed, return an error message
            return redirect()->route('login')->withErrors(['error' => 'Invalid Email or Password!']);
        }
        
       
        
        
    }
    public function signup(Request $request){
        $username=$request->get('name');
        $email=$request->get('email');
        $password=$request->get('password');
        
        $user=new User();
         // Check if the user already exists
    $existingUser = User::where('email', $email)->first();

    if ($existingUser) {
        // Return an error message if the user already exists
        return redirect()->back()->withErrors(['email' => 'The email address is already in use.']);
    }

        $user->name = $username;
        $user->email = $email;
        $user->password = bcrypt($password); 
        $user->save();



      return   redirect()->route('login');
        
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


return view('layouts/pages/confirm');



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
    
    return redirect()->route('confirm')->withErrors(['error' => 'Invalid user!']);
   
}


 }
        else{
            
            
            return redirect()->route('confirm')->withErrors(['error' => 'Inalid code!']);
           
        }
        
       


    }


}





