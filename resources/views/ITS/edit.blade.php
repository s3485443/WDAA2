@extends('master')
@section('title', 'Resolution')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="padding-left: 40px; padding-right: 40px;">
                <h2>Response</h2>
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
    <div>
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <div><strong>Ticket Number:</strong></div>
            {{$ticket->TicketNo}}
        </div>
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <div><strong>Software Issue</strong></div>
            {{$ticket->software_issue}}
        </div>
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <div><strong>Operating System</strong></div>
            {{$ticket->op_system}}
        </div>
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <div><strong>Details</strong></div>
            {{$ticket->details}}
        </div>
        {!! Form::model($ticket, ['method' => 'PATCH','route' => ['ITS.update', $ticket->id]]) !!}
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <div><strong>Help or suggested fixes</strong></div>
            {!! Form::textarea('comments', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <div><strong>Indicate progress</strong></div>
            {!!Form::select('progress',
            array('pending' => 'Pending',
            'In Progress'=>'In Progress',
            'Unresolved'=>'Unresolved',
            'Resolved'=>'Resolved')
            )  !!}
        </div>
        <div class="form-group" style="padding-left: 40px; padding-right: 40px;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection

