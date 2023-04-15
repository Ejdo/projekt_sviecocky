@extends('html_template')

@section('content') 

    <div class="row m-0" style="height: 300px; background-color: #e6ddcf">
      <div class="col text-center my-auto mx-5">
        <h1>Candles</h1>
        <p>
          Choose from over 2000 designer and luxury scented candles for every
          setting and olfactory taste.
        </p>
      </div>
      <div class="col d-flex justify-content-end p-0 d-none d-md-flex">
        <img src="../images/candles_header.png" />
      </div>
    </div>

    <main class="container-xl d-flex p-5">
      <aside class="col mx-3 d-none d-sm-flex">
        <div class="flex-shrink-0 bg-white">
          <h4>Filter by</h4>
          <hr class="border-3 opacity-50" />
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button
                class="btn btn-toggle align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#brand-collapse"
              >
                Brand
              </button>
              <div class="collapse" id="brand-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark rounded">Brand 1</a></li>
                  <li><a href="#" class="link-dark rounded">Brand 2</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button
                class="btn btn-toggle align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#product-type-collapse"
              >
                Product Type
              </button>
              <div class="collapse" id="product-type-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark rounded">Type 1</a></li>
                  <li><a href="#" class="link-dark rounded">Type 2</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button
                class="btn btn-toggle align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#scent-family-collapse"
              >
                Scent Family
              </button>
              <div class="collapse" id="scent-family-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark rounded">Scent 1</a></li>
                  <li><a href="#" class="link-dark rounded">Scent 2</a></li>
                </ul>
              </div>
            </li>
            <li class="mb-1">
              <button
                class="btn btn-toggle align-items-center"
                data-bs-toggle="collapse"
                data-bs-target="#color-collapse"
              >
                Color
              </button>
              <div class="collapse" id="color-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-dark rounded">White</a></li>
                  <li><a href="#" class="link-dark rounded">Yellow</a></li>
                  <li><a href="#" class="link-dark rounded">Orange</a></li>
                  <li><a href="#" class="link-dark rounded">Red</a></li>
                  <li><a href="#" class="link-dark rounded">Pink</a></li>
                  <li><a href="#" class="link-dark rounded">Purple</a></li>
                  <li><a href="#" class="link-dark rounded">Blue</a></li>
                  <li><a href="#" class="link-dark rounded">Green</a></li>
                  <li><a href="#" class="link-dark rounded">Brown</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </aside>
      <section class="col-sm-8 col-xl-9 text-center">
        <div class="justify-content-end d-flex">
          <div class="btn-group">
            <h5 class="pe-2">Sort by:</h5>
            <button
              type="button"
              class="btn btn-secondary dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Price: Low to High
            </button>
            <div class="dropdown-menu">
              <button class="dropdown-item" type="button">
                Price: High to Low
              </button>
              <button class="dropdown-item" type="button">Best Selling</button>
            </div>
          </div>
        </div>
        <hr class="border-3 opacity-50" />
        <div class="row">

          @foreach ($products as $product)
            <div class="col-xl-4 col-sm-6 product-card">
              <div class="product-image">
                <a href="{{ route('product_detail',  $product->id) }}">
                  <img src=$product->image_path />
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

        <hr class="border-3 opacity-50" />

        <nav>
          <ul class="page-numbers justify-content-end">
            <li class="page-number-button">
              <a class="page-number-link active" href="{{ route('all_products', 1) }}">1</a>
            </li>
            @for ($i = 1; $i <= $lastPage; $i++)
            <li class="page-number-button">
              <a class="page-number-link" href="{{ route('all_products', $i) }}">{{ $i }}</a>
            </li>
            @endfor
          </ul>
        </nav>

      </section>
    </main>
@endsection