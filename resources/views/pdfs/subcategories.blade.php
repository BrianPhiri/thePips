<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cateories PDF Report</title>
</head>
<body>
  <h1>Categories</h1>
  @foreach( $subcategories as  $subcategory)
  <u><h3 style="color: green">{{$subcategory->name}}</h3></u>
  <table class="table table-hover" id="myTable">
      <thead>
          <tr>
              <td><b>Name</b></td><td><b>Description</b></td><td>
          </tr>
      </thead>
      <hr>
      <tbody>
            @foreach($subcategory->category as $sub)
              <tr>
                  <td>{{ $sub->name }}</td><td>{{ $sub->description }}</td>
              </tr>
            @endforeach
      </tbody>
  </table>
  @endforeach
</body>
</html>
