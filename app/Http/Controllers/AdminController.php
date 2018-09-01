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
}
