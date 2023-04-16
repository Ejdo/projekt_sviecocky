@extends('html_template')

@section('content') 
  <main class="container-xl">
      <section class="container-fluid my-5">
        <div class="row my-4 align-items-center">
          <div class="col-md-6">
            <img src="{{ asset($product->image_path) }}" class="product-image-lg" />
          </div>
          <div class="col-md-6 my-4">
            <h1>$product->name</h1>
            <div class="mt-4 mb-2 product-price">
              <span class="text-decoration-line-through">$product->price €</span>
              <span>$product->price €</span>
            </div>
            <div class="d-flex">
              <input
                class="text-center me-3"
                type="num"
                value="1"
                style="max-width: 3rem"
              />
              <button class="btn main-button" type="button">Add to cart</button>
            </div>
          </div>
        </div>
      </section>

      <section class="container my-5">
        <section class="container marketing">
          <div class="row">
            @foreach ($product->scents as $scent)
              <div class="col-lg-4">
                <img src= "{{ asset($scent->image_path) }}" width="140" />
                <p class="w-75 mx-auto">
                  $scent->description
                </p>
              </div>
            @endforeach
          </div>
        </section>
      </section>

      <section class="container my-5">
        <div class="row align-items-center gx-5">
          <article class="col-lg-6">
            <h3>Item Description</h3>
            <p>
              $product->description
            </p>
          </article>
          <article class="col-lg-6 gy-5">
            <h4>Burn Hours</h4>
            <p>$product->burn_hours</p>
            <h4>Ingredients</h4>
            <p>$product->ingredients</p>
          </article>
        </div>
      </section>

      <section class="container my-5">
        <h2 class="text-center mb-5">You may also like</h2>
        <div class="row">
          
          @foreach ($trending as $product)
            <div class="col-xl-3 col-sm-6 product-card">
              <div class="product-image">
                <a href="{{ route('product_detail',  $product->id) }}">
                  <img src="{{ asset('images/' . $product->image_path) }}" />
                </a>
                <a href="#" class="add-to-cart">Add to Cart</a>
              </div>
              <div class="row py-2">
                <p class="col product-name">$product->name</p>
                <p class="col price">$product->price</p>
              </div>
            </div>
          @endforeach

        </div>
      </section>
  </main>
@endsection