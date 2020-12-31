@extends('frontend.master')
@section('title', 'Home')
@section('content')
    <!-- Monthly Popular -->
    <section id="monthlypopular">
        <div class="monthly-popular">
          <div class="container">
            <h4>ដំណាំដែលពេញនិយមក្នុងខែនេះ</h4>
            <br>
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4">
                <div class="card">
                  <img src="img/peas.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">សណ្តែក</a></h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="img/carrot.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">ការ៉ុត</a></h5>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="img/salad.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">សាឡាដ</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  -->

      <!-- Daily Popular -->
      <section id="dailypopular">
        <div class="daily-popular">
          <div class="container">
            <h4>ដំណាំដែលពេញនិយមក្នុងថ្ងៃនេះ</h4>
            <br>
            <div class="card-slide">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-3">
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/peas.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">សណ្តែក</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/carrot.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">ការ៉ុត</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/salad.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">សាឡាដ</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-3">
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/peas.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">សណ្តែក</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/carrot.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">ការ៉ុត</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/salad.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">សាឡាដ</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-3">
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/peas.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">សណ្តែក</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/carrot.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">ការ៉ុត</a></h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/salad.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><a href="">សាឡាដ</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!--  -->

@endsection
