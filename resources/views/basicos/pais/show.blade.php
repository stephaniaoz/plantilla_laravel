@extends('master')
@section('title_head','Pais')
@section('preview','Ver')
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
                     <input type="text" name="pais_nombre" class="form-control" value="{{$pais->pais_nombre}}" required>
                     </div>
                     <div style="height: 1.5em;"></div>
                 </div>
                 <div class="col-md-6">
                     <label>Código Dane</label>
                     <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                     <input type="number" name="pais_coddane" class="form-control" value="{{$pais->pais_coddane}}" required>
                     </div>
                     <div style="height: 1.5em;"></div>
                 </div>
                 <div class="col-md-12">
                     <label>Código ISO</label>
                     <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                         <input type="text" name="pais_codiso" class="form-control" value="{{$pais->pais_codiso}}" required>
                     </div>
                     <div style="height: 1.5em;"></div>
                 </div>
                 <div class="col-md-12"> 
                     <div class="box-footer">
                        <a href="{{route('pais.index')}}" class="btn btn-primary pull-right"><i class="fa fa-times"></i> Cancelar</a>            
                        <a href="" class="btn btn-primary pull-right"><i class="fa fa-times"></i> Editar</a>            
                     </div>
                 </div>
             </form>         
           </div>   
        </div>
    </div>
@stop
