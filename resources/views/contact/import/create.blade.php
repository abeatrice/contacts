@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="d-flex justify-content-between">
                <h1>Import Contacts</h1>
                <form method="get" action="{{asset('csv/import-example.csv')}}">
                    <button class="btn btn-success" type="submit">Example File</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @include('alerts.errors')
        @include('alerts.success')
    </div>
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Import Contacts:
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('contactImport.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="contacts" required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        bsCustomFileInput.init();
    });
</script>
@endsection
