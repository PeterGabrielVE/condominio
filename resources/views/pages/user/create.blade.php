<!-- Modal -->
{!! Form::open(['route'=>'user.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="create">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Agregar Nuevo Usuario</h4>
        </div>
        <div class="modal-body">
         
          <div class="form-row" role="form">
          	<div class="col-md-12">
          		<div class="form-group col-md-6">
		            <div class="col-sm-12">
		              	<label class="control-label">Nombre Completo</label>
		                <input name="name" id="name" type="text" class="form-control" placeholder="Nombre Completo">
		            </div>
            	</div>
	            <div class="form-group col-md-6">
	              	<div class="col-sm-12">
		              	<label class="control-label">Correo Electrónico</label>
		                <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico">
		            </div>
	            </div>
	         </div>
	         <div class="col-md-12">
	         	<div class="form-group col-md-6">
		            <div class="col-sm-12">
		              	<label class="control-label">Contraseña</label>
		                {!! Form::password('password', ['class'=>'form-control r-0 light s-12']) !!}
		            </div>
            	</div>
	            <div class="form-group col-md-6">
	              	<div class="col-sm-12">
		              	{!! Form::label('passwordConfirm', 'Confirma Contraseña', ['class'=>'col-form-label s-12']) !!}
						{!! Form::password('password_confirmation', ['class'=>'form-control r-0 light s-12', 'id'=>'password_confirmation']) !!}
		            </div>
	            </div>
	         </div>
             <div class="col-md-12">
          		<div class="form-group col-md-6">
		            <div class="col-sm-12">
		              	<label class="control-label">Teléfono 1</label>
		                <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Teléfono 1">
		            </div>
            	</div>
	            <div class="form-group col-md-6">
	              	<div class="col-sm-12">
		              	<label class="control-label">Teléfono 2</label>
		                <input type="text" name="phone2" id="phone2" class="form-control" placeholder="Teléfono 2">
		            </div>
	            </div>

	         </div>
	         <div class="form-group col-md-12">
	         		<div class="col-sm-12">
	         			{!! Form::label('profile', 'Perfil', ['class'=>'control-label s-12']) !!}
	         		</div>
		          	<div class="col-sm-12">	
						{!! Form::select('profile_id', $profiles, null, ['class'=>'form-control r-0 light s-12', 'id'=>'profile_id']) !!}
					</div>
				</div>
            
          </div>
        </div>
        <div class="modal-footer no-border">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">

	var _validFileExtensions = [".jpg",".png"];   
	function ValidarTamaño(obj)
	{
		/*console.log("hola");
		var sizeByte = this.files[0].size;
		var siezekiloByte = parseInt(sizeByte / 1024);
		if(siezekiloByte > 100){
		alert('El tamaño supera el limite permitido');
		$('#file').val('');
		}*/
		if (obj.type == "file") {
        var sFileName = obj.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                    $('.file_span').html("");
                }

            }


             
            if (!blnValid) {
               /* alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));*/
              	$('.file_span').html("");
			  	$('.file_span').append("<p class='alert alert-danger'>Sorry,"+ sFileName + " is invalid, allowed extensions are: jpg</p>");
                obj.value = "";
                return false;
            }

            var fileSize = $('#file')[0].files[0].size;
		    var siezekiloByte = parseInt(fileSize / 1024);
		    if (siezekiloByte >  $('#file').attr('size')) {
		    	$('.file_span').html("");
		        $('.file_span').append("<p class='alert alert-danger'>Sorry,"+ sFileName + " size should not be greater than 15kb</p>");
                 $('.file').html("");
		        return false;
		    }
        }
    }
    return true;
	}
</script>

{!! Form::close() !!}