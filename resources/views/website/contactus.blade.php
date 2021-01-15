<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</head>
<body>

	 <!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-light">

  <ul class="navbar-nav">
  @foreach($pages as $page)
  
    <li class="nav-item">
      <a class="nav-link" href="/page/{{$page->id}}">{{$page->name}}</a>
    </li>
  
  @endforeach

   <li class="nav-item">
      <a class="nav-link" href="/page/contact-us">Contact Us</a>
    </li>

  </ul>

</nav> 

<div class="container">

      <div class="col-5 mx-auto">
        <form action="/contact-us/sendmessage" method="post" class="needs-validation">

          @csrf

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if (isset($successMessage))
            <div class="alert alert-success">
              {{ $successMessage }}
            </div>
          @endif

          <div class="form-group p-2">
              <label for="name">Name:</label>
              <input type="text" class="form-control" placeholder="Please enter your name" name="name">
          </div>
          <div class="form-group p-2">
              <label for="email">Email address:</label>
              <input type="text" class="form-control" placeholder="Please enter your email" name="email">
          </div>
               <div class="form-group p-2">
              <label for="message">Message:</label>
              <textarea placeholder="Please enter your message here" rows="8" class="form-control" name="message"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary m-2">Submit</button>
        </form> 
      </div>

</div>

</body>
</html>