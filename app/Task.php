<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected  $fillable =[
        'name'
    ];
//
//    public function link(){
//        if(!$this->slug){
//            $this->slug = $this->name;
//            $this->save();
//        }
//        return \URL::to('tasks/'.$this->slug);
//    }
//
//    public function setSlugAttribute($string){
//        $slug = str_slug($string);
//        while(self::whereSlug($slug)->count()){
//            $slug = strtolower(str_random(6))."-".$slug;
//        }
//        $this->attributes['slug'] = $slug;
//    }
}

