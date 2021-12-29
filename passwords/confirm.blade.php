{{ __('Confirm Password') }}
{{ __('Please confirm your password before continuing.') }}
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        {{ __('Password') }}
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <strong>{{ $message }}</strong>
        @enderror

        <input type="submit" value="{{ __('Confirm Password') }}">
        
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        @endif
    </form>
