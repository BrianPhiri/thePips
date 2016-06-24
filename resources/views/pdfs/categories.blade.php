<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cateories PDF Report</title>
</head>
<body>
  <h1>Categories</h1>
  <table class="table table-hover" id="myTable">
      <thead>
          <tr>
              <td><b>Name</b></td><td><b>Description</b></td><td>
          </tr>
      </thead>
      <hr>
      <tbody>
          @foreach( $categories as  $category)
          <tr>
              <td>{{ $category->name }}</td><td>{{ $category->description }}</td>
          </tr>
          @endforeach
      </tbody>
  </table>
</body>
</html>
