<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Jobs extends Model
{
//    use HasUuids;
    use HasFactory;


    protected $fillable = ['name' , 'salary' , 'dept'];
    public $timestamps = false; // to disable timestamp attributes

    //   defualt values for table by model

//    protected $attributes = [
//        'name' => 'job name',
//        'salary'=>'job salary',
//        'dept'=>'job department'
//    ];
}
