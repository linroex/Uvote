<?php

class IssuesCategory extends Eloquent{
    protected $table = 'issues_category';
    protected $guarded = ['id'];
    public $primaryKey = 'id';
    public $timestamps = false;
}
