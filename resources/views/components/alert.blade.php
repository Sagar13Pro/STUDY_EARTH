@if ($type == 'mobileNo')
@error('mobileNoInput')
<div class="alert alert-danger my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'email')
@error('emailInput')
<div class="alert alert-danger my-1">{{ $message }}</div>
@enderror
@endif

@if($type == 'message')
@if (session('message'))
<div class="alert alert-success my-1"> {{ session('message') }}</div>
@endif
@endif
