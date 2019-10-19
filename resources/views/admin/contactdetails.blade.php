<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fit-Center Admin</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="/index">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="/index">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="far fa-file-alt"></i>
                <span> products <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="/products">Health Products</a>
                 <a class="dropdown-item" href="/equipments">Gym Equipments</a>
                 <a class="dropdown-item" href="/doctors">Doctor</a>
                 <a class="dropdown-item" href="/packages">Membership</a>
              </div>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-shopping-cart"></i> Fitness Tips
                </a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="/membershipstatus">
                   <i class="far fa-grin-tongue-squint"></i>
                   Membership Status
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="/accounts">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> History <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/pastorder">Pastorder</a>
                <a class="dropdown-item" href="/doctorstatus">Doctor Status</a>
                <a class="dropdown-item" href="/contactdetails">User Contacts</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="/login">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back     <b>Admin</b></p>
                </div>
            </div>
            
<div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">User's contact Details</h2>
                        <table class="table">
                            <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">User NAME</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>

                 @foreach($data as $value)

                <tr>
                    <th scope="row"></th>
                    <td class="tm-product-name">{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->message }}</td>
                    <td>
                      <a href= "/contact/{{$value->id}}"   class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                </tr>
                  @endforeach

                           </tbody>
                         </table>
                      </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>


    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2019</b> All rights reserved. 
          
          Design By: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Students of LJ</a>        </p>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>