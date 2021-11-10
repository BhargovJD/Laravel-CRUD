<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center">All Data</h1>
    <a href="/" class="btn btn-success">Insert data</a>

    <table class="table">
        <thead>
          <tr>
            <th>Post id</th>
            <th>Post title</th>
            <th>Post author</th>
          </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->post_title}}</td>
            <td>{{$post->post_author}}</td>

            <td><a href="/edit/{{$post->id}}" class="btn btn-warning">Edit</a></td>
            <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>


          </tr>
          @endforeach

        </tbody>
      </table>

    <div class="container">

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>