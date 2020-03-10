<?php session_start();
	require 'menu.php';
	?>

		<!-- Banner -->
	<div class="container">
		<div class="row d-flex">
			<div class="card" style="width: 50rem">
				<div class="card-body">
					<p class="lead">Order: <span>202012</span></p>
					<p>Quantity: 30</p>
					<p>Date: 2020-20-20</p>
					<p>Amount: 20,000</p>
					<p>Status: Pending</p>
					<select class="form-control"> 
						<option>Select Status</option>
						<option>Pending</option>
						<option>Approved</option>
						<option>Shipped</option>
						<option>Fullfilled</option>
					</select>
					<button class="btn btn-secondary btn-lg">Change status</button>
				</div>			
			</div>
			<div class="card" style="width: 50rem">
				<div class="card-body">
					<p class="lead">Order: <span>202012</span></p>
					<p>Quantity: 30</p>
					<p>Date: 2020-20-20</p>
					<p>Amount: 20,000</p>
					<p>Status: Pending</p>
					<select class="form-control"> 
						<option>Select Status</option>
						<option>Pending</option>
						<option>Approved</option>
						<option>Shipped</option>
						<option>Fullfilled</option>
					</select>
					<button class="btn btn-secondary btn-lg">Change status</button>
				</div>			
			</div>
			<div class="card" style="width: 50rem">
				<div class="card-body">
					<p class="lead">Order: <span>202012</span></p>
					<p>Quantity: 30</p>
					<p>Date: 2020-20-20</p>
					<p>Amount: 20,000</p>
					<p>Status: Pending</p>
					
				</div>			
			</div>
		</div>
	</div>

			<!-- Content -->





		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">AgroCulture &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">Your product Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">Agro Culture Fam<span>Vormir</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">123456789</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">demo@demo.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px"><b>About AgroCulture</b></span>
				AgroCulture is e-commerce trading platform for grains & grocerries...
			</p>
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
		</div>

	</footer>


			<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3>
	<form method="post" action="Login/login.php">
		<div class="row uniform 50%">
			<div class="7u$">
				<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
			</div>
			<div class="7u$">
				<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
			</div>
		</div>
			<div class="row uniform">
				<p>
					<b>Category : </b>
				</p>
				<div class="3u 12u$(small)">
					<input type="radio" id="farmer" name="category" value="1" checked>
					<label for="farmer">Farmer</label>
				</div>
				<div class="3u 12u$(small)">
					<input type="radio" id="buyer" name="category" value="0">
					<label for="buyer">Buyer</label>
				</div>
			</div>
			<center>
			<div class="row uniform">
				<div class="7u 12u$(small)">
					<input type="submit" value="Login" />
				</div>
			</div>
			</center>
		</div>
	</form>
</section>
</div>
    </div>
    </div>
  </form>
</div>


<div id="id02" class="modal">

  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

<section>
		<h3>SignUp</h3>
		<form method="post" action="Login/signUp.php">
			<center>
			<div class="row uniform">
				<div class="3u 12u$(xsmall)">
					<input type="text" name="name" id="name" value="" placeholder="Name" required/>
				</div>
				<div class="3u 12u$(xsmall)">
					<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
				</div>
			</div>
			<div class="row uniform">
				<div class="3u 12u$(xsmall)">
					<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
				</div>

				<div class="3u 12u$(xsmall)">
					<input type="email" name="email" id="email" value="" placeholder="Email" required/>
				</div>
			</div>
			<div class="row uniform">
				<div class="3u 12u$(xsmall)">
					<input type="password" name="password" id="password" value="" placeholder="Password" required/>
				</div>
				<div class="3u 12u$(xsmall)">
					<input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
				</div>
			</div>
			<div class="row uniform">
				<div class="6u 12u$(xsmall)">
					<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
				</div>
			</div>
			<div class="row uniform">
				<p>
					<b>Category : </b>
				</p>
				<div class="3u 12u$(small)">
					<input type="radio" id="farmer" name="category" value="1" checked>
					<label for="farmer">Farmer</label>
				</div>
				<div class="3u 12u$(small)">
					<input type="radio" id="buyer" name="category" value="0">
					<label for="buyer">Buyer</label>
				</div>
			</div>
			<div class="row uniform">
				<div class="3u 12u$(small)">
					<input type="submit" value="Submit" name="submit" class="special" /></li>
				</div>
				<div class="3u 12u$(small)">
					<input type="reset" value="Reset" name="reset"/></li>
				</div>
			</div>
		</center>
		</form>
	</section>

    </div>
    </div>
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


	</body>
</html>
