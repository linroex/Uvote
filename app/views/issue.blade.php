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
      <div class="img" style="background: url(/images/issue-images/c3.jpg);"></div>
      <div class="heat">
        熱度
        <span class="value">{{{$voteNum['disagree']+$voteNum['agree']}}} 人響應</span>
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
      <div class="proposer">提案人：四設計工三 /姚惟華</div>
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
        <div class="picture"><img src="http://placehold.it/500x500"></div>
        <input type="text" class="content" name="content" placeholder="留言">
        <input type="hidden" name="issue_id" value="{{$data->id}}">
        <input type="submit" value="送出" style="float:right;font-size:30px;">
      </form>
    </div>
    
    @foreach($comments as $comment)
      @if($comment->type == 'offical')
        <div class="comment opposite">
          <div class="picture"><img src="http://placehold.it/500x500"></div>
          <div class="content">{{{$comment->content}}}</div>
        </div>
      @else
        <div class="comment">
          <div class="picture"><img src="http://placehold.it/500x500"></div>
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

