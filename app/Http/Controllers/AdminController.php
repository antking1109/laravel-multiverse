<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,App\User;
use App\Http\Requests\EditAccountRequest;
use Illuminate\Validation\Rule;
use Hash;
class AdminController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('admin');
    }
    public function index()
    {
    	$countImage = DB::table('images')->count();
    	return view('dashboard')->with('count', $countImage);
    }

    public function getUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.my-account',['user' => $user]);
    }

    public function postUser($id, EditAccountRequest $request)
    {
        if($request->hasFile('fileUpload')){
            $file = $request->fileUpload;
            $fileName = rand(111111111,999999999) . "-" . $file->getClientOriginalName();
            $file->move('uploads/avt', $fileName);
            $avatar = "uploads/avt/" . $fileName;
            DB::table('users')->where('id',$id)->update(['avatar' => $avatar]);
        }

        if ($request->has('txtName')) {
            DB::table('users')->where('id',$id)->update(['name' => $request->txtName]);
        }

        if ($request->has('txtEmail')) {
            DB::table('users')->where('id',$id)->update(['email' => $request->txtEmail]);
        }

        if ($request->has('txtPass')) {
            $password = Hash::make($request->txtPass);
            DB::table('users')->where('id',$id)->update(['password' => $password]);
        }

        return redirect('admin/user/'.$id)->with('success','Bạn đã sửa thành công!')->withInput();
    }

    public function getSetting()
    {
        $setting = [
            'title' => DB::table('settings')->where('key','=','title')->value('value'),
            'favicon' => DB::table('settings')->where('key','=','favicon')->value('value'),
            'des' => DB::table('settings')->where('key','=','des')->value('value'),
            'header_code' => DB::table('settings')->where('key','=','header_code')->value('value'),
            'copyright' => DB::table('settings')->where('key','=','copyright')->value('value'),
            'instagram' => DB::table('settings')->where('key','=','instagram')->value('value'),
            'twitter' => DB::table('settings')->where('key','=','twitter')->value('value'),
            'github' => DB::table('settings')->where('key','=','github')->value('value'),
            'facebook' => DB::table('settings')->where('key','=','facebook')->value('value'),
            'linkedin' => DB::table('settings')->where('key','=','linkedin')->value('value')
        ];
        return view('admin.setting')->with('setting',$setting);
    }

    function postSetting(Request $request)
    {
        if($request->hasFile('fileUpload')){
            $file = $request->fileUpload;
            $fileName = rand(111111111,999999999) . "-" . $file->getClientOriginalName();
            $file->move('uploads/img', $fileName);
            $favicon = "uploads/img/" . $fileName;
            DB::table('settings')->where('key','favicon')->update(['value' => $favicon]);
        }

        if ($request->has('txtTitle')) {
            DB::table('settings')->where('key','title')->update(['value' => $request->txtTitle]);
        }
        if ($request->has('txtDes')) {
            DB::table('settings')->where('key','des')->update(['value' => $request->txtDes]);
        }
        if ($request->has('txtHear')) {
            DB::table('settings')->where('key','header_code')->update(['value' => $request->txtHear]);
        }
        if ($request->has('txtCopyright')) {
            DB::table('settings')->where('key','copyright')->update(['value' => $request->txtCopyright]);
        }
        if ($request->has('txtInstagram')) {
            DB::table('settings')->where('key','instagram')->update(['value' => $request->txtInstagram]);
        }
        if ($request->has('txtTwitter')) {
            DB::table('settings')->where('key','twitter')->update(['value' => $request->txtTwitter]);
        }
        if ($request->has('txtGithub')) {
            DB::table('settings')->where('key','github')->update(['value' => $request->txtGithub]);
        }
        if ($request->has('txtFacebook')) {
            DB::table('settings')->where('key','facebook')->update(['value' => $request->txtFacebook]);
        }
        if ($request->has('txtLinkedIn')) {
            DB::table('settings')->where('key','linkedin')->update(['value' => $request->txtLinkedIn]);
        }
        return redirect('admin/setting')->with('success','Bạn đã sửa thành công!')->withInput();
    }
}
