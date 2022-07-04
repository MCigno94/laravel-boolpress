@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page_headin ">
        <h1 class="text-center py-3">All Messages</h1>
        @include('partials.message')
        <table class="table">
            <thead>
                <tr class="border-bottom border-dark">
                    <th>ID</th>
                    <th>Status</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                <tr class="border-bottom border-dark {{$message->status == 'Sent' ? 'bg_suc' : 'bg_dan'}}">
                    <td scope="row">{{$message->id}}</td>
                    <td>{{$message->status}}</td>
                    <td>{{$message->full_name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.messages.show',$message->id)}}">Views</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-message-{{$message->id}}">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-message-{{$message->id}}" tabindex="-1" aria-labelledby="modelTitle-{{$message->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete message "<span class="text-primary">{{$message->subject}}</span>"</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <form action="{{route('admin.messages.destroy',$message->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td scope="row">No message</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection