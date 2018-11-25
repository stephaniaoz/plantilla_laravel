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
          <form action="" method="POST">
            <div class="col-md-6">
                <label>Nombre</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                <input type="text" name="pais_nombre" class="form-control" value="">
                </div>
                <div style="height: 1.5em;"></div>
            </div>
            <div class="col-md-6">
                <label>Código Dane</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                <input type="text" name="pais_codigoiso" class="form-control" value="">
                </div>
                <div style="height: 1.5em;"></div>
            </div>
            <div class="col-md-12">
                <label>Código ISO</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                    <input type="text" name="pais_codigoiso" class="form-control" value="">
                </div>
                <div style="height: 1.5em;"></div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-info"><i class="fa fa-floppy-o"></i> Grabar</button>
                <a href="" class="btn btn-primary"><i class="fa fa-search "></i> Buscar</a>
                <a href="" class="btn btn-default"><i class="fa fa-file-o"></i> Limpiar</a>        
            </div>
        </form>    
      </div>      
   </div>
   
   <!-- /.box-body -->
</div>
<!-- /.box -->
@stop