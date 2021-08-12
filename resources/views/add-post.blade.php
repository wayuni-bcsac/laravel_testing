<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
   <section>
     <div class="container">
         <div class="row">
             <div class="col-md-6 offset-md-3">
                 <form method="POST" action="{{route('post.add')}}">
                     
                      <div class="form-group">
                          <label for="title">Post Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter post title" />

                    </div>
                    <div class="form-group">
                       <label for="body">Enter Post Body</label>
                       <textarea class="form-control" name="body" rows="3"></textarea>
                   </div>
                   <input type="submit" value="Add Post" />
               </form>
             </div>
</div>
     </div>
</section>

</body>
</html>