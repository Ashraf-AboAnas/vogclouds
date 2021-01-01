
 {{-- @if(Session::has('errors')) //نفس اللي تحتيها في الشرط --}}

 {{-- @if ($error->any()) --}}
 @if(Session::has('errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('alert.error'))
      <div class="alert alert-danger">
        {{ session ('alert.error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
