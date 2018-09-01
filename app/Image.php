<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['title', 'des', 'url', 'user_id','created_at'];
    protected $guarded =[];

    public function user()
    {
    	return $this->belongsTo('App\User','id');
    }
}
