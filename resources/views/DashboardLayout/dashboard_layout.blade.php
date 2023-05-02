<!DOCTYPE html>
<html>
<head>
	<title>Cabico Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<style>
	body{
	font-family: 'Poppins', sans-serif;
	background: #fafafa;
}
p{
	font-family: 'Poppins', sans-serif;
	font-size: 1.1em;
	font-weight: 300;
	line-height: 1.7em;
	color: #999;
}
a,
a:hover,
a:focus{
	color: inherit;
	text-decoration: none;
	transition: all 0.3s;
}

/* Side Bar*/



#sidebar.active {
    margin-left: -250px;
}
.wrapper{
	display: flex;
	text-decoration: none;
	transition: all 0.3s;
}

#sidebar{
	/* width: 200px !important; */
	background: black;
	color: #fff;
	transition: all 0.3s;
}


#sidebar .sidebar-header{
	padding: 20px;
	background: black;
}
#sidebar ul.components{
	padding: 20px 0;
	border-bottom: 1px solid #47748b;
}

#sidebar ul p{
	color: #fff;
	padding: 10px;
}

#sidebar ul li a{
	padding: 10px;
	font-size: 1.1em;
	display: block;
}

#sidebar ul li a:hover{
	color: black;
	background: #fff;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
	color: #fff;
	background: black;
}

a[data-toggle="collapse"]{
	position: relative;
}

.dropdown-toggle::after{
	display: block;
	position: absolute;
	top: 50%;
	right: 20%;
	transform: translateY(-50%);
}
ul ul a{
	font-size: 0.9em !important;
	padding-left: 30px !important;
	background: black;
}

#content{
	/* width: 100%; */
	padding: 20px;
	min-height: 100vh;
	transition: all 0.3s;
}


@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}




</style>
<body>



	<div class="container-fluid">

		<div class="row">
			<div class="col-2 mx-0 px-0" style="height: 100vh;">
				<nav id="sidebar">

					<div class="sidebar-header">
						<h3 class="text-center my-3 font-weight-bold">CABICO</h3>
					</div>
					<ul class="lisst-unstyled components">
					  <li>
						  <a href="{{url('/dashboard')}}">Dashboard</a>
					  </li>
						<li class="active">
							<a href="#pro" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
						  <ul class="collapse list-unstyled" id="pro">
							  <li>
								  <a href="{{url('/pro')}}">All Product</a>
								  <a href="{{url('/add-pro')}}">Add Product</a>
							  </li>
						  </ul>
						</li>

						<li class="active">
							<a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
						  <ul class="collapse list-unstyled" id="category">
							  <li>
								  <a href="{{url('/category')}}">All Categories</a>
								  <a href="{{url('/add-category')}}">Add Category</a>
							  </li>
						  </ul>
						</li>

						<li class="active">
							<a href="#newarrivals" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">New Arrivals</a>
						  <ul class="collapse list-unstyled" id="newarrivals">
							  <li>
								  <a href="{{url('/newarrivals')}}">All New Arrivals</a>
								  <a href="{{url('/add-newarrivals')}}">Add New Arrivals</a>
							  </li>
						  </ul>
						</li>
						<li class="active">
							<a href="#bestselling" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Best Selling</a>
						  <ul class="collapse list-unstyled" id="bestselling">
							  <li>
								  <a href="{{url('/bestselling')}}">All Best Selling</a>
								  <a href="{{url('/add-bestselling')}}">Add Best Selling</a>
							  </li>
						  </ul>
						</li>
						<li class="active">
							<a href="#featured" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Featured</a>
						  <ul class="collapse list-unstyled" id="featured">
							  <li>
								  <a href="{{url('/featured')}}">All Featured</a>
								  <a href="{{url('/add-featured')}}">Add Featured</a>
							  </li>
						  </ul>
						</li>
						<li class="active">
							<a href="#toprated" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Top Rated</a>
						  <ul class="collapse list-unstyled" id="toprated">
							  <li>
								  <a href="{{url('/toprated')}}">All Top Rated</a>
								  <a href="{{url('/add-toprated')}}">Add Top Rated</a>
							  </li>
						  </ul>
						</li>
						<li class="active">
							<a href="#messages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Messages</a>
						  <ul class="collapse list-unstyled" id="messages">
							  <li>
								  <a href="{{url('/messages')}}">All Messages</a>
							  </li>
						  </ul>
						</li>
					</ul>
			   </nav>

			</div>
			<div class="col-10">

				@yield('content')

			</div>
		</div>
	</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>


</body>
</html>
