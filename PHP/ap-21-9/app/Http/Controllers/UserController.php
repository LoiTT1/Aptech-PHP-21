<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    public function HienThiTatCaNguoiDung($id)
{
    $users = DB::table('users')->get();
    
       $user = DB::table('users')->where('id', '=', $id)->get();
       return view('users', [])
}

}
