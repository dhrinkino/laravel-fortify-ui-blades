{{ __('Reset Password') }}

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    
    {{ __('E-Mail Address') }}
    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
    @error('email')
        <strong>{{ $message }}</strong>
    @enderror

    {{ __('Password') }}
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <strong>{{ $message }}</strong>
        @enderror

    {{ __('Confirm Password') }}
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

        <input type="submit" value="{{ __('Reset Password') }}">
</form>

