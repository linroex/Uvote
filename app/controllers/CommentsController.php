<?php
class CommentsController extends Controller
{

    public function addComments()
    {
        $data = Input::only(['issue_id', 'content']);
        $data['uid'] = Session::get('user')['id'];
        $comment = IssuesComments::create($data);

        return Redirect::to('/issue/' . Input::get('issue_id'));
    }
}
