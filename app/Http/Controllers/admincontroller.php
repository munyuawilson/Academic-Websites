<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function show_name(Request $request){
        
        $orders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                ->get();
        $orderCount = $orders->count();
        $paidOrders = Order::select('id as order_id', 'subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('paid', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('paid') // Exclude null values for paid
                    ->get();
        $paidCount = $paidOrders->count();
        $revisedOrders =Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('revision', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('revision') // Exclude null values for paid
                    ->get();
        $revisedCount = $revisedOrders->count();       
    
        return view('layouts/pages/admin', compact('orderCount','paidCount','revisedCount'));
        

            
    }
    public function inProgress(Request $request)
    {
        
        
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
        
        ->get();
        $orderCount = $orders->count();
        return view('layouts/pages/admin/progress', compact('orders','orderCount'));
    }

    public function revision(Request $request)
    {
        
        $orders =Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('revision', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('revision') // Exclude null values for paid
                    ->get();
        
        return view('layouts/pages/admin/dashrevision', compact( 'orders'));
    }

    public function paid(Request $request)
    { 
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    
                    ->where('paid', true) // Filter for paid orders
                    ->get();
        $orderCount = $orders->count();
        return view('layouts/pages/admin/paid', compact( 'orders'));
    }

    public function completed(Request $request)
    {
       
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    
                    ->where('completed', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('completed') // Exclude null values for paid
                    ->get();
        return view('layouts/pages/admin/completed', compact( 'orders'));
    }

    public function disputed(Request $request)
    {
        $user = Auth::user();
       
        $orders = Order::select('id as order_id', 'email','phone','instructions','academic_level','subject_id', 'topic', 'pages', 'total_price as budget', 'urgency_id as duration')
                    ->where('disputed', true) // Filter for orders where paid is explicitly true
                    ->whereNotNull('disputed') // Exclude null values for paid
                    ->get();
        return view('layouts/pages/admin/disputed', compact( 'orders'));
    }
}
