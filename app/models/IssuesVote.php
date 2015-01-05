<?php

class IssuesVote extends Eloquent{
    protected $table = 'issues_vote';
    protected $guarded = ['id'];
    public $primaryKey = 'issue_id';
    public $timestamps = true;

    public static function vote($issue_id, $type, $uid){
        if (self::whereRaw('uid = ? and issue_id = ?',[$uid, $issue_id])->count() < 1){
            return self::create([
                'issue_id'=>$issue_id,
                'type'=>$type,
                'uid'=>$uid
            ]);
        }else{
            // 已經投出贊成票，卻又想投反對票的情況
            self::unvote($issue_id, $uid);
            return self::create([
                'issue_id'=>$issue_id,
                'type'=>$type,
                'uid'=>$uid
            ]);
        }
    }

    public static function unvote($issue_id, $uid){
        return self::whereRaw('issue_id = ? and uid = ?',[$issue_id, $uid])->delete();
    }
    public static function countVoteNum($issue_id){
        return [
            'agree'=>self::whereRaw('type = ? and issue_id = ?',['agree', $issue_id])->count(),
            'disagree'=>self::whereRaw('type = ? and issue_id = ?',['disagree', $issue_id])->count()
        ];
    }


}