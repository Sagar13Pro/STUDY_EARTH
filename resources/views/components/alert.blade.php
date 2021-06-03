@if ($type == 'mobileNo')
@error('mobileNoInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'mobileNo')
@error('con_mobile')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'email')
@error('emailInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if($type == "password")
@error('passwordInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif
@if($type=='message' )
@if (session('success'))
<div class="alert alert-success my-1">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="tracker custom-error">{{ session('error') }}</div>
@endif
@if(session('info'))
<div class="alerts-info">{{ session('info') }}</div>
@endif
@endif

@if($type == 'login')
@if(session()->has('login_failed'))
<div class="tracker">{{ session('login_failed') }}</div>
@endif
@endif

<script>
    $(document).ready(function() {
        setTimeout(function() {
            if ($('.custom-error').length > 0) {
                $('.custom-error').remove();
            }
        }, 4000);
    })

</script>
