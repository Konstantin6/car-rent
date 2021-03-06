<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UniqueOptionsFormRequest;



class UserInfoController extends Controller
{
    public function index(){
        return view('user.info');
    }
    public function storedInfo(UniqueOptionsFormRequest $request){
        $validatedInput = $request->validated();
        session(['validatedInput' => $validatedInput]);
        return redirect('/user/info/stored');
    }
    public function stored()
    {
        return view('user.stored', ['validatedInput' => session('validatedInput')]);
    }
}

