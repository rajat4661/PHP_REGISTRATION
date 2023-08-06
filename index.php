<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
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
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="insert.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="first_name"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="last_name"
                />
              </div>
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
                <label for="department">Department</label>
                <input
                  type="text"
                  class="form-control"
                  id="department"
                  name="department"
                />
              </div>
              <div class="form-group">
                <label for="mobileNumber">Mobile Number</label>
                <input
                  type="tel"
                  class="form-control"
                  id="mobileNumber"
                  name="mobile_number"
                />
              </div>
			  
              <input type="submit" class="btn btn-primary" value="Register" />
            </form>
            <div class="btn btn-primary" style="text-align: center; margin-top: 20px;">
              <a href="./login.php" class="btn btn-secondary">Login Page</a>
            </div>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Rajat Chaudhary</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
