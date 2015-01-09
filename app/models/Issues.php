<?php

class Issues extends Eloquent{
    protected $table = 'issues';
    protected $guarded = ['id'];
    protected $attributes = [ 'status' => 1 ];
    public $primaryKey = 'id';
    public $timestamps = true;
}
