@extends('master')
@section('title', 'ITS Tickets')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ITS tickets submitted</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>TicketNo</th>
            <th>User Email</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Issue</th>
            <th>Progress</th>
        </tr>
        @foreach($tickets as $itsTicket)
            <tr>
                <td>{{$itsTicket->id}}</td>
                <td>{{$itsTicket->email}}</td>
                <td>{{$itsTicket->fname}}</td>
                <td>{{$itsTicket->lname}}</td>
                <td>{{$itsTicket->software_issue}}</td>
                <td>{{$itsTicket->progress}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('ITS.edit',$itsTicket->id)}}">Respond</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $tickets->render() !!}
@endsection