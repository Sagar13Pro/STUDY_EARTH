{{-- CART ERROR BLOCK START --}}
@if ($type == 'fname_error')
@error('fnameInput')
<div class="tracker my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'lname_error')
@error('lnameInput')
<div class="tracker my-1">{{ $message }}</div>
@enderror
@endif

@if ($type == 'address_error')
@error('addressInput')
<div class="tracker my-1">{{ $message }}</div>
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
<div class="tracker my-1">{{ $message }}</div>
@enderror
@endif


@if($type == "passwd")
@error('passwordInput')
<div class="tracker my-1">{{ $message }}</div>
@enderror
@endif

@if($type == "cpasswd")
@error('confirmpasswordInput')
<div class="tracker my-1">{{ $message }}</div>
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
<div class="tracker-success">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="tracker">{{ session('error') }}</div>
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

{{-- CONTACT ERROR BLOCK START --}}
@if ($type == 'con_name_error')
@error('con_name')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'con_email_error')
@error('con_email')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'con_mobile_error')
@error('con_mobile')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
@if ($type == 'con_message_error')
@error('con_message')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
{{-- CONTACT ERROR BLOCK END --}}

{{-- FORGET PASSWORD ERROR BLOCK START --}}
@if($type == 'forget_password')
@if(session()->has('validation_error'))
<div class="tracker">{{ session('validation_error') }}</div>
@endif
@endif
@if($type == 'reset_password')
@error('new_passwordInput')
<div class="tracker">{{ $message }}</div>
@enderror
@endif
{{-- FORGET PASSWORD ERROR BLOCK END --}}
