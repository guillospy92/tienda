
@extends('store.template')
@section('content')
                @if (count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                <br><br><br>

                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-7">



                {!!Form::open(array('route'=>'mail.store', 'method'=>'POST','class'=>'form-horizontal'))!!}


                <div class="form-group">
                    <div class="col-lg-10">
                    {!!Form::label('inputEmail3', 'nombre', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}

                    {!!Form::text('nombre', null,['class'=>'form-control','id'=>'name', 'placeholder'=>'nombre del usuario'])!!}
                        </div>

                </div>


                <div class="form-group">
                    <div class="col-lg-10">
                    {!!Form::label('inputEmail3', 'apellido', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'Tarjeta identidad'))!!}
                    {!!Form::text('apellido', null,['class'=>'form-control', 'id'=>'slug', 'placeholder'=>'apellido del usuario'])!!}

                </div>
                    </div>

                <div class="form-group">
                    <div class="col-lg-10">
                    {!!Form::label('inputEmail3', 'correo electronico', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => 'nombre'))!!}
                    {!!Form::email('email', null,['class'=>'form-control','id'=>'description', 'placeholder'=>'correo del usuario '])!!}
                   </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10">
                    {!!Form::label('inputEmail3', 'usuario ', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::text('user', null,['class'=>'form-control','id'=>'extract', 'placeholder'=>'ingrese un usuario unico '])!!}
                </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10">
                    {!!Form::label('inputEmail3', 'password', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::password('password',array('class'=>'form-control','id'=>'price', 'placeholder'=>'digite su contraseña'))!!}

                </div>
                    </div>

                <div class="form-group">
                    <div class="col-lg-10">
                    {!!Form::label('inputEmail3', 'confirmar password', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                    {!!Form::password('password_confirmation',array('class'=>'form-control','id'=>'price', 'placeholder'=>'confirme su contraseña'))!!}

                </div>
                    </div>

                            <div class="form-group">
                                <div class="col-lg-10">
                                    {!!Form::label('inputEmail3', 'direccion ', array('class' => ''),array('for' => 'exampleInputEmail1'), array('placeholder' => ''))!!}
                                    {!!Form::text('direccion', null,['class'=>'form-control','id'=>'extract', 'placeholder'=>'ingrese su direccion '])!!}
                                </div>
                            </div>



               <div class="form-group">
                   <div class="col-lg-8 col-lg-offset-4">

                   {!! Form::submit('registrar',['class'=>'btn btn-primary','id'=>'productotok']) !!}

               </div>
               </div>


                {!!Form::close()!!}

                </div>
                </div>
                </div>
                <br><br><br><br><br><br>


@stop
