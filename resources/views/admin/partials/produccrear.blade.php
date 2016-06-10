<div class="  modal fade" id="miventadacrearproduct" tabindex="-1" roleg="dialog" aria-labelledby="#miModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header cabezera">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title color" id="gridSystemModalLabel">crear nuevo producto</h4>
            </div>
            <div class="modal-body">

                <div id="msj-error" class="alert alert-danger alert-dismissable" role="alert" style="display:none" >
                    <strong id="msj"></strong><br>
                    <strong id="msj1"></strong><br>
                    <strong id="msj2"></strong><br>
                    <strong id="msj3"></strong>
                </div>

                {!!Form::open(array('route'=>'storeproducto','files'=>true, 'method'=>'POST'))!!}
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="tokenn">

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'nombre', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('name', null,['class'=>'form-control','id'=>'name', 'placeholder'=>'nombre del producto'])!!}

                </div>


                <div class="form-group">
                    {!!Form::label('inputEmail3', 'slug', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'Tarjeta identidad'))!!}
                    {!!Form::text('slug', null,['class'=>'form-control', 'id'=>'slug', 'placeholder'=>'slug de la producto'])!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'descripcion', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('description', null,['class'=>'form-control','id'=>'description', 'placeholder'=>'descripcion del producto '])!!}
                    <div id ="description_error"></div>
                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'extract', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::text('extract', null,['class'=>'form-control','id'=>'extract', 'placeholder'=>'descripcion 2'])!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'precio', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::text('price', null,['class'=>'form-control','id'=>'price', 'placeholder'=>'digite el precio'])!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'imagen', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::file('path',['class'=>'form-control','id'=>'path'])!!}

                </div>


                <div class="form-group">
                    {!!Form::label('inputEmail3', 'Categoria', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form:: select('category_id',$est,null, array('class' => 'form-control','id'=>'category_id'))!!}




                </div>



            </div>
            <div class="modal-footer">
                {!! Form::submit('registrar',['class'=>'btn btn-primary','id'=>'productotok']) !!}
                {!!Form::close()!!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>