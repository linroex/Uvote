<?php

class IssuesCategory extends Eloquent{
    protected $table = 'issues_category';
    protected $guarded = ['id'];
    public $primaryKey = 'id';
    public $timestamps = false;

    public static function listCategory(){
        return self::all();
    }
    public static function getCategoryName($id){
        return self::find($id)->name;
    }
    
}