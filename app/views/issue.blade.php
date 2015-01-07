<!doctype html>
<html class="no-js" lang="">
  <head>
    @include('head',['page_title'=>'檢視提案'])
  </head>
  <body>
    @include('menu')

<section class="main issue">
  <div class="issue">

    <div class="issue_info">

      <a href="http://facebook.com/{{Users::getUserByUID($data->uid)->fbid}}" target="_blank"><div class="img" style="background: url({{$image}});"></div></a>
      <div class="heat">
        <p>
          <span style="float:left;">贊成 {{$voteNum['agree']}} 人</span>
          <span style="float:right;">反對 {{$voteNum['disagree']}} 人</span>
        </p>
        <br>
        @if($voteNum['disagree']+$voteNum['agree'] > 0)
        <div class="progress">
            <div class="bar" style="width: {{{$voteNum['agree']/($voteNum['disagree']+$voteNum['agree'])*100}}}%;"></div>
        </div>
        @endif
      </div>
      <div class="vote">
        <a class="agree" href="{{url('/issue/' . $data->id . '/agree')}}"><img src="/images/agree.svg">贊同提案</a>
        <a class="disagree" href="{{url('/issue/' . $data->id . '/disagree')}}"><img src="/images/disagree.svg">反對提案</a>
      </div>
    </div>
    <div class="issue_content">
      <h2 style="color:#0f5782;">{{{$data->title}}}</h2>
      <div class="proposer">提案人：{{$author}}</div>
      <div class="issue">
        <div class="title">議題內容</div>
        <div class="issue-main-content">
          {{{$data->content}}}
        </div>
      </div>

    </div>

  </div>
  <hr>
  <div class="comments">

    <div class="new_comment">
      <form action="{{url('/issue/' . $data->id . '/comment')}}" method="post">

        <div class="picture"><img src="{{Session::has('user')?UsersDetail::getUserAvatar(Session::get('user')['id']):'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/c47.0.160.160/p160x160/10354686_10150004552801856_220367501106153455_n.jpg?oh=8c14def50e1c6328a13afe614b4e5d89&oe=553FEF49&__gda__=1428867897_ca8b25cac702abc76f6a867ac7f819c7'}}"></div>
        <input type="text" class="content" name="content" placeholder="留言">
        <input type="hidden" name="issue_id" value="{{$data->id}}">
        <input type="submit" value="送出" style="float:right;font-size:30px;">
      </form>
    </div>

    @foreach($comments as $comment)
      @if($comment->type == 'offical')
        <div class="comment opposite">
          <div class="picture"><img src="{{UsersDetail::getUserAvatar($comment->uid)}}"></div>
          <div class="content">{{{$comment->content}}}</div>
        </div>
      @else
        <div class="comment">
          <div class="picture"><img src="{{UsersDetail::getUserAvatar($comment->uid)}}"></div>
          <div class="content">{{{$comment->content}}}</div>
        </div>
      @endif
    @endforeach

  </div>
</section>
<!-- Start of Foot -->
    @include('script')
</body>
</html>


