
{{ __('Register') }}
<form method="POST" action="{{ route('register') }}">
    @csrf
    {{ __('Name') }}
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
            <strong>{{ $message }}</strong>
        @enderror
    {{ __('E-Mail Address') }}
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
        <input type="submit" value="{{ __('Register') }}">
</form>