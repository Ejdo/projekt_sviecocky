@extends('html_template')

@section('content') 
  <main class="container-xl mt-5">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <h1>Profile</h1>
      <hr class="border-3 opacity-50" />
      <p><strong>First Name:</strong> {{ $user->first_name}} </p>
      <p><strong>Last Name:</strong> {{ $user->last_name}} </p>
      <p><strong>Email:</strong> {{ $user->email}} </p>
      <p><strong>Phone Number:</strong> {{ $user->phone_number}} </p>
      <p><strong>Address:</strong> 123 Main St, Anytown USA</p>

      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class = "btn-create-account" type="submit">Logout</button>
      </form>
</main>
@endsection
