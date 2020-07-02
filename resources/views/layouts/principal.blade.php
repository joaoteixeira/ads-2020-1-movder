<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Principal CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      
    <title>@yield('title')</title>
    <body>
    <div class="mx-auto" style="width: 900px;">
    <div class="tela"><!-- TELA INTEIRA -->
      
      <div class="container"><!-- MENU -->
      
          <nav class="navbar fixed-top navbar-dark bg-primary">
          <div class="mx-auto" style="width: 1000px;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary nav2">
            <a class="navbar-brand" href="" alt="Vistorias" class="font-weight-bold">MovDer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html"> <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/vistorias">Vistorias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/movimentos">Movimento Diário</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/itinerarios">Novo Itinerario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Relatórios</a>
                </li>
                                               
                          
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
                         
             </div> 
            </div>
          </nav>
          </div>
     
          <br><br><br>
    </div>
    </div>
  @yield('content')
  

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    
  </body>
</html>
