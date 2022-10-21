@extends('layout')
@section('content')

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Prihlásenie</div>
                        <div class="card-body">
                            <form action="{{ route('login.post') }}" method="POST">

                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="heslo" class="col-md-4 col-form-label text-md-right">Heslo</label>
                                    <div class="col-md-6">
                                        <input type="password" id="heslo" class="form-control" name="password" required>
                                        @if ($errors->has('heslo'))
                                            <span class="text-danger">{{ $errors->first('heslo') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Prihlásiť
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
