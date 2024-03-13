<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = new Member();
        
       
        foreach ($members as $member) {

        }
            
        return view("member");
    }


}
