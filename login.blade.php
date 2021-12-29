<form method="POST" action="{{ route('login') }}">
    @csrf
    {{ __('E-Mail Address') }}
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <strong>{{ $message }}</strong>
        @enderror

    {{ __('Password') }}
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <strong>{{ $message }}</strong>
        @enderror

    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    {{ __('Remember Me') }}

    <input type="submit" value="{{ __('Login') }}">    
    
    @if (Route::has('password.request'))
        <a  href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif

</form>
