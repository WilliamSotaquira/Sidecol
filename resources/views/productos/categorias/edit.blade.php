@extends ('layouts.admin')
@section ('contenido')
@include('productos.categorias.encabezado')



<section class="content">

  {!!Form::model($categorias,['method'=>'PUT','route'=>['productos.categorias.update',$categorias->idcategoria],'files'=>'true'])!!}
  {{Form::token()}}


  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Editar Registro</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse">
          <i class="fa fa-minus"></i>
        </button>
      </div>
    </div>

    @if (count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="container-fluid">
      <div class="box-body">
        <div class="col-xs-12 col-sm-8">


          <div class="row ">
            <div class="col-xs-12 col-sm-12">
              <div class="form-group">
                <label for="categoria" class="col-xs-12 col-sm-2 control-label">Nombre de la Categoría</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" name="categoria" id="categoria" value="{{$categorias->categoria}}" required >
               </div> 
             </div> 
           </div> 
         </div>  


        <div class="row "> 
          <div class="col-xs-12 col-sm-12">
            <div class="form-group">
              <label for="estado" class="col-xs-12 col-sm-2 control-label">Estado</label>
              <div class="col-sm-10">
                <select name="estado" class="form-control selectpicker" data-live-search="true" data-size="6" id="estado" required>
                  <option selected disabled="true">Seleccione &hellip;</option>                  
                  @if ($categorias->estado===0)  
                  <option value="0" selected>Deshabilitada</option>
                  <option value="1" >Activa</option>

                  @elseif($categorias->estado===1) 
                  <option value="0">Deshabilitada</option>
                  <option value="1" selected >Activa</option>

                  @elseif($categorias->estado===2) 
                  <option value="0" >Deshabilitada</option>        
                  <option value="1" >Activa</option>
                  <option value="2" selected>Eliminada</option>        
                  @endif                  
                </select>                                              
              </div> 
            </div>
          </div>
        </div>




      </div>
    </div>


  </div>

  <div class="box-footer " id="guardar">
    <div class="row">
      <div class="col-sm-12">

        <div class="col-xs-0 col-sm-0 col-lg-3 text-center" style="padding-bottom: 5px; padding-top: 5px"></div>
        <div class="col-xs-12 col-sm-4 col-lg-2 text-center" style="padding-bottom: 5px; padding-top: 5px">

          <a href="{{route('productos.categorias.index')}}" class="btn btn-info btn_end" id="back" >Atras</a><br>

        </div>
        <div class="col-xs-12 col-sm-4 col-lg-2 text-center" style="padding-bottom: 5px; padding-top: 5px">


         <a href="{{route('productos.categorias.edit',$categorias->idcategoria)}}" class="btn btn-default btn_end" id="back" >Limpiar</a><br>

       </div>
       <div class="col-xs-12 col-sm-4 col-lg-2 text-center"  style="padding-bottom: 5px; padding-top: 5px">


        <button class="btn btn-danger btn_end" type="submit" > Guardar </button>


      </div>
      <div class="col-xs-0 col-sm-0 col-lg-3 text-center" style="padding-bottom: 5px; padding-top: 5px"></div>

    </div>

  </div>


</div>

</div>
{!!Form::close()!!}
</section>
@endsection
