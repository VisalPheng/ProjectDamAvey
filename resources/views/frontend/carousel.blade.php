<!-- Carousel -->
<div class="header-slide">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/bg-home.jpg" class="w-100" alt="...">
        <div class="carousel-caption">
          <h1>ដាំដំណាំគ្រប់មុខ គ្រប់គ្នា គ្រប់ទីកន្លែង</h1>
          <br>
          <a href="{{ route('products') }}" <i class="fa fa-arrow-right" aria-hidden="true"></i> ស្វែងរកប្រភេទដំណាំ</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="w-100" alt="...">
        <div class="carousel-caption">
          <h1>ប្រភេទដំណាំទាំងអស់នៅក្នុងដៃអ្នក</h1>
          <a href="{{ route('products') }}" <i class="fa fa-arrow-right" aria-hidden="true"></i> ទៅកាន់ដំណាំតាមប្រភេទ</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="w-100" alt="...">
        <div class="carousel-caption">
          <h1>ស្វែងរកដំណាំតាមតំបន់ដែលអ្នកត្រូវការ</h1>
          <a href="{{ route('productsbyregion') }}" <i class="fa fa-arrow-right" aria-hidden="true"></i> ស្វែងរកដំណាំតាមតំបន់</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--  -->
