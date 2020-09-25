@extends('layout.main')

@section('title', 'Register')

@section('container')
<div class="abs-tbl bg-2 w-20 z--1 dplay-md-none\"></div>
<div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
<div class="container">
    <section class="main-section">
        <div class="content">
            <h1 class="mb-4">Queen Burger</h1>
            <h4 class="mb-4-1">Register Account</h4>
            <div class="container col-md-6">
            <form action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="alamat">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="alamat">Name:</label>
                    <input type="text"  class="form-control" id="name" name="name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection
