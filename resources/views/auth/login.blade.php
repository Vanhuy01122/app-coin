@extends('layouts.auth-master')

@section('content')
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <img src="{{asset('assets/admin/images/logos/dark-logo.svg')  }}" width="180" alt="">
                        </a>

                        <form method="post" action="{{ route('login.perform') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            @include('layouts.partials.messages')
                            <div class="mb-3">
                                <label for="floatingName" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                       placeholder="Username" required="required" autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="floatingPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                       value="{{ old('password') }}" placeholder="Password" required="required">
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input primary" type="checkbox" value=""
                                           id="flexCheckChecked" checked>
                                    <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Ghi nhớ
                                    </label>
                                </div>
                                <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
