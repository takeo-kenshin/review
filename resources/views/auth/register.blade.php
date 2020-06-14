@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class='form-group row'>
                            <label for='gender' class='col-md-4 col-form-label text-md-right'>{{ __('messages.Gender') }}</label>
                        
                            <div class='col-md-6' style="padding-top: 8px">
                                <input id='gender-m' type='radio' name='gender' value='male'>
                                <label for='gender-m'>{{ __('messages.Male') }}</label>
                                <input id='gender-f' type='radio' name='gender' value='female'>
                                <label for='gender-f'>{{ __('messages.Female') }}</label>
                                
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class='form-group row'>
                            <label for='birthday' class='col-md-4 col-form-label text-md-right'>{{ __('messages.Birthday') }}</label>
                        
                            <div class="form-group clearfix">
                                <label for="birth_month" class="sr-only">{{ __('messages.Month') }}</label>
                                    <select name = "birthday" id="m" class="form-control">
                                        <option>{{ __('messages.Month') }}</option>
                                        @for ($month = 1; $month <= 12; $month++)
                                        <option value = "{{ $month }}">{{ $month }}</option>
                                        @endfor
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="birth_day" id="d" class="sr-only">{{ __('messages.Day') }}</label>
                                    <select name = "birthday" class="form-control">
                                        <option>{{ __('messages.Day') }}</option>
                                        @for ($day = 1; $day <= 31; $day++)                    
                                        <option value = "{{ $day }}">{{ $day }}</option>                    
                                        @endfor
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="birth_year" id="y" class="sr-only">{{ __('messages.Year') }}</label>
                                    <select name = "birthday" class="form-control">
                                    <option>{{ __('messages.Year') }}</option>
                                    @for ($year = 1950; $year <= 2020 ; $year++)                  
                                    <option value = "{{ $year }}">{{ $year }}</option>                  
                                    @endfor
                                    </select>
                            </div>
                                
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('messages.E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('messages.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('messages.Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('messages.Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
