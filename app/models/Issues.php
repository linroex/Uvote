<?php

class Issues extends Eloquent{
    protected $table = 'issues';
    protected $guarded = ['id'];
    public $primaryKey = 'id';
    public $timestamps = true;

    public static function createIssue($title, $content, $category, $uid){
        // 新增議題
        return self::create([
            'title'=>$title,
            'content'=>$content,
            'category'=>$category,
            'uid'=>$uid,
            'status'=>1
        ]);
    }
    public static function getIssueData($issue_id){
        // 單項議題資訊
        return self::find($issue_id);
    }
    public static function getIssues($category_id = ''){
        // 取得議題或按分類，分類ID=0代表所有資料
        if($category_id == ''){
            return self::all();
        }else{
            return self::where('category','=',$category_id)->get();
        }

    }
    public static function removeIssue($issue_id){
        // 刪除議題
        return self::find($issue_id)->delete();
    }
    
}