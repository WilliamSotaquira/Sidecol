@extends ('layouts.admin')
@section ('contenido')
@include('productos.subcategorias.encabezado')


<section class="content">

  {!!Form::model($subcategorias,['method'=>'PUT','route'=>['productos.subcategorias.update',$subcategorias->idsubcategoria],'files'=>'true'])!!}
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


         <div class="row row-first"> 
          <div class="col-xs-12 col-sm-12">
            <div class="form-group">
              <label for="categoria_id" class="col-xs-12 col-sm-2 control-label">Categoría</label>
              <div class="col-sm-10">
               <select name="categoria_id" class="form-control selectpicker" data-size="6" data-live-search="true" id="categoria_id"  required>

                @foreach($categorias as $c) 
                @if($c->idcategoria == $subcategorias->categoria_id)
                <option value="{{$c->idcategoria}}">{{$c->idcategoria}} - {{$c->categoria}}</option>
                @endif
                @endforeach

              </select>
            </div>
          </div>
        </div>
      </div>

         <div class="row ">
          <div class="col-xs-12 col-sm-12">
            <div class="form-group">
              <label for="subcategoria" class="col-xs-12 col-sm-2 control-label">Nombre Subcategoria</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="subcategoria" id="subcategoria" value="{{$subcategorias->subcategoria}}" required >
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
                  @if ($subcategorias->estado===0)  
                  <option value="0" selected>Activo</option>
                  <option value="1" >Deshabilitado</option>

                  @elseif($subcategorias->estado===1) 
                  <option value="0">Activo</option>
                  <option value="1" selected >Deshabilitado</option>

                  @elseif($subcategorias->estado===2) 
                  <option value="0" >Activo</option>        
                  <option value="1" >Deshabilitado</option>
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

        <a href="{{route('productos.subcategorias.index')}}" class="btn btn-info btn_end" id="back" >Atras</a><br>

      </div>
      <div class="col-xs-12 col-sm-4 col-lg-2 text-center" style="padding-bottom: 5px; padding-top: 5px">


       <a href="{{route('productos.subcategorias.edit',$subcategorias->idsubcategoria)}}" class="btn btn-default btn_end" id="back" >Limpiar</a><br>

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
@section('scripts')
<link rel="stylesheet" type="text/css" href="{{asset ('css/img.css')}}">
<script>


  $(function() {

    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function() {
      var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });

    // We can watch for our custom `fileselect` event like this
    $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
          input.val(log);
        } else {
          if( log ) alert(log);
          }

        });
    });


  });      
</script>
<script>


  $(window).load(function(){

   $(function() {
    $('#file-input').change(function(e) {
      addImage(e); 
    });

    function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

       var reader = new FileReader();
       reader.onload = fileOnload;
       reader.readAsDataURL(file);
     }

     function fileOnload(e) {
      var result=e.target.result;
      $('#imgSalida').attr("src",result);
    }
  });
 });

</script>
<script>

  $('#preview').hover(
    function() {
      $(this).find('a').fadeIn();
    }, function() {
      $(this).find('a').fadeOut();
    }
    )
  $('#file-select').on('click', function(e) {
   e.preventDefault();

   $('#image').click();
 })

  $('input[type=file]').change(function() {
    var file = (this.files[0].name).toString();
    var reader = new FileReader();

    $('#file-info').text('');
    $('#file-info').text(file);

    reader.onload = function (e) {
     $('#preview img').attr('src', e.target.result);
   }

   reader.readAsDataURL(this.files[0]);
 });

</script>


@endsection

