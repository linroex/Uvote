<?php
class CommentsController extends Controller{
    public function addComments(){
        IssuesComments::createComment(Input::get('issue_id'), Input::get('content'), Session::get('user')['id']);
        return Redirect::to('/issue/' . Input::get('issue_id'));
    }
}
