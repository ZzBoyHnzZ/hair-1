@extends('sites.master')
@section('siteTitle', __('Order_Booking'))
@section('content')
<div class="container">
    <div class="content-step">
        <div id="infor_user">
            <div class="price-box to-animate info-group-form">
                {{ Form::Open(['method' => 'get', 'enctype' => 'multipart/form-data']) }}
                    @foreach ($errors -> all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                        {!! csrf_field() !!}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Form::label('', null, ['class' => 'text-success form-name']) }}
                        <h4>
                            {{ trans('booking.input') }}
                        </h4>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('', __('Name')) !!}
                                {{ Form::text('name', '', ['class' => 'name-input form-control input-lg', 'placeholder' => trans('booking.name'), 'required' => 'required']) }}
                            </div>
                            <div class="form-group">
                                {!! Form::label('', __('Phone')) !!}
                                {{ Form::text('phone_number', '', ['class' => 'phone-input form-control input-lg', 'placeholder' => trans('booking.phone'), 'required' => 'required']) }}
                            </div>
                            <div class="form-group">
                                {!! Form::button(trans('booking.next'), ['type' => 'button', 'class' => 'btn btn-primary btn-click-next', 'name' => 'button']) !!}
                            </div>
                        </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="content-step1">
        <div id="choice_address">
            <div class="price-box infor_box_customer to-animate department-group-form">
                <label class="text-success form-name">
                    <h4>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{ trans('booking.salon') }}
                    </h4>
                </label>
                {{ Form::Open(['method' => 'get', 'enctype' => 'multipart/form-data']) }}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="form-group" >
                            {!! Form::label('', __('Salon')) !!}
                        <select class="form-control" name="salon" id="selectsalon">
                            @foreach($salon as $sl)
                                <option id="{{ $sl->id }}"> {{ $sl->name }}-{{ $sl->address}} </option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('/booking') }}" class="btn btn-danger">{{ __('Prev') }}</a>
                            {!! Form::button(trans('booking.next'), ['type' => 'button', 'class' => 'btn btn-primary btn-click-next1', 'name' => 'button']) !!}
                        </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="content-step2">
        <div class="col-md-12 col-sm-12 col-xs-12 choice_address" id="choice_list_time">
            <div class="price-box to-animate">
                <div class="row">
                    {{ Form::Open(['method' => 'get', 'enctype' => 'multipart/form-data']) }}
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    <div class="wrap-stylist-choice col-md-5 col-sm-12 row1">
                        <label class="text-success form-name">
                            <h4>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{ trans('booking.stylist') }}
                            </h4>
                        </label>
                        <div class="form-group">
                        <select class="form-control" name="stylist" id="selectstylist">
                            @foreach($user as $us)
                                <option id="{{ $us->id }}"> {{ $us->name }} </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="wrap-booking-time col-md-7 col-sm-12 col-xs-12 row2">
                        <label class="text-success form-name">
                            <h4>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                    {{ __('Choose Time') }}
                            </h4>
                        </label>
                        <div class="form-group">
                        <select class="form-control" name="timesheet" id="selecttimesheet">
                            @foreach($timesheetstylist as $tss)
                                @if($tss->mon == 'yes')
                                    <option id="{{ $tss->id }}">
                                    {{ trans('main.mon') }}
                                    </option>
                                @endif
                                @if($tss->tues == 'yes')
                                    <option id="{{ $tss->id }}">
                                    {{ trans('main.tue') }}
                                    </option>
                                @endif
                                @if($tss->wed == 'yes')
                                    <option id="{{ $tss->id }}">
                                    {{ trans('main.wed') }}
                                    </option>
                                @endif
                                @if($tss->thur == 'yes')
                                    <option id="{{ $tss->id }}">
                                    {{ trans('main.thur') }}
                                    </option>
                                @endif
                                @if($tss->fri == 'yes')
                                    <option id="{{ $tss->id }}">
                                    {{ trans('main.fri') }}
                                    </option>
                                @endif
                                @if($tss->sat == 'yes')
                                <option id="{{ $tss->id }}">
                                    {{ trans('main.sat') }}
                                    </option>
                                @endif
                                @if($tss->sun == 'yes')
                                <option id="{{ $tss->id }}">
                                    {{ trans('main.sun') }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <a href="#" class="btn btn-danger btn-click-prev1">{{ __('Prev') }}</a>
                        {!! Form::button(trans('booking.book'), ['type' => 'button', 'class' => 'btn btn-primary btn-click-booking', 'name' => 'button']) !!}
                        </div>
                    {{ Form::close() }}
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 