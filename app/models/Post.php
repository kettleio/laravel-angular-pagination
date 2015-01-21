<?php

class Post extends Eloquent  {  
    protected $fillable = ['title', 'content'];
    protected $table = 'posts';
    protected $hidden = array();
}