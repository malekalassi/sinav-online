@extends('layouts.app')

@section('content')
<div class="container " style="background-color: #08AEEA;
background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="tab1 mx-2">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control kutu px-3" class=" @error('name') is-invalid @enderror" id="name" placeholder="name"
                                               name="name" value="{{ old('name') }}" autofocus required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control kutu px-3" class=" @error('surname') is-invalid @enderror" id="surname" placeholder="surname"
                                               name="surname" value="{{ old('surname') }}" autofocus required>
                                        @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control kutu px-3" class=" @error('email') is-invalid @enderror" id="email" placeholder="email"
                                           name="email" value="{{ old('email') }}" autofocus required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="password" class="form-control kutu px-3" class=" @error('password') is-invalid @enderror" id="password" placeholder="password"
                                           name="password" value="{{ old('password') }}" autofocus required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">

                                    <input id="password-confirm" type="password" class="form-control kutu px-3" name="password_confirmation" required autocomplete="new-password">
                                    @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mx-1">
                                <div class="col-md-5">

                                    <label class="kutus">Öğrenci
                                        <input type="radio" checked="checked" value="ogrenci" name="account_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-5">
                                    <label class="kutus">Hoca
                                        <input type="radio" value="hoca" name="account_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn buton">Giriş</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
