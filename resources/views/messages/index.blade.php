@extends('contacts.layout')
@section('content')
    <div class="card mt-5">
        <div class="card-header"><h3>Messages</h3></div>
        <div class="card-body">
            @foreach ($contact as $item)
                @foreach ($item->message as $msgItem)
                    <table class="table"> 
                        <tr>
                            <td>
                                <h4>{{ $msgItem->msg }}</h4>
                                {{ $item->name }} <br>
                                {{ $msgItem->created_at}}
                                
                            </td>
                        </tr>
                    </table>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
