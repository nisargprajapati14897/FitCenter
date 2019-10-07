<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="#">
          <h1 class="tm-site-title mb-0">Admin Equipment</h1>
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
                aria-expanded="false"
              >
                <i class="far fa-file-alt"></i>
                <span> products <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="/products">Health Products</a>
                 <a class="dropdown-item" href="/equipments">Gym Equipments</a>
                 <a class="dropdown-item" href="/doctors">Doctor</a>
              </div>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link " href="#">
                <i class="fas fa-shopping-cart"></i> Fitness Tips
              </a>
            </li>-->

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
                aria-expanded="false"
              >
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
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
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Packages</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form method="POST" action="{{url('add-packages')}}" enctype="multipart/form-data" class="tm-edit-product-form">
                  {{ csrf_field() }}

                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Package Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Price</label
                    >
                    <input
                      class="form-control validate"
                      rows="3"
                      type="number"
                      name="price"
                      id="price"
                      required
                    ></input>
                  </div>
                  <div class="form-group mb-3">
                    <label
                    for="expire_date"
                    >validity
                  </label>
                  <input
                    id="validity"
                    name="validity"
                    type="text"
                    class="form-control validate"
                    data-large-mode="true"
                    required
                  />
                  </div>
                      <div class="form-group mb-3">
                        <label
                        for="id"
                        >Trainning Overview
                      </label>
                      <input
                        id="pid"
                        name="toverview"
                        type="text"
                        class="form-control validate"
                        placeholder="yes or no"
                        required
                      />
                        
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="form-group mb-3">
                  <label
                  for="id"
                  >Foundation Trainning
                </label>
                <input
                  id="pid"
                  name="foundation"
                  type="text"
                  class="form-control validate"
                  placeholder="yes or no"
                  required
                />
                  </div>

                  <div class="form-group mb-3">
                    <label
                    for="id"
                    >Begineer Class
                  </label>
                  <input
                    id="pid"
                    name="begineer"
                    type="text"
                    class="form-control validate"
                    placeholder="yes or no"
                    required
                  />
                    </div>

                    <div class="form-group mb-3">
                      <label
                      for="id"
                      >Olympic Weightlifting
                    </label>
                    <input
                      id="pid"
                      name="olympic"
                      type="text"
                      class="form-control validate"
                      placeholder="yes or no"
                      required
                    />
                      </div>

                      <div class="form-group mb-3">
                        <label
                        for="id"
                        >Steam Bath
                      </label>
                      <input
                        id="pid"
                        name="steam"
                        type="text"
                        class="form-control validate"
                        placeholder="yes or no"
                        required
                      />
                        </div>
                  
            </div>
                

                
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Package Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2019</b> All rights reserved. 
                    
                    Design By: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Students of LJ</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>
   