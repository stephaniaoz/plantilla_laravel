@extends('master')
@section('title_head','Pais')
@section('preview','Listar')
@section('rutamaster')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Basicos</a></li>
<li class="active">Pais</li>
@stop
@section('container')
<div class="box box-info">
        <div class="box-body">
           <div class="row">
               <form action="{{route('pais.index')}}" method="POST">
                 <div class="col-md-6">
                     <label>Nombre</label>
                     <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                     <input type="text" name="pais_nombre" class="form-control" value="" required>
                     </div>
                     <div style="height: 1.5em;"></div>
                 </div>
                 <div class="col-md-6">
                     <label>Código Dane</label>
                     <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                     <input type="number" name="pais_coddane" class="form-control" value="" required>
                     </div>
                     <div style="height: 1.5em;"></div>
                 </div>
                 <div class="col-md-12">
                     <label>Código ISO</label>
                     <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                         <input type="text" name="pais_codiso" class="form-control" value="" required>
                     </div>
                     <div style="height: 1.5em;"></div>
                 </div>
                 <div class="col-md-12"> 
                     <div class="box-footer">
                         <a href="#" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Buscar</a>            
                     </div>
                 </div>
             </form>         
           </div>   
        </div>
        
        <!-- /.box-body -->
     </div>
<div class="box">
    <div class="box-header">
            <a class="btn btn-info pull-right" href="{{route('pais.create')}}">
                <i class="fa fa-globe"></i> Crear nuevo
            </a>
        <div class="nav-item dropdown dropdown-menu-right">
            <a class="nav-link dropdown-toggle btn btn-xs btn-default" href="#" id="tabla-detalle-filtros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestionar filtros</a>
            <div class="dropdown-menu" aria-labelledby="tabla-detalle-filtros">
                <a class="toggle-vis btn btn-xs btn-success" data-column="0">Nombre</a><br>
                <a class="toggle-vis btn btn-xs btn-success" data-column="1">Código Dane</a><br>
                <a class="toggle-vis btn btn-xs btn-success" data-column="2">Código ISO</a><br>
                <a class="toggle-vis btn btn-xs btn-success" data-column="3">Fecha creación</a><br>
                <a class="toggle-vis btn btn-xs btn-success" data-column="4">Fecha modificación</a><br>
            </div>
        </div>        
    </div>
    <div class="box-body">        
        <table id="tabla-detalle" class="table table-bordered table-hover">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Código Dane</th>
                <th>Código ISO</th>
                <th>Fecha creación</th>
                <th>Fecha modificación</th>
                <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paises as $pais)
                    <tr>
                        <td>{{$pais->pais_nombre}}</td>
                        <td>{{$pais->pais_coddane}}</td>
                        <td>{{$pais->pais_codiso}}</td>
                        <td>{{$pais->fecha_creacion}}</td>
                        <td>{{$pais->fecha_modificacion}}</td>
                        <td>
                            <a class="btn btn-primary" href="">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-info" href="">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a class="btn btn-danger" href="">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
