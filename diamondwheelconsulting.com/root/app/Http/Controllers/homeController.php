<?php

namespace App\Http\Controllers;

use App\Models\Docums;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Trends;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;


class homeController extends Controller
{
    public function redirect()
    {
        if(Auth::id()){
            if(Auth::user()->usertype== 1){
                return view('admin.home');
            }else{
                return view('user.home'); 
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('user.home');
    }

    public function aboutcom()
    {
        return view('user.aboutCom');
    }
    public function abouteam()
    {
        return view('user.aboutTeam');
    }

    public function aboutvis()
    {
        return view('user.aboutVis');
    }

    public function contact()
    {
        return view('user.contact');

    }

    public function contactPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'subject' => 'required',
                        'comment' => 'required'
                ]);

        Mail::send('email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment') ],
                function ($message) {
                        $message->from('jn.odoi@perigeeinsights.io');
                        $message->to('niiodoi2@gmail.com', 'Diamond')
                        ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }





    public function newsdetails(Request $request)
    {

        $trend = Trends::where('title', $request->query()["title"])->first();
        $trends = Trends::get();

        return view('user.details', ['trend' => $trend, 'trends' => $trends]);
    }

    public function news()
    {
        $trend = trends::get();
        $docs = Docums::get();
        return view('user.news',['trend' => $trend, 'docs' => $docs]);
    }

    public function service()
    {
        return view('user.services');
    }
    
    public function portdetails1()
    {
        return view('user.details1');
    }

    public function portdetails2()
    {
        return view('user.details2');
    }

    public function portdetails3()
    {
        return view('user.details3');
    }
    public function mission()
    {
        return view('user.aboutMis');
    }
    public function values()
    {
        return view('user.aboutValues');
    }
    public function boardofD()
    {
        return view('BoD.index');
    }
    public function richard()
    {
        return view('BoD.boateng');
    }
    public function samuel(){
        return view('BoD.quarhie');
    }
    public function boardAdv(){
        return view('board-adv.index');
    }
    public function dobea(){
        return view('board-adv.adobea');
    }
    public function rodney(){
        return view('board-adv.oddoye');
    }
    public function sammy(){
        return view('board-adv.takyi');
    }
    public function martina(){
        return view('board-adv.martina');
    }
    
    

}
