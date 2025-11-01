<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table ='divisions';

    public $timestamps = false;


    public function subdivisions(){

        return $this->hasMany('App\Models\SubDivision','division_id','id');
    }

    /**
     * Scope a query to only include divisions that belong to the current user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $qry
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMydivs($qry){
        $user = auth()->user();
        $mydivs = $user->getMyDivs(); // $mydivs = [1, 3, 5]

        return $qry->whereIn('id',$mydivs );
    }




}
