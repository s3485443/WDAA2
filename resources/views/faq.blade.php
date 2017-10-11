@extends('master')
@section('title', 'faq')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title"><h1>Frequently asked questions</h1></div>
            <div class="quote"><p>Q: How long does it typically take to resolve an issue?</p>
                <p>A:Depends on the issue, but we strive to resolve most issues in 1-5 business days.</p><br>
                <p>Q:Why cant I access my subject's google docs?</p>
                <p>A:Usually this is cause by being logged into a home email rather than the student email provided by RMIT University.
                    Try logging out of your home email and logging into the email address provided by RMIT university.</p><br>
                <p>Q:What is the progress field and why does it say pending?</p>
                <p>A:The progress field is how far your ticket has progressed, whether it has been seen by staff or resolved.
                    Pending means that it is yet to be reviewed by staff</p><br>
                <p>Q:What are the other states? What do they mean?</p>
                <p>A:Pending, In Progress, Unresolved, Resolved. <br>
                    In progress: Staff are currently working on a fix<br>
                    Unresolved: Staff were unable to find a fix<br>
                    Resolved: ITS staff have solved the issue.</p>
            </div>
        </div>
    </div>
@endsection