@extends('layouts.users')

@section('css')

  <link rel='stylesheet' href='/css/foundation.min.css'>
  <link rel="stylesheet" href="/css/jquery.steps.css">
  
  
  <style>
    @media (max-width: 767px){
      .box {overflow: auto;}
    }
    .course_acciones{
      display: flex;
      justify-content: center;
      flex-flow: wrap;
    }
    .course_acciones_item{
      flex: 0 1 auto;
      margin-bottom: 10px;
    }
  </style>
@stop

@section('page_description')
  <h1>
    {{$informacion_pagina['titulo']}}
    <small>{{$informacion_pagina['descripcion']}}</small>
    <a class="" href="{{route('sincronizar_mis_cursos')}}" title="Ver">
      <button class="btn-sm btn-success" style="margin-right: 5px;">
        <i class="voyager-list"></i> Sincronizar mis cursos con el CVCV 
      </button>
  </a>
  </h1>

  
@stop

@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="row">

    @if( !isset($cursosDocente) || $cursosDocente->isEmpty() )
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Notificaciones</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">
                <h4>No tienes cursos disponibles</h4>
                <p>Si estas registrado en un curso en el Campus Virutal UCV y no se muestra aquí, comunícate con el docente de tu curso</p>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    @else
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Mis Cursos con rol Docente</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="cursos-data-table2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Nombre del Curso</th>
                <th>Descripción del Curso</th>
                <th>Acciones</th>
              </tr>
            </thead>
                @foreach($cursosDocente as $curso)
                  <tr>
                    <td><a href="{{env('CVUCV_GET_SITE_URL',setting('site.CVUCV_GET_SITE_URL')).'/course/view.php?id='.$curso->getID()}}" target="_blank"> {{$curso->getNombre()}} </a></td>
                    <td class="course_summary">{!!$curso->getDescripcion()!!}</td>
                    
                    <td class="course_acciones">
                      <a class="course_acciones_item" href="{{ route('curso', ['id' => $curso->getID()]) }}" title="Ver">
                          <button class="btn-sm btn-primary" style="margin-right: 5px;">
                            <i class="voyager-list"></i> Ver 
                          </button>
                      </a>                  
                    </td>
                  </tr>
                @endforeach
                    
            </table>

          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      @endif

      
    </div>
    


  </section>
@stop

@section('javascript')

  <script type="text/javascript"  src="/js/jquery.steps.js"></script>
  <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
  <script>
    $(function (){
      

      $('#cursos-data-table, #cursos-data-table2').DataTable({
        'paging'      : false,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : false,
        'autoWidth'   : false
      })

    });
  </script>


@stop
