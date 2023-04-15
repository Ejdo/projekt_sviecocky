@extends('html_template')

@section('content') 
  <main class="container-xl">
      <section class="container-fluid my-5">
        <div class="row my-4 align-items-center">
          <div class="col-md-6">
            <img src="./images/candle5.jpg" class="product-image-lg" />
          </div>
          <div class="col-md-6 my-4">
            <h1>Mocha Travel Candle</h1>
            <div class="mt-4 mb-2 product-price">
              <span class="text-decoration-line-through">35.00 €</span>
              <span>28.00 €</span>
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
            <div class="col-lg-4">
              <img src="./images/coffee.svg" width="140" />
              <p class="w-75 mx-auto">
                Dominant note in mocha scented candles, providing a warm and
                energizing fragrance that can help stimulate the senses.
              </p>
            </div>
            <div class="col-lg-4">
              <img src="./images/chocolate.svg" width="140" />
              <p class="w-75 mx-auto">
                The sweet and indulgent scent of chocolate is another key
                component providing a rich and satisfying aroma
              </p>
            </div>
            <div class="col-lg-4">
              <img src="./images/vanilla.svg" width="140" />
              <p class="w-75 mx-auto">
                The subtle and comforting fragrance of vanilla is often added to
                mocha scented candles to provide a sweet and creamy base note,
              </p>
            </div>
          </div>
        </section>
      </section>

      <section class="container my-5">
        <div class="row align-items-center gx-5">
          <article class="col-lg-6">
            <h3>Item Description</h3>
            <p>
              Our scented candle with mocha fragrance is the perfect addition to
              any room, filling it with a warm and inviting aroma that will make
              you feel right at home. Made with high-quality essential oils and
              natural soy wax, this candle is long-lasting and eco-friendly, so
              you can enjoy the rich scent without worrying about harmful
              chemicals or pollutants. With a burn time of up to 50 hours, this
              candle will keep your home smelling delicious for days on end,
              providing a cozy and comforting ambiance that's perfect for
              relaxing evenings at home.
            </p>
          </article>
          <article class="col-lg-6 gy-5">
            <h4>Burn Hours</h4>
            <p>10 hours</p>
            <h4>Ingredients</h4>
            <p>
              100% soy wax made in the USA, FSC-certified wood wick, and
              fragrance oils (paraben-free, phthalate-free, vegan and
              cruelty-free)
            </p>
          </article>
        </div>
      </section>

      <section class="container my-5">
        <h2 class="text-center mb-5">You may also like</h2>
        <div class="row">
          <div class="col-xl-3 col-sm-6 product-card">
            <div class="product-image">
              <a href="/product.html">
                <img src="./images/candle1.jpg" />
              </a>
              <a href="#" class="add-to-cart">Add to Cart</a>
            </div>
            <div class="row py-2">
              <p class="col product-name">Apple & Sweet Fig</p>
              <p class="col price">9.00 €</p>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 product-card">
            <div class="product-image">
              <a href="#">
                <img src="./images/candle2.jpg" />
              </a>
              <a href="#" class="add-to-cart">Add to Cart</a>
            </div>
            <div class="row py-2">
              <p class="col product-name">Spiced Orange</p>
              <p class="col price">9.00 €</p>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 product-card">
            <div class="product-image">
              <a href="#">
                <img src="./images/candle3.jpg" />
              </a>
              <a href="#" class="add-to-cart">Add to Cart</a>
            </div>
            <div class="row py-2">
              <p class="col product-name">Aloe Vera</p>
              <p class="col price">9.00 €</p>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 product-card">
            <div class="product-image">
              <a href="#">
                <img src="./images/candle4.jpg" />
              </a>
              <a href="#" class="add-to-cart">Add to Cart</a>
            </div>
            <div class="row py-2">
              <p class="col product-name">Black Cherry</p>
              <p class="col price">9.00 €</p>
            </div>
          </div>
        </div>
      </section>
  </main>
@endsection