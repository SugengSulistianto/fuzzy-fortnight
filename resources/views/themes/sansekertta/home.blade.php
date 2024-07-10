@extends('themes.sansekertta.layouts.app')
@include('themes.sansekertta.shared.slider')
@section('content')
 <!-- Popular -->
 <section class="popular">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <h1>Popular</h1>
          </div>
          <div class="col-6 text-end">
            <a href="#" class="btn-first">View All</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/sansekertavol3black1.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Sansekertta Vol 3 Black</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 120.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/sansekertavol3white.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Sansekertta Vol 3 White</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 120.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/sansbleach.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Snskrt X Blchvoid vol 1</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 120.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="#"><img src="{{ asset( 'themes/sansekertta/assets//img/sansekertavol4blkng.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Sansekertta Vol 4 Blue</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 120.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest -->
    <section class="latest">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <h1>Lainnya</h1>
          </div>
          <div class="col-6 text-end">
            <a href="product.html" class="btn-first">View All</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/asbak2.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Asbak</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 70.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/travelpilowwhite1.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Travell Pillow White</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 70.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/travelpilowkhaki.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Travell pillow khaki</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 70.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="{{ asset( 'themes/sansekertta/assets//img/travelpilowblack.jpg') }}" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Travell Pillow Black</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 70.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Subscribe  -->
    <section class="subscribe">
      <div class="container">
        <div class="subscribe-wrapper">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-md-7 col-10 col-sub">
              <h1>Subscribe to get latest updates!</h1>
              <form action="#" class="mt-5">
                <div class="input-group w-100">
                  <input type="email" class="form-control" placeholder="Type your email ..">
                  <button class="btn btn-outline-warning">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
