<?php

class Issues extends Eloquent{
    protected $table = 'issues';
    protected $guarded = ['id'];
    public $primaryKey = 'id';
    public $timestamps = true;
}
