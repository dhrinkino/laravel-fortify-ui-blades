{{ __('Reset Password') }}
@if (session('status'))
    {{ session('status') }}
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    {{ __('E-Mail Address') }}
    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
        <strong>{{ $message }}</strong>
    @enderror

    <input type="submit" value="{{ __('Send Password Reset Link') }}">

</form>
