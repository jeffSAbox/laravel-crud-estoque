<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    {{Html::style('css/app.css')}}
    {{Html::style('css/custom.css')}}
    {{Html::script('js/jquery-3.3.1.min.js')}}
    {{Html::script('js/custom.js')}}
    <title>Controle de estoque</title>
</head>
<body>
  <div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{@action('ProdutoController@cadastrar')}}">Novo</a></li>
        <li><a href="{{@action('ProdutoController@listar')}}">Listagem</a></li>
        <li><a href="{{@action('ProdutoController@baixarWallpaper')}}">Wallpaper</a></li>
        <li>
          @if(false and Auth::guest())
          <a href="{{@action('LoginController@login')}}">Logar</a>
          @else
          <a href="{{@action('LoginController@logout')}}">Logout</a>
          @endif
        </li>
      </ul>

    </div>
  </nav>
  @if( !empty(session('msg.msg')) )
  <div class="alert {{session('msg.class')}}">
    {{session('msg.msg')}}
  </div>
  @endif

    @yield('conteudo')

  <footer class="footer">
      <p>© Livro de Laravel do Alura.</p>
  </footer>

  </div>
</body>
</html>