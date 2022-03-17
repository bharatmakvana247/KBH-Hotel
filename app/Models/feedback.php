<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    
}
/** 
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            @if($message=session::get('sucess'))
            <div class="alert alter-success">
                <p>{{$message}}</p>
            </div>
            @endif
        </div>
        <div>
    */