<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;

class sampleAPI extends Controller
{
    //Create a POST API endpoint that accepts 3 parameters: name, email, ip_address.
    function register(Request $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->ip_address = $req->ip_address;
        $result = $user->save();

        return $result ? ["status" => "success"] : ["status" => "fail"];
    }

    /* 
        -Create a GET API endpoint that returns all of the users 
        with name, email, country and city fields.
        -Create a GET API endpoint that returns a user by ID 
        with name, email, country and city fields.
    */

    function fetchMembers($id = null)
    {
        return $id ? Member::find($id) : Member::all();
    }

    /* Just to add a member to 'members' table using Postman*/

    function newMember(Request $req)
    {
        $user = new Member();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->country = $req->country;
        $user->city = $req->city;
        $result = $user->save();

        return $result ? ["status" => "success"] : ["status" => "fail"];
    }
}
