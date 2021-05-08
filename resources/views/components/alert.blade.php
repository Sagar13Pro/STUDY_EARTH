<div class="alert-box my-2">
    @if ($type == 'mobileNo')
    @error('mobileNoInput')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @endif

    @if ($type == 'email')
    @error('emailInput')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @endif

    @if($type == 'message')
    @if (session('message'))
    <div class="alert alert-success"> {{ session('message') }}</div>
    @endif
    @endif
</div>
