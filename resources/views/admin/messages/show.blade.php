@extends('layouts.admin')

@section('content')
<div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="message d-flex py-4">
        <div class="message_data">
            <h3 class="mb-3">Subject: {{$message->subject}}</h3>
            <p>From: {{$message->email}}</p>
            <p>Name guest: {{$message->full_name}}</p>
            <p>Message: {{$message->message}}</p>
        </div>
    </div>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#reply-message-{{$message->id}}">
        Reply
    </button>
    <!-- Modal -->
    <div class="modal fade" id="reply-message-{{$message->id}}" tabindex="-1" aria-labelledby="modelTitle-{{$message->id}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reply to "<span class="text-primary">{{$message->full_name}}</span>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.messages.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="full_name" name="full_name" id="full_name" class="form-control" aria-describedby="helpId" value="{{$message->full_name}}" hidden>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">To</label>
                            <input type="email" name="email" id="email" class="form-control" aria-describedby="helpId" value="{{$message->email}}">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" aria-describedby="helpId" value="{{'RE: ' . $message->subject}}">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3">
                                _____________________ Old Message _____________________

                                {{$message->message}}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Reply</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection