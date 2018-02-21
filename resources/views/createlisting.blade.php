@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create Listing</div>
            <div class="panel-body">
                {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                    {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
                    {{Form::bsText('website','',['placeholder' => 'Company Website'])}}
                    {{Form::bsText('email','',['placeholder' => 'Company Email'])}}
                    {{Form::bsText('phone','',['placeholder' => 'Company Phone Number'])}}
                    {{Form::bsText('address','',['placeholder' => 'Company Address'])}}
                    {{Form::bsText('bio','',['placeholder' => 'About Company'])}}
                    {{Form::bsSubmit('Submit')}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection