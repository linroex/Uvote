<?php

class IssuesComments extends Eloquent{
    protected $table = 'issues_comments';
    protected $guarded = ['id'];
    public $primaryKey = 'issue_id';
    public $timestamps = true;

    public static function createComment($issue_id, $content, $uid){
        self::create([
            'issue_id'=>$issue_id,
            'content'=>$content,
            'uid'=>$uid
        ]);
    }
    public static function getComments($issue_id){
        return self::whereRaw('issue_id = ?',[$issue_id])->join('users_detail','users_detail.uid','=','issues_comments.uid')->get();
    }
    public static function countComments($issue_id){
        return self::whereRaw('issue_id = ?',[$issue_id])->join('users_detail','users_detail.uid','=','issues_comments.uid')->count();
    }

}
