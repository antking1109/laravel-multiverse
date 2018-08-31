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
    public function getAllInAdmin()
    {
    	$getImages = Image::latest('id')->paginate(10);

    	return view('admin.image');
    }
}
