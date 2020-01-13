<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$categoria->idcategoria}}">

	{{Form::Open(array('action'=>array('CategoriaController@destroy',$categoria->idcategoria),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 	<span aria-hidden='true'>x</span>

				 </button>
				 <h4 class="modal-title"><strong>Eliminar Categoría</strong></h4>
			</div>
			<div class="body"><br>
				<p class="tabulacion" align="center" > Confirme si desea eliminar la categoría numero <strong>{{$categoria->idcategoria}} </strong></p><br>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div> 
	{{Form::Close()}}
		
</div>