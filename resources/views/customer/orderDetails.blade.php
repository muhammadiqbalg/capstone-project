<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Hang Siji</title>

    {{-- Google Web Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{asset('detail.css')}}">

    {{-- Animation Website --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
    {{-- Navbar Start --}}
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container p-lg-3">
            <a class="navbar-brand text-white" href="#" style="font-weight: 700; font-family:'Poppins'; font-size:1.5rem;">Hang Siji</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Profil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tracking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> --}}
              </ul>
              <img src="{{asset('assets/img/user.jpg')}}" alt="" class="user-pic" onclick="toggleMenu()">
              <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu shadow">
                  <div class="user-info">
                    <img src="{{asset('assets/img/user.jpg')}}" alt="">
                    <h4 class="text-white">{{ Auth::user()->name }}</h2>
                  </div>
                  <hr>

                  <a href="#" class="sub-menu-link">
                    <div class="content-left">
                      <img src="{{asset('assets/img/profile.png')}}" alt="">
                    </div>
                    <div class="content-right">
                      <p>Edit Profile</p>
                      <span>&gt;</span>
                    </div>
                  </a>
                  <a href="#" class="sub-menu-link">
                    <div class="content-left">
                      <img src="{{asset('assets/img/setting.png')}}" alt="">
                    </div>
                    <div class="content-right">
                      <p>Setting</p>
                      <span>&gt;</span>
                    </div>
                  </a>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" class="sub-menu-link" onclick="event.preventDefault(); this.closest('form').submit();">
                      <div class="content-left">
                        <img src="{{asset('assets/img/logout.png')}}" alt="">
                      </div>
                      <div class="content-right">
                        <p>Logout</p>
                        <span>&gt;</span>
                      </div>
                    </a>      
                  </form>
                </div>
              </div>
            </div>
          </div>
      </nav>
    </div>
    {{-- Navbar End --}}

    {{-- Start Content --}}
    <section class="hero">
      <div class="container-fluid d-flex justify-content-center mt-5" style="background-color: #212529; height:90px;">
        <div class="row h-100">
          <div class="d-flex text-white text-center align-items-center" style="font-size: 20px">
                <p>Detail your order</p>
          </div>
        </div>
      </div>
      {{-- End Content --}}

      {{-- Start Section --}}
      
    <section class="hero">
      <form method="POST">
        @csrf
        <div class="container">
          <div class="col-sm">
        <table class="table" style="background: #fff">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><img src="{{ asset("assets/img/product.jpeg") }}" class="img-fluid rounded-start" style="max-width: 100%;" alt="..."></th>
              <td>Product 1</td>
              <td><input type="number" value="1" class="price form-control-sm"></td>
              <td>Rp25.000</td>
            </tr>
        </table>
      </div>
      </div>
      {{-- End Section --}}
      
      {{-- Start Price --}}
      <div class="container text-center">
        <div class="card">
            <div class="card-body">
                <div class="row price">
                    <div class="col-8">Total Price</div>
                    <div class="col-4">Rp25.000</div>
                  </div>
            </div>
          </div>
      </div>
      {{-- End Price --}}

      {{-- Start Button --}}
      <div class="button m-3">
      <div class="btn d-flex justify-content-center mx-5">
      <button class="btn get-started text-white form-control" style="background-color: #EB1616;">Payment</button><br>
      </div>
      {{-- End Button --}}
    </form>

    

    </section>
</body>
    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Animation Website --}}
   {{--  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script> --}}

    
    <script>
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function(){
          if(window.pageYOffset > 60){
              nav.classList.add('bg-dark', 'shadow')
          } else {
              nav.classList.remove('bg-dark', 'shadow')
          }
      })

      window.addEventListener('scroll', function() {
        var backToTopButton = document.querySelector('.back-to-top');
        if (window.scrollY > 300) { // Ubah nilai 300 sesuai dengan posisi scroll yang diinginkan
          backToTopButton.classList.add('show');
        } else {
          backToTopButton.classList.remove('show');
        }
      })

      let subMenu = document.getElementById("subMenu");
      function toggleMenu(){
        subMenu.classList.toggle("open-menu");
      }

    </script>
</body>
</html>