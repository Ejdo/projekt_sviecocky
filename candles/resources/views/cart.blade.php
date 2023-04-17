
@extends('html_template')

@section('content') 
  <main class="container my-5">
    <section class="row">
      <div class="col">
        <h1>Your Shopping Cart</h1>
        <hr class="border-3 opacity-50" />
      </div>
    </section>
    <section class="row">
      <div class="col-md-8">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($cartItems as $item)
            <tr>
              <td>
                <img
                  class="me-2"
                  src="{{ $item['photo_path'] }}"
                  width="112"
                  height="112"
                />
                {{ $item['name'] }}
              </td>
              <td>{{ $item['price'] }} €</td>
              <td>
                <input
                  class="text-center me-3"
                  type="num"
                  value="{{ $item['quantity'] }}"
                  style="max-width: 3rem"
                />
                <a href="{{ route('cart.remove', ['id' => $item['id']]) }}" class="fa fa-trash nav-icon"></a>
              </td>
              <td>{{ $item['item_total_price'] }} €</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-md-4 text-center">
        <h2>Order Summary</h2>
        <table class="table">
          <tbody>
            <tr>
              <td>Subtotal</td>
              <td class="text-center">{{$totalPrice}} €</td>
            </tr>
            <tr>
              <td>Order total</td>
              <td class="text-center">{{$totalPrice}} €</td>
            </tr>
          </tbody>
        </table>
        <a class="btn main-button" role="button" href="{{ route('checkout') }}">Checkout</a>
      </div>
    </section>
</main>
@endsection