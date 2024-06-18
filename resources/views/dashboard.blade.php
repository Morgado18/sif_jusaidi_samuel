<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">
                        CT
                    </a>
                    <a href="javascript:void(0)" class="simple-text logo-normal">
                        Bem vindo ADM
                    </a>
                </div>
                <ul class="nav">
                    <li class="active ">
                        <a href="dashboard">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>PAINEL</p>
                        </a>
                    </li>
                    <li>
                        <a href="notificacao">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>NOTIFICAÇÕES</p>
                        </a>
                    </li>
                    <li>
                        <a href="perfil">
                            <i class="tim-icons icon-single-02"></i>
                            <p>PERFIL DE USUÁRIO</p>
                        </a>
                    </li>
                    <li>
                        <a href="lista_de">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>VISÃO COMPLETA</p>
                        </a>
                    </li>
                    <li>
                        <a href="empreendedor">
                            <i class="tim-icons icon-single-02"></i>
                            <p>EMPREENDEDORES</p>
                        </a>
                    </li>
                    <li>
                        <a href="investidor">
                            <i class="tim-icons icon-single-02"></i>
                            <p>INVESTIDORES</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="search-bar input-group">
                                <button class="btn btn-link" id="search-button" data-toggle="modal"
                                    data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                    <span class="d-lg-none d-md-block">PESQUISAR</span>
                                </button>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="notification d-none d-lg-block d-xl-block"></div>
                                    <i class="tim-icons icon-sound-wave"></i>
                                    <p class="d-lg-none">NOTIFICAÇÕES</p>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                    <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">{{ Auth::user()->name }}</div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">...</p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="perfil" class="nav-item dropdown-item">PERFIL</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">DEFINIÇÕES</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Terminar Sessão') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"
                aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="PESQUISAR">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total de Usuários</h5>
                                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{ $usuarios_tot }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <!-- Coloque seu gráfico aqui -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total de Empreendedores</h5>
                                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> {{ $empreendedores_tot }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <!-- Coloque seu gráfico aqui -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total de Investidores</h5>
                                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> {{ $investidores_tot }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <!-- Coloque seu gráfico aqui -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Usuários</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Nome</th>
                                            <th>Email</th>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $usuario)
                                                <tr>
                                                    <td>{{ $usuario->name }}</td>
                                                    <td>{{ $usuario->email }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    {{-- <div class="col-lg-6 col-md-12">
                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Empreendedores</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach($empreendedor as $e)
                                                <tr>
                                                    <td>{{ $e->name }}</td>
                                                    <td>{{ $e->email }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Investidores</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Nome</th>
                                            <th>Email</th>
                                        </thead>
                                        <tbody>
                                            @foreach($investidor as $i)
                                                <tr>
                                                    <td>{{ $i->name }}</td>
                                                    <td>{{ $i->email }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}

            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="nav-item">
                            {{-- <a href="#" class="nav-link">Creative Tim</a> --}}
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="#" class="nav-link">Blog</a> --}}
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function () {
        demo.initDashboardPageCharts();
    });
</script>
</html>
