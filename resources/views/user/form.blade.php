<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('user.form') }}">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Table</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <div class="mt-3 mb-3 bg-danger text-white fs-1">Application Form</div>
    <form class="form" action="{{ route('biodata.store') }}" method="post">
      @csrf
      <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control" id="firstname">
      </div>
      <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="lastname">
      </div>
      <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="address">
      </div>
      <div class="mb-3">
        <label class="form-label">City/State/Zip</label>
        <input type="text" name="city_state_zip" class="form-control" id="city_state_zip">
      </div>
      <div class="mb-3 row">
        <div class="col">
          <label class="form-label">Home Phone</label>
          <input type="number" name="home_phone" id="home_phone" class="form-control">
        </div>
        <div class="col">
          <label class="form-label">Cell Phone</label>
          <input type="number" name="cell_phone" id="cell_phone" class="form-control">
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
        <label class="form-label">Applied Position</label>
        <input type="text" name="applied_position" class="form-control" id="applied_position">
      </div>
      <div class="mb-3">
        <label class="form-label">Expected Salary</label>
        <input type="number" name="expected_salary" class="form-control" id="expected_salary" placeholder="Rp">
      </div>
      <button type="submit" class="btn btn-primary">Next</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>