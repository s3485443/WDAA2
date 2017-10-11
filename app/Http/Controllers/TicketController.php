<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketDetail;
use App\Tickets;

class TicketController extends Controller
{
    public function  create()
    {
        $ticket = Tickets::all();
        return view('submission.create', ['tickets'=>$ticket]);
    }

    public function review(Request $request)
    {
        $tickets= Tickets::orderBy('id', 'DESC')->paginate(5);
        return view ('review', compact('tickets'))->with('i', ($request->input('page',1)-1)*5);
    }


    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'fname' => 'required',
            'lname' => 'required',
            'software_issue' => 'required',
            'op_system' => 'required',
            'details' => 'required'
        ]);

        $allRequest= $request->all();
        $tickets = new Tickets();
        $tickets->email=$allRequest['email'];
        $tickets->fname=$allRequest['fname'];
        $tickets->lname=$allRequest['lname'];
        $tickets->software_issue=$allRequest['software_issue'];
        $tickets->save();

        $details = new TicketDetail();
        $details->software_issue=$tickets->software_issue;
        $details->op_system = $allRequest['op_system'];
        $details->details = $allRequest['details'];
        $details->TicketNo = $tickets->id;
        $details->save();

        return redirect()->route('submission.create') ->with('success', 'Ticket submitted successfully');
    }
}
