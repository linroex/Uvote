<header class="navigation">
  <div class="navigation-wrapper">
    <a href="{{url()}}" class="title">
      <img src="{{url('/images/logo.svg')}}" alt="Logo image">
      <h2>前所未見的</h2>
      <h1>校園公投平台</h1>
    </a>
    <a href="" class="navigation-menu-button">MENU</a>
    <ul class="navigation-menu">
      <li class="nav-link"><a href="{{url('/legal')}}">使用條款</a></li>
      <!-- <li class="nav-link more"><a href="javascript:void(0)">更多議題</a>
        <ul class="submenu">
          <li><a href="javascript:void(0)">分類1</a></li>
          <li><a href="javascript:void(0)">分類2</a></li>
          <li><a href="javascript:void(0)">分類3</a></li>
          </li>
        </ul>
      </li> -->
      @if(Session::get('user_status') == True)
        <li class="nav-link"><a class="sign-up" href="{{url('/issue/add')}}">我要提案</a></li>
      @else
        <li class="nav-link"><a class="sign-up" href="{{url(Session::has('user')?'/admin':'/login')}}">{{Session::has('user')?'尚未驗證':'登入會員'}}</a></li>
      @endif
    </ul>
  </div>
</header>

