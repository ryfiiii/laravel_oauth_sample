<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OAuth-Sample</title>
</head>

<body>

    @if (session('message'))
    <p>{{ session('message') }}</p>
    @endif

    <div>
        @if (Auth::check())
        <p>ログイン中</p>
        <p>{{ Auth::user()->name }}</p>
        <img src="{{ Auth::user()->avatar }}" width="100" height="100" style="border-radius: 25px;">
        <button>
            <a href="{{ route('logout') }}">ログアウト</a>
        </button>
        @else
        <button>
            <a href="{{ route('auth.provider', ['provider' => 'github']) }}">Github認証</a>
        </button>
        <button>
            <a href="{{ route('auth.provider', ['provider' => 'google']) }}">Google認証</a>
        </button>
        @endif
    </div>

</body>

</html>