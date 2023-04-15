@extends('html_template')

@section('content') 
  <main class="container-xl">
      <section class="row ">
        <div class="col">
          <h1>Search</h1>
          <hr class="border-3 opacity-50" />
        </div>
      </section>
  
      <section>
          <form action="#">
            <div class="row justify-content-center">
                <p class="col-4">
                  <input type="text" name="search" class="form-control" />
                </p>
                <a class="btn main-button col-1 h-50" role="button" href="./checkout.html"
                >Search</a
              >
            </div>
          </form>

      </section>
  </main>
@endsection