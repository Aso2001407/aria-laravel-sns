<nav class="navbar navbar-expand navbar-dark blue-gradient">
  <a class="navbar-brand" href="/" style="vertical-align: middle;">
    <div style="align: left;margin-top:-12px">
    <a href="/" class="navbar-brand" style="vertical-align: middle;">
      <div style="height: 100%;vertical-align: middle;margin: 0px auto;">
        <div>
          <span class="tool-icon logo"></span>
        </div>
        <div style="margin-top: -42px;margin-bottom: -18px;text-align: center;">
          <span style="font-size: 22px;">World War BattleShip</span>
        </div>
      </div>
    </a>
</div>

  <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li
    @endguest

     @guest
    <li class="nav-item">
       <a class="nav-link" href="{{ route('login') }}">ログイン</a>
    </li>
    @endguest

     @auth
    <li class="nav-item">
       <a class="nav-link" href="{{ route('articles.create') }}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

    @auth
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
           onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
      @csrf
    </form>
    <!--Dropdown-->
    @endauth


  </ul>

</nav>
