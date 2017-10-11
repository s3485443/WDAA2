@extends('master')
@section('title', 'Submit a Ticket')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="padding-left: 40px; padding-right: 40px;">
            <h2>Please fill out the following</h2>
        </div>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
{!! Form::open(['action' => 'TicketController@store']) !!}

    <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', '', ['class' => 'form-control']) !!}
    </div>
<div class="form-group" style="padding-left: 40px; padding-right: 40px;">
    {!! Form::label('fname', 'First name') !!}
    {!! Form::text('fname', '', ['class' => 'form-control']) !!}
</div>
</div>
<div class="form-group" style="padding-left: 40px; padding-right: 40px;">
    {!! Form::label('lname', 'Last name') !!}
    {!! Form::text('lname', '', ['class' => 'form-control']) !!}
</div>
<div class="form-group" style="padding-left: 40px; padding-right: 40px;">
    {!! Form::label('software_issue', 'Software issue') !!}
    {!! Form::text('software_issue', '', ['class' => 'form-control']) !!}
</div>
<div class="form-group" style="padding-left: 40px; padding-right: 40px;">
    {!! Form::label('op_system', 'Operating system used')!!}
    {!! Form::text('op_system', '', ['class' => 'form-control']) !!}
</div>
<div style="padding-left: 40px; padding-right: 40px;">
    {!! Form::label('details', 'Describe the issue') !!}
    {!! Form::text('details', '', ['class' => 'form-control']) !!}
</div>
<div style="padding-left: 40px; padding-right: 40px; padding-top:20px;">
<button class="btn btn-success"  type="submit" >Submit ticket</button>
</div>
{!! Form::close() !!}
@endsection