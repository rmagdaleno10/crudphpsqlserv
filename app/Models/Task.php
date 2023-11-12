<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
    public $title;
    public $description;
    public $status;

    public function __construct() {

    }*/

    protected $table = 'tasks';
    protected $fillable = ['title','description','status'];
}