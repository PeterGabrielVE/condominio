$(".formlDinamic").on('submit', function(e) {
    e.preventDefault();

    var id = $(this).attr('id');
    var url = $(this).attr("action");
    var method = $(this).attr("method");
    var forml = $(this);

    if (id == 'guardarRegistro') {
        saveData(url, forml, method);
    }

    if (id == 'guardarRegistroMultitap') {
        var inputFile = $('#file');
        saveDataMultitap(url, forml, method, inputFile);
    }
    if (id == 'DataUpdate') {
        //input file
        var inputFile = $('#file-2');

        if(inputFile[0] == undefined){
            saveData(url, forml, method);
        }else{
            saveDataMultitap(url, forml, method, inputFile);
        }
    }
    if (id == 'eliminarRegistro'){
        deleteReg(url,forml,method);
    }
});

function saveData(url, forml, method)
{

    var route = $('#route').val();
    $.ajax({
        url: url,
        type: method,
        data: forml.serialize(),
        cache: false,
        success: function(result)
        {
            $('.modal').modal('hide');// Oculta el modal del formulario create
            //si recibe respuesta redirecciona al edit
            // console.log(result.id);
            if (result.id != undefined) {
                if(result.page == 'show'){
                    window.location.replace(route  + "/" + result.id);
                }else{
                    window.location.replace(route  + "/" + result.id + "/edit");
                }
            }else{
                if(route == '' || result.operator == true){
                    location.reload();
                }else{
                    window.location.replace(route)
                }
            }
            if(result.page = 'shipDetails'){
                location.reload();
            }
            $(".create")[0].reset();
        },
        error: function(msj)
        {
            var status = msj.statusText;
            var errors = $.parseJSON(msj.responseText);

            $.each(errors.errors, function(key, value)
            {
                $("#" + key).addClass("is-invalid");
                $("#_" + key).addClass("is-invalid");
                $("." + key + "_span").addClass("invalid-feedback").html(value);
                toastr.error(value,"Error");
            });
            if(msj.statusText == 'Internal Server Error'){
                toastr.error('Internal Server Error',"Error");
            };
        },
    timeout: 15000
    });
}