<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      width: 100%;
    }
  </style>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Login</h1>
          </div>
          <div class="panel-body">
            <form action="login_process.php" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="pass">Last_name</label>
                <input
                  type="text"
                  class="form-control"
                  id="last_name"
                  name="last_name"
                />
              </div>
              <input type="submit" class="btn btn-primary" value="Login" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Rajat Chaudhary</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
