<?php

namespace App\Http\Controllers;
use App\User; 
use App\Phone;
Use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
        
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success]); 
    }
    public function login()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success],); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user],); 
    } 


    public function addUserPhone()
    {
        $user = new User;
        $user->name = "Wayuni";
        $user->email = "wayuni@gmail.com";
        $user->email_verified_at = '0';
        $user->password = bcrypt(00000000);
        $user->rememberToken = '0';
        $user->save();

        $phone = new Phone;
        $phone->phone = '017876544';
        $user->phone()->save($phone);
        return "Record has been created successfully";
    }
    
    public function fetchPhoneByUser()
    {
        $phone = User::find(29)->phone;
        return $phone;
    }


    
}
