@extends('contacts.layout')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Contact Details</h2>
        </div>
        <div class="card-body">
            @if ($contacts->image == "")
            <p><img src="{{ asset('/storage/images/avatar.png') }}" class="contactImage my-auto"></p>
            @else 
            <img src="{{ asset($contacts->image) }}" class="contactImage my-auto">
            @endif
            <h4>{{ $contacts->name }}</h4>
            <span>Contact Number: {{ $contacts->number }}</span><br>
            <span>Address: {{ $contacts->address }}</span>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header ">Messages</div>
        <div class="card-body">
            <table class="table">
                @if (count($messages) > 0)
                @foreach ($messages as $item)
                    <tr>
                        <td>
                            <h5>{{ $item->msg }}</h5>
                            <small>Written on {{ $item->created_at }}</small>
                        </td>
                    </tr>
                @endforeach
                @else 
                    <small>No messages to display</small>
                @endif
            </table>
        </div>
    </div>
@endsection