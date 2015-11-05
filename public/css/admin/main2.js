
$(document).ready(function(){
    Carga();

});

        function Carga(){


        var tablaDatos = $("#datos");
        var route = "/categorias";
        $("#datos").empty();
        $.get(route, function(res){
            $(res).each(function(key,value){
                tablaDatos.append("<tr><td><button value="+value.id+" onclick='mostrar(this);' class='btn btn-success' data-toggle='modal' data-target='#miventanaupdate' href=''>" +
                    "<i class='fa fa-refresh'></i></button></td><td>" +
                    "<button value="+value.id+" onclick='eliminar(this);' id='eliminar'  class='btn btn-danger' href=''><i class='fa fa-trash text-center'></i></button>" +
                    "</td><td>"+value.name+"</td><td>"+value.slug+"</td><td>"+
                    value.description+"</td><td>"+value.color+
                    "</td></tr>");


            });
        });




        }


function mostrar(btn){

    console.log(btn.value);
    var route = "/admin/"+btn.value+"/edit";
    $.get(route,function(res){

        $("#names").val(res.name);
        $("#slugu").val(res.slug);
        $("#descriptions").val(res.description);
        $("#colors").val(res.color);
        $("#id").val(res.id);


    });
}





    $("#actualizar").click(function(){

        var id = $("#id").val();
        var name = $("#names").val();
        var slug = $("#slugo").val();
        var description = $("#descriptions").val();
        var color = $("#colors").val();
        var token = $("#tokenn").val();
        var route = "/admin/category/update/"+id+"";


        $.ajax({

            url:route,
            headers: {'X-CSRF-TOKEN': token},
            type:'PUT',
            dateType:'json',
            data:{name:name,slug:slug,description:description,color:color},
            success: function(){
                Carga();
                $("#miventanaupdate").modal('toggle');
                $("#msj-success").fadeIn();
                alertify.alert("esta categoria se actualizo \n"  +name);
            }



        });


    });



function eliminar(btn){
    var route = "/admin/category/delete/"+btn.value+"";
    var token = $("#tokenn").val();
    console.log(btn.value);

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            Carga();
            $("#msj-success").fadeIn();
            alertify.alert("el registro se elimino correctamente");
        }
    });
}


$("#registro").click(function(){
    var name = $("#name").val();
    var slug = $("#slug").val();
    var description = $("#description").val();
    var color = $("#color").val();
    var route = "/admin/create";
    var token = $("#token").val();


    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{name:name,slug:slug,description:description,color:color},


        success:function(){
            Carga();
            $("#miventana").modal('toggle');
            $("#msj-error").css("display", "none");
            $('#form')[0].reset();
            alertify.alert("esta categoria se creo correctamente \n"  +name);


        },

        error:function(msj){
            $("#msj").html(msj.responseJSON.name);
            $("#msj").addClass('restrintion');
            $("#msj1").html(msj.responseJSON.slug);
            $("#msj2").html(msj.responseJSON.description);
            $("#msj3").html(msj.responseJSON.color);
            $("#msj-error").fadeIn();

        },




    });
});



