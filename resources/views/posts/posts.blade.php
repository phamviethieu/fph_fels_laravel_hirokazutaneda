<!DOCTYPE html>
<html>
<head>
    <title>
        
    </title>
</head>
<body>
    <h1>Add a caterory</h1>

    <hr>

    <form method="POST" action="/posts">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input id="title" name="title" type="text" class="form-control">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea id="description" name="description" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>