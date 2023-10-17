<nav class="navbar navbar-expand-lg  mt-0 my-2 fixed-top" id="navbar">
    <div class="container-fluid mt-3">
         <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="{{asset('media/logo.png')}}" class="apple" alt="Logo">
         </a>
  
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav "
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
  
        <div class="collapse navbar-collapse bg-body " id="navbarNav">
            <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 150px --bs-scroll-width: 50px ">
                <li class="nav-item">
                    <a class="nav-link mx-4 fs-5" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4 fs-5" href="">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4 fs-5" href="">Products</a>
                </li>
                
                @guest 
                <div class="authbtn  d-flex">
                    <li class="nav-item ">
                      <a class="nav-link mx-4 fs-5" href="{{route('login')}}">login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mx-4 fs-5" href="{{route('register')}}">register</a>
                    </li>
                </div>
                @else
                <li class="nav-item">
                    <a class="nav-link mx-4 fs-5" href="{{ route('announcements.create') }}">create announcement</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }} 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                        </li>
                        <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </ul>
                </li>
                @endguest
            </ul>
  
        </div>
    </div>
  </nav>
  