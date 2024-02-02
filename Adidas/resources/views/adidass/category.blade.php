<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid ">
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse w-100 d-flex justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active  text-light" aria-current="page" href="/adidass">Home</a>
              <a class="nav-link  text-light" href="/category">Category</a>
              <a class="nav-link  text-light" href="/products">Products</a>
            </div>
          </div>
        </div>
    </nav>
    <br>
    <h1 class="text-center">Category</h1>
    <hr>

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <a href="/inputCategory" type="button" class="btn btn-dark">Ajouter</a>
    <table class="table table-dark w-90 table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($categories as $category)

    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->name }}</td>
      <td><a href="/updateCategory/{{$category->id}}" type="button" class="btn btn-light">Update</a></td>
      <td><a href="/deleteCategory/{{$category->id}}" type="button" class="btn btn-light">Delete</a></td>
    </tr>

    @endforeach

  </tbody>
</table>
{{ $categories->links() }}
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>