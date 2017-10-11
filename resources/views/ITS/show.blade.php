@extends('master')
@section('title', 'show')
@section('content')

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Ticket Details</h2>
        </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ticket Number:</strong>
            {{ $ticket->TicketNo}}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Operating System</strong>
            {{ $ticket->op_system}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Software Issue</strong>
            {{ $ticket->software_issue}}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $ticket->details}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Comments:</strong>
            {{ $ticket->comments}}
        </div>
    </div>
    </div>
@endsection