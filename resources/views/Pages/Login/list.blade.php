<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://demo.bootstrapdash.com/purple-admin-free/assets/css/style.css">

</head>

<body>
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form action="{{route('pages.login.post')}}" method="post">
                @csrf

                <h3 class="mb-5">Sign in</h3>

                <div class="form-outline mb-4">
                  <input required name="email" type="email" id="typeEmailX-2" class="form-control form-control-lg" name="email" />
                  <label class="form-label" for="typeEmailX-2">Email</label>
                </div>
                <div class="form-outline mb-4">
                  <input required name="password" type="text" id="typePasswordX-2" class="form-control form-control-lg" name="password" />
                  <label class="form-label" for="typePasswordX-2">Password</label>
                </div>

                <!-- Checkbox -->

                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script src="https://demo.bootstrapdash.com/purple-admin-free/assets/vendors/chart.js/Chart.min.js"></script>

</html>