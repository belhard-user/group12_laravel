@if(session()->has('flash'))
    <div class="alert alert-{{ session('flash.type') }}">
        {{ session('flash.message') }}
    </div>
@endif