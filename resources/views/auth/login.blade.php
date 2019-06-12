@extends('layouts.app')

@section('content')
<div class="contact-form">
  <h2 class="icon">ログイン</h2>
  <form method="POST" action="{{ route('login') }}">
    @csrf
      <dl>
        <dt>メールアドレス</dt>
        <dd><input id="email" type="email" class="email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></dd>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror

        <dt>パスワード</dt>
        <dd><input id="password" type="password" class="password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></dd>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        <dd>
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">ログイン情報を保存する</label></br>
        </dd>
        <dd>
          <button type="submit" class="btn contact-btn">{{ __('Login') }}</button>
        </dd>
        <dd>
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              パスワードをお忘れですか?
            </a>
          @endif
        </dd>
      </dl>
  </form>
</div>
@endsection
