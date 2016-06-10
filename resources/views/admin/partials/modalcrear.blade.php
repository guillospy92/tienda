<div class="  modal fade" id="miventana" tabindex="-1" roleg="dialog" aria-labelledby="#miModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="cabezera modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title color" id="gridSystemModalLabel">crear nueva categoria</h4>
            </div>
            <div class="modal-body">

                <div id="msj-error" class="alert alert-danger alert-dismissable" role="alert" style="display:none" >
                    <strong id="msj"></strong><br>
                    <strong id="msj1"></strong><br>
                    <strong id="msj2"></strong><br>
                    <strong id="msj3"></strong>
                </div>

                <div id="msj-success" class="alert alert-success alert-dismissable" role="alert" style="display:none" >
                    <stron>la categoria se creo correctamente</stron>
                </div>
                {!!Form::open(array('id'=>'form'))!!}
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'nombre', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('name', null,['class'=>'form-control','id'=>'name', 'placeholder'=>'nombre de la categoria'])!!}

                </div>


                <div class="form-group">
                    {!!Form::label('inputEmail3', 'slug', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'Tarjeta identidad'))!!}
                    {!!Form::text('slug', null,['class'=>'form-control', 'id'=>'slug', 'placeholder'=>'slug de la categoria'])!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'descripcion', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('description', null,['class'=>'form-control','id'=>'description', 'placeholder'=>'descripcion de la categoria '])!!}
                    <div id ="description_error"></div>
                </div>


                <div class="form-group ">
                    {!!Form::label('inputEmail3', 'Color')!!}

                        {!!Form::text('color', null,['class'=>'form-control demo2 ','id'=>'color',])!!}



                </div>


            </div>
            <div class="modal-footer">
                {!! link_to('#',$title='registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure=null) !!}
                {!!Form::close()!!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>