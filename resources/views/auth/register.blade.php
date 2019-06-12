@extends('layouts.app')

@section('content')
    <div class="contact-form">
        <h2 class="icon">新規登録</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <dl>
                <dt>お名前</dt>
                <dd><input id="name" type="text" class="name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></dd>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                <dt>メールアドレス</dt>
                <dd><input id="email" type="email" class="email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></dd>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <dt>パスワード</dt>
                <dd><input id="password" type="password" class="password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"></dd>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <dt>パスワード再確認</dt>
                <dd><input id="password-confirm" type="password" class="password" name="password_confirmation" required autocomplete="new-password"></dd>
                <dd>
                    <button type="submit" class="btn contact-btn">{{ __('Register') }}</button>
                </dd>
            </dl>
        </form>
    </div>
@endsection
