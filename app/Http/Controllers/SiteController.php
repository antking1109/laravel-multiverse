<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use DB;
use Mail;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{
    public function index()
    {
    	$images = Image::latest('id')->paginate(12);

    	$settings = [
            'title' => DB::table('settings')->where('key','=','title')->value('value'),
            'favicon' => DB::table('settings')->where('key','=','favicon')->value('value'),
            'des' => DB::table('settings')->where('key','=','des')->value('value'),
            'header_code' => DB::table('settings')->where('key','=','header_code')->value('value'),
            'copyright' => DB::table('settings')->where('key','=','copyright')->value('value'),
            'instagram' => DB::table('settings')->where('key','=','instagram')->value('value'),
            'twitter' => DB::table('settings')->where('key','=','twitter')->value('value'),
            'github' => DB::table('settings')->where('key','=','github')->value('value'),
            'facebook' => DB::table('settings')->where('key','=','facebook')->value('value'),
            'linkedin' => DB::table('settings')->where('key','=','linkedin')->value('value'),
            'mail' => DB::table('settings')->where('key','=','mail')->value('value')
        ];

    	return view('index', ['images' => $images, 'settings' => $settings]);
    }

    public function addFeedback(Request $request)
    {
        $input = $request->all();
        Mail::send('mailfb', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['message']), function($message){
	        $message->to(DB::table('settings')->where('key','=','mail')->value('value'), 'Visitor')->subject('Visitor Feedback!');
	    });

        return back()->with('flash_message','Tin nhắn được gửi thành công!');
    }
}
