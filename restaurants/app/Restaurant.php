<?php

namespace App;

use App\Http\Controllers\RestaurantController;
use Illuminate\Database\Eloquent\Model;


class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = [
                            'name',
                            'address',
                            'zipCode' ,
                            'town' ,
                            'country' ,
                            'description' ,
                            'review'
                            ];
    protected $guarded = []; 
    public $timestamps = false;
    

}
