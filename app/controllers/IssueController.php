<?php
class IssueController extends Controller{
    public function showIssueAddPage(){
        return View::make('new_issue')->with([
            'categorys'=>IssuesCategory::all()
        ]);
    }
    public function addIssue(){
        $issue = new Issues();
        $issue->fill(Input::only(['title', 'content', 'category']))
        $issue->uid = Session::get('user')['id'];
        $issue->save();

        return Redirect::to('/issue/' . $issue['id']);
    }
    public function showSingleIssuePage($issue_id){
        $data = Issues::find($issue_id);
        return View::make('issue')->with([
            'data'=>$data,
            'voteNum'=>IssuesVote::countVoteNum($issue_id),
            'comments'=>IssuesComments::getComments($issue_id),
            'author'=>Users::getUserByUID($data->uid)->name,
            'image'=>UsersDetail::getUserData($data->uid)->avatar

        ]);
    }
    public function voteAgreeIssue($issue_id){
        // 要增加取消投票功能

        IssuesVote::vote($issue_id, 'agree', Session::get('user')['id']);
        return Redirect::to('/issue/' . $issue_id);
    }
    public function voteDisAgreeIssue($issue_id){
        IssuesVote::vote($issue_id, 'disagree', Session::get('user')['id']);
        return Redirect::to('/issue/' . $issue_id);
    }
}
