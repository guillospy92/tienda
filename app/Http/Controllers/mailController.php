<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Mail;
use Redirect;
use Session;
use App\Http\Requests\UserRequestF;
use Auth;

class mailController extends Controller
{

    public function index()
    {

    }

    public function create(){

        return view('store.createuser');
    }

    function store(UserRequestF $request){

        $user = new User($request->all());
        $user->type = 'user';
        $user->active = '1';
        $user->save();
        Auth::loginUsingId($user->id);


            $toEmail=$request['email'];
            Mail::send('emails.register',$request->all(), function ($mail) use ($toEmail)  {
                $mail->subject('registro de la tienda en linea guillospy');
                $mail->to($toEmail);


            });





        return Redirect::to('/');




    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
    }
}
