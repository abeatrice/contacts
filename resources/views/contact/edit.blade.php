@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('alerts.errors')
        @include('alerts.success')
        <div class="card">
            <div class="card-header">
                Edit Contact: {{$contact->first_name}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('contacts.update', $contact)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $contact->first_name) }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
