<?php
class UserController extends Controller{
    public function register(){
        $token = Session::get('fb_token');
        Facebook::setAccessToken($token);

        if(strpos(Input::get('email_edu'), '@mail.ntust.edu.tw') === false){
            return Redirect::to('/register')->with('msg','此服務限國立台灣科技大學 學生使用');
        }
        DB::transaction(function(){
            $user = Facebook::object('/me')->get();
            $uid = Users::createUser($user['name'],$user['id']);
            $avatar = Facebook::object('/me/picture?redirect=false&width=500')->get()['url'];

            if(!isset($user['email'])){
                $user['email'] = $user['id'] . '@facebook.com';
            }

            UsersDetail::createUserData($uid, $avatar, 'student', $user['email'], Input::get('email_edu'), Input::get('department'));
        });

        $user = Facebook::object('/me')->get();
        $data = Users::getUser($user['id']);
        Session::put('user',$data);

        return Redirect::to('/verifiy/generate')->with('email_edu',Input::get('email_edu'));
    }

    public function sendVerifiyEmail(){
        $token = UserVerifiy::createToken(Session::get('user')->id);
        $check = strpos(Session::get('email_edu'), '@mail.ntust.edu.tw');

        if($check === false){
            return '此服務限國立台灣科技大學 學生使用';
        }else{
            Mail::send('emails.verifiy',['token'=>$token], function($message){
                $message->to(Session::get('email_edu'));
                $message->subject('Uvote 校園公投平台 身分驗證信');
            });
            return Redirect::to('/')->with('msg','註冊成功，請到信箱收取驗證信');
        }

    }
    public function Verifiy(){
        $resp = UserVerifiy::checkToken(Input::get('token'));

        if($resp === False){
            return App::abort(404);
        }else{
            UsersDetail::enableUser($resp);
            $data = Users::getUserByUID($resp);
            $status = UsersDetail::getUserStatus($resp);
            Session::put('user',$data);
            Session::put('user_status',$status);
            return Redirect::to('/')->with('msg','驗證成功');
        }

    }
}