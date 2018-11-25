@extends('master')
@section('title_head','Pais')
@section('preview','Listar')
@section('rutamaster')
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Basicos</a></li>
<li class="active">Pais</li>
@stop
@section('container')
<div class="box">
    <div class="box-header">
        <div class="nav-item dropdown dropdown-menu-right">
            <a class="nav-link dropdown-toggle btn btn-xs btn-default" href="#" id="tabla-detalle-filtros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestionar filtros</a>
            <div class="dropdown-menu" aria-labelledby="tabla-detalle-filtros">
                <a class="toggle-vis btn btn-xs btn-success" data-column="0">Nombre</a><br>
                <a class="toggle-vis btn btn-xs btn-success" data-column="1">Fecha creación</a><br>
                <a class="toggle-vis btn btn-xs btn-success" data-column="2">Fecha modificación</a><br>
            </div>
        </div>
    </div>
    <div class="box-body">        
        <table id="tabla-detalle" class="table table-bordered table-hover">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Fecha creación</th>
                <th>Fecha modificación</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>s</td>
                <td>ss</td>
                <td>sss</td>
                <td>
                    <form method="POST" action="">
                        <a class="btn btn-primary btn-xs" href="">
                        <i class="fa fa-edit"></i>
                        </a>
                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop
