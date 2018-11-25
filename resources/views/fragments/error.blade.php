@if(count($errors))
    <div class="alert alert-danger" role="alert">        
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif
@if(session('info'))    
    <div class="alert alert-success" role="alert">        
        {{session('info')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

