<!doctype html>
<html class="no-js" lang="">
  <head>
    @include('head',['page_title'=>'首頁'])
  </head>
  <body>
    @include('menu')

    <section class="banner index">
      <div class="background" style="background-image: url({{url('/images/issue-images/c1.jpg')}});"></div>
      <img src="{{url('/images/main-logo.svg')}}">
    </section>

    <!-- <div class="issue_filters_wrapper">
      <div class="issue_filters search-tools">
        <div class="search">
          <label>搜尋議題</label>
          <input type="text">
        </div>
        <div class="sort">
          <label>排序方式</label>
          <div>
            <a>熱門度</a> |
            <a>時間</a> |
            <a>狀態</a>
          </div>
        </div>
        <div class="filter">
          <label>分類篩選</label>
          <div>
            <ol>
              <li>
                <input id="short" type="checkbox">
                <label for="short">食安</label>
              </li>
              <li>
                <input id="long" type="checkbox">
                <label for="long">笑安</label>
              </li>
            </ol>
          </div>
        </div>
        <div class="trigger">
          <button>尋找議題</button>
        </div>
      </div>
    </div> -->

    <section class="main index issue-list">

    <div class="issues">
      @foreach($issues as $issue)
        <section class="issue">
          <a href="{{{url('/issue/'.$issue->id)}}}" style="color:black;">
            <div class="issue-image">
              <div class="img" style="background-image: url(https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png);" alt=""></div>
            </div>
            <h1 class="issue-header">
              {{{$issue->title}}}
            </h1>
            <div class="issue-copy">
              <p>{{{$issue->content}}}</p>
            </div>
          </a>
          <div class="issue-stats">
            <ul style="text-align:center;">
              <li>{{IssuesVote::countVoteNum($issue->id)['agree'] - IssuesVote::countVoteNum($issue->id)['disagree']}}<span>評級</span></li>
              <li>{{IssuesVote::countVoteNum($issue->id)['agree'] + IssuesVote::countVoteNum($issue->id)['disagree']}}<span>人響應</span></li>
              <li>{{IssuesComments::countComments($issue->id)}}<span>個回覆</span></li>
            </ul>
          </div>
        </section>
      @endforeach
      
    </div>


    </section>
    <!-- Start of Foot -->


    @include('script')
</body>
</html>

