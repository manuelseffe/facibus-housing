@foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>
@endforeach

@if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger" role="alert">
    {{ session('error') }}
  </div>
@endif

@if (session('info'))
  <div class="alert alert-primary" role="alert">
    {{ session('info') }}
  </div>
@endif

@isset($successMsg)
  <div class="alert alert-success" role="alert">
    {{ $successMsg }}
  </div>
@endisset

@isset($errorMsg)
  <div class="alert alert-danger" role="alert">
    {{ $errorMsg }}
  </div>
@endisset

@isset($infoMsg)
  <div class="alert alert-primary" role="alert">
    {{ $infoMsg }}
  </div>
@endisset
