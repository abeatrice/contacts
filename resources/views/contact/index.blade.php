@extends('layouts.app')

@section('content')
<div class="container">
    @include('alerts.errors')
    @include('alerts.success')
    <div class="row justify-content-center">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Contacts:</h1>
                <div>
                    <a href="{{route('contactImport.create')}}" class="btn btn-success" role="button">Import</a>
                    <a href="{{route('contacts.create')}}" class="btn btn-success" role="button">Create</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-stripped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->first_name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('contacts.edit', $contact)}}" class="btn btn-primary mr-2" role="button">Edit</a>
                                <form method="POST" action="{{route('contacts.destroy', $contact)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            {{$contacts->links()}}
        </div>
    </div>
</div>
@endsection
