<div class="  modal fade" id="newuser" tabindex="-1" roleg="dialog" aria-labelledby="#miModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header cabezera">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title color" id="gridSystemModalLabel">crear nuevo usuario</h4>
            </div>
            <div class="modal-body">

                @if (count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!!Form::open(array('route'=>'storeuser', 'method'=>'POST'))!!}


                <div class="form-group">
                    {!!Form::label('inputEmail3', 'nombre', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::text('nombre', null,['class'=>'form-control','id'=>'name', 'placeholder'=>'nombre del usuario'])!!}

                </div>


                <div class="form-group">
                    {!!Form::label('inputEmail3', 'apellido', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'Tarjeta identidad'))!!}
                    {!!Form::text('apellido', null,['class'=>'form-control', 'id'=>'slug', 'placeholder'=>'apellido del usuario'])!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'correo electronico', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::email('email', null,['class'=>'form-control','id'=>'description', 'placeholder'=>'correo del usuario '])!!}
                    <div id ="description_error"></div>
                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'usuario ', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::text('user', null,['class'=>'form-control','id'=>'extract', 'placeholder'=>'ingrese un usuario unico '])!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'password', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::password('password',array('class'=>'form-control','id'=>'price', 'placeholder'=>'digite su contraseña'))!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'confirmar password', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::password('password_confirmation',array('class'=>'form-control','id'=>'price', 'placeholder'=>'confirme su contraseña'))!!}

                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'direccion ', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::text('direccion', null,['class'=>'form-control','id'=>'extract', 'placeholder'=>'ingrese la direccion del usuario '])!!}

                </div>




                <div class="form-group">
                    {!!Form::label('inputEmail3', 'tipo de usuario', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form:: radio('type','user', true )!!}user
                    {!!Form:: radio('type','admin')!!}admin
                </div>

                <div class="form-group">
                    {!!Form::label('inputEmail3', 'activo', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::checkbox('active', null,true,array('class'=>'minimal'))!!}

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