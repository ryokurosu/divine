<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Affiliater;
use App\System;
use Illuminate\Support\Facades\Auth;
use App\Mail\OpenMail;
use App\Mail\ManagerMail;
use Mail;
use Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        parent::__construct();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function fx()
    {
        return $this->viewer('fx',['systems' => System::all()]);
    }

    public function delivary()
    {
        return $this->viewer('delivary');
    }

    public function userSetAccount(Request $request){
        \Auth::user()->userSetter('account',$request->account);
        return back();
    }

    public function index(){
        return $this->viewer('home');
    }
    public function news(){
        return $this->viewer('news');
    }
    public function systemdetail($name){
        $comingsoon = [];
        /*
        if system detail or coming soon
         */
        $system = System::where('name',$name)->firstOrFail();
        if(in_array($name, $comingsoon)){
            return $this->viewer('system.comingsoon',['system' => $system]);
        }

        return $this->viewer('system.detail',['system' => $system]);
    }
    public function systemOpenAccount($name){
        $user = Auth::user();
        $systemid = System::where('name',$name)->firstOrFail()->id;
        if(!$user->systems()->where('system_id', $systemid)->exists()){
            Mail::to($user->email)->send(new OpenMail($user));
            Mail::to(Config::get('app.manager_mail'))->send(new ManagerMail($user));
        }
        $user->systems()->sync([$systemid], false);
        return $this->viewer('system.open');
    }
}
