<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/">Home Page</a>
      </div>
      <div class="navbar-nav">
        <a class="nav-link" href="/about">About</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<table class="table">
				<a href="create.php" class="btn btn-success">Add post</a>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($posts as $post): ?>
	<tr>
      <th scope="row"><?=$post['id'];?></th>
      <td><a href="/show.php?id=<?php echo $post['id']; ?>"><?=$post['title'];?></a></td>
      <td>
      	<a href="/edit.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">Edit</a>
      	<a href="/delete.php?id=<?php echo $post['id'];?>" class="btn btn-danger" onclick="return confirm('are you sure?');"  >Delete</a>
      </td>
    </tr>
  	<?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>
</div>
</body>
</html>