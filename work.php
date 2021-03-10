<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="new.php">Village Food Channel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="content.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contacts
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Phone Number</a></li>
                  <li><a class="dropdown-item" href="#">Youtube</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Facebook</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <tr>
                        <td>USERNAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-outline-success">LOGIN</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>ROLL NO</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>ADMISSION NO</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>COLLEGE</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>USERNAME</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>CONFIRM PASSWORD</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-outline-danger">RESET</button></td>
                        <td><button class="btn btn-outline-success">REGISTER</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>