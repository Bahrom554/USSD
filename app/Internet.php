<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    protected $fillable=[
        'name','cost','time','opening','clear','body','status'
    ];
    public function changeCategory($category, $chcategory){

        $internets=$this->where('category',$category)->get();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }


}
