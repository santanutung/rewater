<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Order;

class DashboardController extends Controller
{
   public function index(){
   //      $all_comments = Comment::get()->count();
   //      $newcomments = Comment::where('is_approve', 0)->get()->count();
   //       $users = User::where('role_id',2)->get();
   //      $timezone = date_default_timezone_get();
   //     // return \Carbon\Carbon::today()->subDays(7)->toDateTimeString();
   //      // $one= "The current server timezone is: " . $timezone;
   //      // $two= "<br />" . date('m/d/Y h:i:s a', time());

   //      // $mytime = \Carbon\Carbon::now();
   //      // $three ="<br/>" . $mytime->toDateTimeString();

   //      // return [$one, $two,$mytime, $three];

   //      $Order= Order::all();
   //       \Carbon\Carbon::now()->subDays(1);
   //  //    $Order->where('created_at', '>', \Carbon\Carbon::now()->subDays(1))->sum('grand_total');
   //     return  view('admin.index',compact('newcomments', 'all_comments', 'users', 'Order'));
      return  view('admin.index');
   }
}
