<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .image{
          width: 300px;
          height: 300px;
          border: 1px solid red;
          background-color: aliceblue;
          margin-top: 20px;
      }
      .image img{
          width: 100%;
          height: 100%;
      }
      .card-img-top{
          width: 70px;
          height: 70px;
      }
      #footer {
          background: #121d24;
          padding: 0 0 30px 0;
          color: #fff;
          font-size: 14px;
        }
        
        #footer .footer-top {
          background: #15222b;
          border-bottom: 1px solid #1d303c;
          padding: 60px 0 30px 0;
        }
        
        #footer .footer-top .footer-info {
          margin-bottom: 30px;
        }
        
        #footer .footer-top .footer-info h3 {
          font-size: 28px;
          margin: 0 0 15px 0;
          padding: 2px 0 2px 0;
          line-height: 1;
          font-weight: 700;
        }
        
        #footer .footer-top .footer-info p {
          font-size: 14px;
          line-height: 24px;
          margin-bottom: 0;
          font-family: "Raleway", sans-serif;
          color: #fff;
        }
        
        #footer .footer-top .social-links a {
          font-size: 18px;
          display: inline-block;
          background: rgba(255, 255, 255, 0.08);
          color: #fff;
          line-height: 1;
          padding: 8px 0;
          margin-right: 4px;
          border-radius: 4px;
          text-align: center;
          width: 36px;
          height: 36px;
          transition: 0.3s;
        }
        
        #footer .footer-top .social-links a:hover {
          background: #ff4a17;
          color: #fff;
          text-decoration: none;
        }
        
        #footer .footer-top h4 {
          font-size: 16px;
          font-weight: 600;
          color: #fff;
          position: relative;
          padding-bottom: 12px;
        }
        
        #footer .footer-top .footer-links {
          margin-bottom: 30px;
        }
        
        #footer .footer-top .footer-links ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }
        
        #footer .footer-top .footer-links ul i {
          padding-right: 2px;
          color: #ff5e31;
          font-size: 18px;
          line-height: 1;
        }
        
        #footer .footer-top .footer-links ul li {
          padding: 10px 0;
          display: flex;
          align-items: center;
        }
        
        #footer .footer-top .footer-links ul li:first-child {
          padding-top: 0;
        }
        
        #footer .footer-top .footer-links ul a {
          color: #fff;
          transition: 0.3s;
          display: inline-block;
          line-height: 1;
        }
        
        #footer .footer-top .footer-links ul a:hover {
          color: #ff4a17;
        }
        
        #footer .footer-top .footer-newsletter form {
          margin-top: 30px;
          background: #fff;
          padding: 6px 10px;
          position: relative;
          border-radius: 4px;
        }
        
        #footer .footer-top .footer-newsletter form input[type=email] {
          border: 0;
          padding: 4px;
          width: calc(100% - 110px);
        }
        
        #footer .footer-top .footer-newsletter form input[type=submit] {
          position: absolute;
          top: 0;
          right: -2px;
          bottom: 0;
          border: 0;
          background: none;
          font-size: 16px;
          padding: 0 20px;
          background: #ff4a17;
          color: #fff;
          transition: 0.3s;
          border-radius: 0 4px 4px 0;
        }
        
        #footer .footer-top .footer-newsletter form input[type=submit]:hover {
          background: #ff5e31;
        }
        
        #footer .copyright {
          text-align: center;
          padding-top: 30px;
        }
        
        #footer .credits {
          padding-top: 10px;
          text-align: center;
          font-size: 13px;
          color: #fff;
        }
        
        #footer .credits a {
          transition: 0.3s;
        }
</style>
<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/master">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="\home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="\about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="\post">All post</a>
                        </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    @guest
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login">login</a></li>
                        <li><a class="dropdown-item" href="register">register</a></li>
                    </ul>
                    @endguest
                    @auth
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Hi! {{auth()->user()->name}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/my-profile">profile</a></li>
                      <li><a class="dropdown-item" href="/my-post">post</a></li>
                      <li><a class="dropdown-item" href="/logout">logout</a></li>
                  </ul>
                    @endauth
                    </li>
                </ul>
                <form class="d-flex" action="/post" method="get">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
               {{session()->get('success')}}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger text-danger" role="alert">
               {{session()->get('error')}}
        </div>
        @endif
        {{ $slot }}
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
        
            <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            </div>
             </footer>
   
  </div>