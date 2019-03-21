<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'events';
    protected $fillable = ['title','start_date','end_date'];
}
