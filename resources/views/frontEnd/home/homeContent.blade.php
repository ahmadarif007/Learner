@extends('frontEnd.master')

@section('title')
Home
@endsection

@section('mainContent')

  <main>
    <div class="container">

      @foreach( $products as $product )
      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" class="img-fluid z-depth-1-half" style="height: 500px; width: 600px">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">{{$product->productName}}</h3>
            <p style="text-align:justify;">{{$product->productDescription}}</p>
            <!-- Main heading -->
            <hr>
            <!-- CTA -->
            <a target="_blank" href="#" class="btn btn-indigo btn-md">Add To Cart
            </a>
            <a target="_blank" href="#" class="btn btn-indigo btn-md">View Details
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->
      @endforeach

      <hr class="my-5">

    </div>
  </main>

@endsection