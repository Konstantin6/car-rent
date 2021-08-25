<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;



class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
       
       
        return view('pages/contact');

        
    }
public function storeContactInfo(ContactUsRequest $request)
{
    
    $contactUsRequest = $request->validated();

      
       
          return redirect(route('contactUs.show'))->with('message' ,'The message was sent sucessfully');
    }
}