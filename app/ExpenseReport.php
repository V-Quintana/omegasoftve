<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    protected $fillable = ['name', 'email', 'content', 'blog_id'];

    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
