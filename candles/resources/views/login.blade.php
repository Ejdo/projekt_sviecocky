@extends('html_template')

@section('content') 
  <main class="container-xl mt-5">
      <h1>Customer Login</h1>
      <hr class="border-3 opacity-50" />
      <div class="row mt-5">
        <div class="col-md-6 me-5">
          <h2>Registered Customers</h2>
          <p>If you have an account, sign in with your email address.</p>
          <form>
            <div class="form-group">
              <label for="username">Email</label>
              <input type="text" class="form-control" id="username" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" />
            </div>
            <a href="{{ route('home') }}" class="btn-create-account">Login</a>
          </form>
        </div>
        <div class="col-md-5">
          <h2>New Customers</h2>
          <p>
            Creating an account has many benefits: check out faster, keep more
            than one address, track orders and more.
          </p>
          <a href="{{ route('register') }}" class="btn-create-account">Register</a>
        </div>
      </div>
</main>
@endsection
