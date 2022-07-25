<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>


    <link href="resources/css/signin.css" rel="stylesheet" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
   <style>
            html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center !important;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #9c27b0;
  background-image: linear-gradient(120deg, #ff4081, #81d4fa);
}

.card {
  z-index: 0;
  border: none;
  border-radius: 0.5rem;
}

.form-card {
  background: white;
  border: 0 none;
  border-radius: 0px;
  box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
  padding: 20px 40px 30px 40px;
  box-sizing: border-box;
  width: 94%;
  margin: 0 3% 20px 3%;

  /*stacking fieldsets above each other*/
  position: relative;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

   </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-0">
            <div
              class="col-11 col-sm-9 col-md-7 col-lg-6 p-0 mt-3 mb-2"
            >
              <div class="card pt-5 pb-5">
      <main class="form-signin form-card">
        <form action="index" method = "post">
            @csrf
          <h1 class="h3 mb-3 fw-normal text-center">Sign in</h1>

          <div class="form-floating">
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              name="email"
            />
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input
              type="password"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              name="password"
            />
            <label for="floatingPassword">Password</label>
          </div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me" /> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-outline-primary" type="submit">
            Sign in
          </button>
        </form>
      </main>
      </div>
      </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
