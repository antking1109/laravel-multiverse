<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image,Auth;
use App\Http\Requests\AddImageRequest;
use App\Http\Requests\EditImageRequest;
use Illuminate\Validation\Rule;
use DB;
class ImageController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }
    public function getAllInAdmin()
    {
    	$getImages = Image::latest('id')->paginate(10);

    	return view('admin.image',['images' => $getImages]);
    }

    public function getAddImage()
    {
    	return view('admin.add-image');
    }

    public function postAddImage(AddImageRequest $rq)
    {
    	$image = new Image();
    	$image->title = $rq->txtTitle;
    	$image->des = $rq->txtDes;
    	$file = $rq->fileUpload;
		$fileName = rand(111111111,999999999). "-" . $file->getClientOriginalName();
		$file->move('uploads', $fileName);
		$image->url = "uploads/" . $fileName;
    	$image->user_id = Auth::id();
    	$image->save();
        return redirect()->route('add-image')->with('success','Bạn đã thêm thành công!')->withInput();
    }

    public function getEditImage($id)
    {
    	$image = Image::where('id', $id)->first()->toArray();
    	return view('admin.edit-image',['image' => $image]);
    }

    public function postEditImage(EditImageRequest $rq,$id)
    {
    	$image = Image::where('id', $id)->first();
    	$image->title = $rq->txtTitle;
    	$image->des = $rq->txtDes;
    	$image->save();
    	return redirect('admin/image/edit/'.$image->id)->with('success','Bạn đã sửa thành công!');
    }

    public function deleteImage($id)
    {
    	Image::find($id)->delete();
      	return back()->with('deldone',"Bạn đã xóa thành công!");
    }
}
