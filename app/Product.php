<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{



    public function categorie(){
        return $this->BelongsTo('App\Category');
    }

    public function order_item(){

        return $this->hasOne('App\OrderItem');
    }

    protected $table = 'products';
    protected $fillable = ['name', 'slug','description' ,'extract','price','path','visible','category_id'];


    public function setPathAttribute($path){

        if(!empty($path)){
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));

        }

    }
}
