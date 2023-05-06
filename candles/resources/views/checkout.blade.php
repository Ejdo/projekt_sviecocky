@extends('html_template')

@section('content') 
@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

  <main class="container my-5">
    <section class="row">
      <div class="col">
        <h1>Checkout</h1>
        <hr class="border-3 opacity-50" />
      </div>
    </section>

    <section class="row">
      <div class="col-md-8">
        <form method="POST" action="{{ route('checkout.update') }}">
        @csrf
        <input type="hidden" name="cart" value="{{ json_encode(session()->get('cart')) }}">
          <div class="checkbox-form md-8">
            <h3>Contact information</h3>
            <div class="col-md-12">
              <p>
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" class="form-control" value = "{{$mail}}" required/>
              </p>
            </div>
          </div>
          <div class="checkbox-form md-8">
            <h3>Billing Details</h3>
            <div class="row">
              <div class="col-md-6">
                <p>
                  <label>First name <span class="required">*</span></label>
                  <input type="text" name="fname" class="form-control" value = "{{$name}}" required/>
                </p>
              </div>
              <div class="col-md-6">
                <p>
                  <label>Last name <span class="required">*</span></label>
                  <input type="text" name="lname" class="form-control" value = "{{$surname}}" required/>
                </p>
              </div>
              <div class="col-md-12">
                <p>
                  <label>Street Adress <span class="required">*</span></label>
                  <input type="text" name="adress" class="form-control" value = "{{$address}}" required/>
                </p>
              </div>
              <div class="col-md-6">
                <p>
                  <label>City <span class="required">*</span></label>
                  <input type="text" name="city" class="form-control" value = "{{$city}}" required/>
                </p>
              </div>
              <div class="col-md-6">
                <p>
                  <label>Country <span class="required">*</span></label>
                  <input type="text" name="country" class="form-control" value = "{{$country}}" required/>
                </p>
              </div>
              <div class="col-md-12">
                <p>
                  <label>ZIP CODE <span class="required">*</span></label>
                  <input type="text" name="zcode" class="form-control" value = "{{$postal}}" required/>
                </p>
              </div>
              <div class="col-md-12">
                <p>
                  <label>Phone number <span class="required">*</span></label>
                  <input type="text" name="pnumber" class="form-control" value = "{{$number}}" required />
                </p>
              </div>
            </div>
          </div>
          <div class="checkbox-form md-8">
            <h3>Shipping</h3>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="shipping"
                  id="standart"
                  value="2.49"
                  required
                />
                <label class="form-check-label" for="standart">
                  Standart (2.49€) - 7 days
                </label>
              </p>
            </div>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="shipping"
                  id="UPS"
                  value="3.49"
                />
                <label class="form-check-label" for="UPS"> UPS (3.49€) - 5 days </label>
              </p>
            </div>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="shipping"
                  id="UPS3D"
                  value="5.99"
                />
                <label class="form-check-label" for="UPS3D">
                  UPS Three-Day Select (5.99€) - 3 days
                </label>
              </p>
            </div>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="shipping"
                  id="UPSAir"
                  value="6.99"
                />
                <label class="form-check-label" for="UPSAir">
                  UPS Next Day Air (6.99€) -  2 days
                </label>
              </p>
            </div>
          </div>
          <div class="checkbox-form md-8">
            <article>
              <h3>Payment</h3>
              <p>All transactions are secure and encrypted.</p>
            </article>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="payment"
                  id="card"
                  value="card"
                  required
                />
                <label class="form-check-label" for="card"> Credit card </label>
              </p>
            </div>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="payment"
                  id="PayPal"
                  value="PayPal"
                />
                <label class="form-check-label" for="PayPal"> PayPal </label>
              </p>
            </div>
          </div>
          <button type="submit" class="btn main-button">
            Check Information
          </button>
        </form>
      </div>
      
      <div class="col-md-4 text-center">
        <h2>Order Summary</h2>
        <table class="table">
          <tbody>
            <tr>
              <td>Subtotal</td>
              <td class="text-center">{{$totalPrice}}€</td>
            </tr>
            <tr>
              <td>Tax</td>
              <td class="text-center">{{$tax}} €</td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td class="text-center">0€</td>
            </tr>
            <tr>
              <td>Order total</td>
              <td class="text-center">{{$totalPrice + $tax}}€</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>
@endsection