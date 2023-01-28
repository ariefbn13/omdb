@extends('layouts/layoutMain')

@section('content')

<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
                      <form action="/register" method="post">
                        @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
                              <div class="col-md-6">
                                  <input type="text" id="username" class="form-control" name="username" @error('username') is-invalid @enderror
                                   required autofocus value="{{ old ('username') }}">
                              </div>
                              @error('username')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                          </div>

                          <div class="form-group row mt-3">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                              </div>
                          </div>

                          {{-- <div class="form-group row mt-3">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div> --}}

                          <div class="col-md-6 offset-md-4 mt-3">
                              <button type="submit" class="btn btn-primary ms-4">
                                  Register
                              </button>
                              {{-- <a href="#" class="btn btn-link">
                                  Forgot Your Password?
                              </a> --}}
                          </div>
                  </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  </div>

</main>

<style>
  .my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
</style>






@endsection