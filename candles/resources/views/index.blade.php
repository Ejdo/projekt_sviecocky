@extends('html_template')

@section('content')   
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="bd-placeholder-img"
            width="100%"
            height="100%"
            src="./images/Carousel/1.png"
            aria-hidden="true"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          >
            <rect width="100%" height="100%" fill="#e6ddcf" />
        </img>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>New Spring Collection</h1>
              <p>
                Indulge in the refreshing scents of the season with our latest
                collection of scented candles, carefully crafted to capture the
                essence of springtime blooms and the rejuvenating energy of the
                outdoors.
              </p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('products') }}">Shop now</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="bd-placeholder-img"
            width="100%"
            height="100%"
            src="./images/Carousel/2.png"
            aria-hidden="true"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          >
            <rect width="100%" height="100%" fill="#e6ddcf" />
        </img>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>New Spring Collection</h1>
              <p>
                Indulge in the refreshing scents of the season with our latest
                collection of scented candles, carefully crafted to capture the
                essence of springtime blooms and the rejuvenating energy of the
                outdoors.
              </p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('products') }}">Shop now</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="bd-placeholder-img"
            width="100%"
            height="100%"
            src="./images/Carousel/3.png"
            aria-hidden="true"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
          >
            <rect width="100%" height="100%" fill="#e6ddcf" />
        </img>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>New Spring Collection</h1>
              <p>
                Indulge in the refreshing scents of the season with our latest
                collection of scented candles, carefully crafted to capture the
                essence of springtime blooms and the rejuvenating energy of the
                outdoors.
              </p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('products') }}">Shop now</a></p>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <main class="container-xl">
      <section class="container marketing my-5">
        <div class="row">
          <div class="col-lg-4">
            <img src="images/1.svg" width="140" />
            <p class="w-75 mx-auto">
              Free shipping on orders €35+ in Europe (carbon-neutral shipping)
            </p>
          </div>
          <div class="col-lg-4">
            <img src="images/2.svg" width="140" />
            <p class="w-75 mx-auto">
              1% for the Planet member + we donate $1 to charity for every
              candle sold
            </p>
          </div>
          <div class="col-lg-4">
            <img src="images/3.svg" width="140" />
            <p class="w-75 mx-auto">
              Safe ingredients, cruelty-free, vegan, no parabens, no phthalates,
              no sulphates
            </p>
          </div>
        </div>
      </section>
      <section class="container my-5">
        <h2 class="text-center mb-5">Trending now</h2>
        <div class="row">
        
          @foreach ($trending as $product)
              <div class="col-xl-3 col-sm-6 product-card">
                <div class="product-image">
                  <a href="{{ route('product_detail',  ['id' => $product->id] ) }}">
                    <img src="{{ asset($product->photo_path) }}" />
                  </a>
                  <a href="{{ route('product_detail',  $product->id) }}" class="add-to-cart">Add to Cart</a>
                </div>
                <div class="row py-2">
                  <p class="col product-name">{{$product->name}}</p>
                  <p class="col price">{{number_format($product->price, 2)}} €</p>
                </div>
              </div>
          @endforeach

        </div>
    </section>
  </main>
 @endsection