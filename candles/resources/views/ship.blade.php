@extends('html_template')

@section('content') 

  <main class="container my-5">
    <section class="row">
      <div class="col">
        <h1>Checkout</h1>
        <hr class="border-3 opacity-50" />
      </div>
    </section>

    <section class="row">
      <div class="col-md-8">
        <form action="#">

        @csrf
          <div class="checkbox-form md-8">
            <h3>Contact information</h3>
            <div class="col-md-12">
              <p>
                <label>Email <span class="required">*</span></label>

                <input type="text" name="email" class="form-control" value = "{{$email}}" required/>
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
                />
                <label class="form-check-label" for="standart">
                  Standart
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
                />
                <label class="form-check-label" for="UPS"> UPS </label>
              </p>
            </div>
            <div class="col-md-12">
              <p>
                <input
                  class="form-check-input"
                  type="radio"
                  name="shipping"
                  id="UPS3D"
                />
                <label class="form-check-label" for="UPS3D">
                  UPS Three-Day Select
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
                />
                <label class="form-check-label" for="UPSAir">
                  UPS Next Day Air
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
                />
                <label class="form-check-label" for="PayPal"> PayPal </label>
              </p>
            </div>
          </div>

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
              <td class="text-center">{{$tax}}€</td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td class="text-center">{{$shipping}}€</td>
            </tr>
            <tr>
              <td>Order total</td>
              <td class="text-center">{{$totalPrice + $tax + $shipping}}€</td>
            </tr>
          </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn main-button">Place Order</a>
      </div>
    </section>
  </main>
@endsection