<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">

    <script src="js/navbar.js"></script>
    <title>
        អំពីពួកយើង | ដាំអ្វី
    </title>
</head>

<body>
    <section id="header">
        <header>
            <!-- Navbar -->
            <div class="container">
              <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="img/damaveyblack.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">ទំព័រដើម</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">ប្រភេទដំណាំ</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('productsbyregion') }}">ដំណាំតាមតំបន់</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('aboutus') }}">អំពីពួកយើង</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
            <!--  -->

        </header>
    </section>

    <!-- Body  -->
    <section class="body">
        <div class="container">
             <div class="upper-top-body upper-top-text">
                 <h1>អំពីពួកយើង</h1>
                 <h5 style="font-weight: bold;">&</h5>
                 <p>គោលដៅរបស់ពួកយើង</p>
             </div>
            <p>&nbsp;</p>

            <div class="row" style="padding-top: 30px;">
                <div class="col-lg-6 below-img for-media " style="text-align: center;" >
                    <img src="img/damaveyblack.png" alt="">
                </div>
                <div class="col-lg-6 below-text">
                    <h3>ចក្ខុវិស័យរបស់យើង និង ក្តីស្រមៃរបស់ ដាំអ្វី</h3>
                    <br>
                    <p>ដាំអ្វីគឺជាកន្លែងមួយដែលប្រមូលផ្តុំទៅដោយឯកសារប្រភេទដំណាំនានានិងជាកន្លែងមួយដែលបង្ហាញពីការដាំដំណាំទាំងនោះដោយច្បាស់លាស់។ ដាំអ្វីបង្កើតឡើងក្នុងគោលបំណងចង់ចែករំលែកចំណេះដឹងដាំដុះកសិផលទៅកាន់ប្រជាជនកម្ពុជាទាំងអស់អោយយល់ដឹងពីប្រភេទដំណាំនានារបស់កម្ពុជាយើង</p>
                </div>
               
            </div>

    <!--  -->
   
            <section class="ourteam">
                <h3 class="our-team-head">ក្រុមរបស់យើង</h3>
                <div class="container" style="padding-top: 10%;">
                    <div class="row">
                       <div class="col-lg-4 mx-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('img/sal.jpg')}}" alt="Pheng Visal">
                            <p></p>
                            <h4 class="card-text text-center">ផេង វិសាល</h4>
                      </div>
                      <div class="col-lg-4 mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/heng.jpg')}}" alt="Ny Sokheng">
                        <p></p>
                        <h4 class="card-text text-center">នី សុខហេង</h4>
                  </div>
                  <div class="col-lg-4 mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/samnang.jpg')}}" alt="Pov Samnang">
                        <p></p>
                        <h4 class="card-text text-center">ពៅ សំណាង</h4>
              </div>
                    </div>
                </div>
            </section>
     </div>
 </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-dark">
          <footer>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-md-3 item">
                          <img src="img/damaveywhite.png" alt="">
                      </div>
                      <div class="col-sm-6 col-md-3 item">
                          <h3>ទំនាក់ទំនងពួកយើង</h3>
                          <ul>
                              <li><a href="mailto:info@damavey.com">info@damavey.com</a></li>
                              <li><a>012 345 678</a></li>
                          </ul>
                      </div>
                      <div class="col-md-6 item text">
                          <h3>ដាំអ្វី | DamAvey</h3>
                          <p>ដាំអ្វីគឺជាកន្លែងមួយដែលប្រមូលផ្តុំទៅដោយឯកសារប្រភេទដំណាំនានានិងជាកន្លែងមួយដែលបង្ហាញពីការដាំដំណាំទាំងនោះដោយច្បាស់លាស់។ ដាំអ្វីបង្កើតឡើងក្នុងគោលបំណងចង់ចែករំលែកចំណេះដឹងដាំដុះកសិផលទៅកាន់ប្រជាជនកម្ពុជាទាំងអស់អោយយល់ដឹងពីប្រភេទដំណាំនានារបស់កម្ពុជាយើង</p>
                      </div>
                      <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                  </div>
                  <p class="copyright">&copy; រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ DamAvey</p>
              </div>
          </footer>
      </div>
      </footer>
      <!--  -->
  </body>
  </html>
