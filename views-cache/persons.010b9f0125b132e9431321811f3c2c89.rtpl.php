<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Revisão Veicular</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="res/site/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="res/site/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="res/site/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="res/site/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="res/site/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="res/site/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="res/site/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="res/site/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="res/site/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="res/site/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/car-revision/" class="nav-link">Home</a>
        </li>
      </ul>
      <!-- SEARCH FORM -->
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/car-revision/" class="brand-link" style="text-align: center;">
        <!-- <i class="nav-icon fas fa-users"></i> -->
        <span class="brand-text font-weight-light"><strong>Revisão de Veículos</strong><span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/car-revision/persons" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Clientes
                  <i class="fas right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="/car-revision/vehicles" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>
                    Veículos
                    <i class="fas right"></i>
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/car-revision/revisions" class="nav-link">
                  <i class="nav-icon fas fa-wrench"></i>
                  <p>
                    Revisões
                    <i class="fas right"></i>
                  </p>
                </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Clientes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/car-revision/">Home</a></li>
                <li class="breadcrumb-item active">Clientes</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#modal-default">
                  <i class="fas fa-plus"></i>
                  Novo Cliente
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info"  style="text-align: center;">
                  <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nome: activate to sort column ascending">Nome</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Gênero: activate to sort column ascending">Gênero</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Telefone: activate to sort column ascending">Telefone</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Aniversário: activate to sort column ascending">Aniversário</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Data Registro: activate to sort column ascending">Data Registro</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Data Registro: activate to sort column ascending">Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $counter1=-1;  if( isset($persons) && ( is_array($persons) || $persons instanceof Traversable ) && sizeof($persons) ) foreach( $persons as $key1 => $value1 ){ $counter1++; ?>

                    <tr role="row" class="odd">
                      <td class="sorting_1"><?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                      <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                      <td><?php if( $value1["gender"] == 'M' ){ ?>Masculino<?php }else{ ?>Feminino<?php } ?></td>
                      <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                      <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                      <td><?php echo htmlspecialchars( $value1["dtbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                      <td><?php echo htmlspecialchars( $value1["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                      <td style="text-align: center;">
                        <a id="edit" class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#modal-info<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                          <i class="fas fa-pencil-alt"></i>
                          Editar
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-danger<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                          <i class="fas fa-trash"></i>
                          Excluir
                        </a>
                      </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                  <tfoot>
                    <tr>
                      <th rowspan="1" colspan="1">ID</th>
                      <th rowspan="1" colspan="1">Nome</th>
                      <th rowspan="1" colspan="1">Gênero</th>
                      <th rowspan="1" colspan="1">Email</th>
                      <th rowspan="1" colspan="1">Telefone</th>
                      <th rowspan="1" colspan="1">Aniversário</th>
                      <th rowspan="1" colspan="1">Data Registro</th>
                      <th rowspan="1" colspan="1">Ações</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.co l -->
  </div>
  <!-- /.row -->    
  <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <form role="form" action="/car-revision/persons/create" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Cadastro de clientes</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <label>Nome</label>      
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input id="desperson" name="desperson" type="text" class="form-control">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio">
                        <input name="gender" class="custom-control-input" type="radio" id="customRadio1" name="customRadio" value="m">
                      <label for="customRadio1" class="custom-control-label">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input name="gender" class="custom-control-input" type="radio" id="customRadio2" name="customRadio" value="f">
                      <label for="customRadio2" class="custom-control-label">Feminino</label>
                    </div>
                  </div>
              <div class="form-group">
                  <label>Email</label>      
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-envelope"></i></span>
                    </div>
                    <input id="desemail" name="desemail" type="text" class="form-control">
                  </div>
                  <!-- /.input group -->
                </div>
              <div class="form-group">
                  <label>Data de nascimento</label>      
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input id="dtbirth" name="dtbirth" type="text" class="form-control datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>Telefone</label>        
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input id="nrphone" name="nrphone" type="text" class="form-control phonemask" data-inputmask="'mask': '(99) 99999-9999'" data-mask="" im-insert="true">
                    </div>
                    <!-- /.input group -->
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <?php $counter1=-1;  if( isset($persons) && ( is_array($persons) || $persons instanceof Traversable ) && sizeof($persons) ) foreach( $persons as $key1 => $value1 ){ $counter1++; ?>

  <div class="modal fade" id="modal-info<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
        <form role="form" action="/car-revision/persons/update/<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">Atualização de clientes</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <label>Nome</label>      
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input name="desperson" type="text" class="form-control" value="<?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio">
                        <input name="gender" class="custom-control-input" type="radio" id="customRadio3" name="customRadio" value="m" <?php if( $value1["gender"] == 'M' ){ ?>checked<?php } ?>>
                      <label for="customRadio3" class="custom-control-label">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input name="gender" class="custom-control-input" type="radio" id="customRadio4" name="customRadio" value="f" <?php if( $value1["gender"] == 'F' ){ ?>checked<?php } ?>>
                      <label for="customRadio4" class="custom-control-label">Feminino</label>
                    </div>
                  </div>
              <div class="form-group">
                  <label>Email</label>      
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-envelope"></i></span>
                    </div>
                    <input name="desemail" type="text" class="form-control" value="<?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>
                </div>
              <div class="form-group">
                  <label>Data de nascimento</label>      
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input name="dtbirth" type="text" class="form-control datemask" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" value="<?php echo htmlspecialchars( $value1["dtbirth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>
                </div>
                <div class="form-group">
                    <label>Telefone</label>        
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input name="nrphone" type="text" class="form-control phonemask" data-inputmask="'mask': '(99) 99999-9999'" data-mask="" im-insert="true" value="<?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-outline-light">Salvar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="modal fade show" id="modal-danger<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="display: none; padding-right: 14px;" aria-modal="true">
        <div class="modal-dialog">
            <form role="form" action="/car-revision/persons/delete/<?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Remover cliente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <span style="display: none;"><?php echo htmlspecialchars( $value1["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
              <p>Deseja realmente remover essa entrada?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-outline-light">Sim</button>
            </div>
          </div>
          </form>
        </div>
      </div>
      <?php } ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->