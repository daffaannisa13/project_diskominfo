@extends('layouts.app')

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <!-- Add your SVG code here -->
                </svg>
              </span>
              <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Adventure starts here 🚀</h4>
          <p class="mb-4">Make your app management easy and fun!</p>

          <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="********" required />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required />
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="{{ route('terms') }}">privacy policy & terms</a>
                </label>
              </div>
            </div>

            <button class="btn btn-primary d-grid w-100" type="submit">Sign up</button>
          </form>

          <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{ route('login') }}">
              <span>Sign in instead</span>
            </a>
          </p>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
@endsection
