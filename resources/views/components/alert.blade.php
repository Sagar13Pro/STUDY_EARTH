{{-- CART ERROR BLOCK START --}}
@if ($type == 'fname_error')
@error('fnameInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'lname_error')
@error('lnameInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'address_error')
@error('addressInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'mobileNo_error')
@error('mobileNoInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'mail_error')
@error('emailInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'dob_error')
@error('birthdateInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif


@if($type == "passwd")
@error('passwordInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif

@if($type == "cpasswd")
@error('confirmpasswordInput')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif
{{-- CART ERROR BLOCK END --}}

{{-- CUSTOM PROJECT ERROR BLOCK START --}}
@if ($type == 'full_name_error')
@error('full_nameInput')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'email_error')
@error('emailInput')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'contact_no_error')
@error('mobile_numberInput')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'select_platform_error')
@error('project_platformInput')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'project_req_error')
@error('project_requirementsInput')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
{{-- CUSTOM PROJECT ERROR BLOCK END --}}
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
@if ($type == 'mobileNo')
@error('con_mobile')
<div class="tracker custom-error my-1">{{ $message }}</div>
@enderror
@endif
