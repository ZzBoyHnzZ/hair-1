{{-- @extends('master')
@section('name', 'Register')

@section('content') --}}
    <div class="container col-md-6 col-md-offset-3">
        <div class="well well bs-component">
            {!! Form::open(['method'=>'POST', 'class'=>'form-horizontal']) !!}
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                {!! csrf_field() !!}

                <fieldset>
                    <legend>Register an account</legend>
                    <div class="form-group">
                        {!! Form::label('email', null, ['class'=>'col-lg-2 control-label', 'value'=>'email']) !!}
                        <div class="col-lg-10">
            {!! Form::text('email', '', ['id'=>'email', 'class'=>'form-control', 'placeholder'=>'email']) !!} 
                        </div>
                    </div>
                    <div class="form-group">                     
                        {!! Form::label('phone',null, ['class'=>'col-lg-2 control-label', 'value'=>'phone']) !!}
                        <div class="col-lg-10">
            {!! Form::text('phone', '', ['id'=>'phone', 'class'=>'form-control', 'placeholder'=>'phone']) !!} 
                        </div>
                    </div>

                    <div class="form-group">
                    {!! Form::label('password', null, ['class'=>'col-lg-2 control-label','value'=>'password']) !!}
                        <div class="col-lg-10">
                        {!! Form::password('password', ['class'=>'form-control']) !!} 
                        </div>
                    </div>

                    <div class="form-group">
                    {!! Form::label('password', null, ['class'=>'col-lg-2 control-label','value'=>'confirm_password']) !!}
                        <div class="col-lg-10">
                        {!! Form::password('confirm_password', ['class'=>'form-control']) !!} 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                           {!! Form::button('cancel', ['class'=>'btn btn-primary']) !!}
                            {!! Form::button('register', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                </fieldset>
                {!! Form::close() !!}
        </div>
    </div>
{{-- @endsection --}}
