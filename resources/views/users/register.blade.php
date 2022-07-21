@extends('layouts.user')

@section('title')
    <title>{{ "REGISTER".str_replace('APP','',config('app.name')) }}</title>
@endsection

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no width=device-width">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/display.css') }}" rel="stylesheet">
@endsection

@section('content')

        <!-- Form -->
        <form method="POST" class="box max-width formBackColor" action="{{ url()->current() }}">
            @csrf
            <div class="field">
                <label class="label">Name</label>
                <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" name="name" value="{{ old('name') }}" placeholder="">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
                </div>
                @error('name')
                    <p class="help is-danger">
                        @foreach($errors->get('name') as $message){{ $message }}@endforeach
                    </p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Nickname</label>
                <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" name="nickname" value="{{ old('nickname') }}"  placeholder="">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                </div>
                @error('nickname')
                    <p class="help is-danger">
                        @foreach($errors->get('nickname') as $message){{ $message }}@endforeach
                    </p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                </div>
                @error('email')
                    <p class="help is-danger">
                        @foreach($errors->get('email') as $message){{ $message }}@endforeach
                    </p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="password" name="password" placeholder="Password">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
                </div>

            </div>

            <div class="field">
                <label class="label">Password(confirmation)</label>
                <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="password" name="password_confirmation" placeholder="Password(confirmation)">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
                </div>
                @error('password')
                <p class="help is-danger">
                    @foreach($errors->get('password') as $message){{ $message }}@endforeach
                </p>
                @enderror
            </div>
            <div class="field is-grouped">
                <div class="control">
                <button class="button is-link" type="submit">新規登録</button>
                </div>
            </div>
        </form>



@endsection
