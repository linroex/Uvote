<?php

class Issues extends Eloquent{
    protected $table = 'issues';

    protected $fillable = ['id'];

    protected $attributes = [ 'status' => 1 ];
}
