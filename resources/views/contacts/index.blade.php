@extends('contacts.layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Contacts</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- $item is considered one record from the table/db --}}
                    @foreach ($contacts as $item)                        
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->number }}</td>
                            <td>{{ $item->address }}</td>
                            <td>
                                <a href="{{ url('/contact/' . $item->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ url('/contact/' . $item->id . '/edit') }}" class="btn btn-warning btn-sm">Update</a>

                                <form action="{{ url('/contact/' . $item->id)}}" method="post" style="display: inline;">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete contact?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach                        
                    </tbody>                    
                </table>
                <div class="d-flex justify-content-center">
                    {!! $contacts->links() !!}
                </div>
                
                <a href={{ url('/contact/create') }} class="btn btn-success">Add New Contact</a>
            </div>
        </div>
    </div>
@endsection