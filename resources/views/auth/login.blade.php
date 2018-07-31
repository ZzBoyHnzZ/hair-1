{{-- @extends('master')
@section('name', 'Login')

@section('content') --}}
    <div class="container col-md-6 col-md-offset-3">
        <div class="well well bs-component">
        {{ Form::open(['method'=>'POST', 'class'=>'form-horizontal']) }}
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                {{-- {!! csrf_field() !!} --}}
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
            {{ Form::label('email', null, ['value' =>'email']) }}
            {{-- <label for="email">Email</label> --}}
                <div class="col-lg-10">
                    {{ Form::text('email','',['id'=>'email','placeholder'=>'Email']) }} 
                </div>
            </div>
            <div class="form-group">
            {{ Form::label('password',null, ['value'=>'pasword','class'=>'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                {{ Form::password('password',['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
            {{ Form::button('Login',['class'=>'btn btn-primary']) }}
                </div>
            </div>
         </fieldset>   
        {{ Form::close() }}
        </div>
    </div>
{{-- @endsection --}}
