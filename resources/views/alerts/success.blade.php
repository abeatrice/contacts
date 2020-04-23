@if (session($key ?? 'status'))
    <div class="alert alert-success">
        {{ session($key ?? 'status') }}
    </div>
@endif