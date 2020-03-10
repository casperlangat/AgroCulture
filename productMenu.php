<div class="wraper style1">
<?php
	require 'db.php';
	require 'menu.php';
	function dataFilter($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
<style>
	img{max-width:100%;}
	*{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
.my-list {
    width: 100%;
    padding: 10px;
    border: 1px solid #f5efef;
    float: left;
    margin: 15px 0;
    border-radius: 5px;
    box-shadow: 2px 3px 0px #e4d8d8;
    position:relative;
    overflow:hidden;
}
.my-list h3{
    text-align: left;
    font-size: 14px;
    font-weight: 500;
    line-height: 21px;
    margin: 0px;
    padding: 0px;
    border-bottom: 1px solid #ccc4c4;
    margin-bottom: 5px;
    padding-bottom: 5px;
    }
	.my-list span{float:left;font-weight: bold;}
	.my-list span:last-child{float:right;}
	.my-list .offer{
    width: 100%;
    float: left;
    margin: 5px 0;
    border-top: 1px solid #ccc4c4;
    margin-top: 5px;
    padding-top: 5px;
    color: #afadad;
    }
	.detail {
    position: absolute;
    top: -100%;
    left: 0;
    text-align: center;
    background: #fff;height: 100%;width:100%;
	
}
	
.my-list:hover .detail{top:0;}
</style>
<!-- One -->
	<section id="main" class="wrapper stylse1 align-center" >
		<div class="container">
				<h2>Welcome to digital market</h2>

		<?php
			if(isset($_GET['n']) AND $_GET['n'] == 1):
		?>
			<h3>Select Filter</h3>
			<form method="GET" action="productMenu.php?">
				<input type="text" value="1" name="n" style="display: none;"/>
				<center>
					<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-2">
						<div class="select-wrapper" style="width: auto" >
							<select name="type" id="type" required style="background-color:white;color: black;">
								<option value="all" style="color: black;">List All</option>
								<option value="fruit" style="color: black;">Fruit</option>
								<option value="vegetable" style="color: black;">Vegetable</option>
								<option value="grain" style="color: black;">Grains</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<input class="button special" type="submit" value="Go!" />
					</div>
					<div class="col-sm-4"></div>
				</div>
				</center>
			</form>
		<?php endif; ?>

		<section id="two" class="wrapper style2 align-center">
		<div class="container">
			<?php
				if(!isset($_GET['type']) OR $_GET['type'] == "all")
				{
					$sql = "SELECT * FROM fproduct WHERE 1";
				}
				if(isset($_GET['type']) AND $_GET['type'] == "fruit")
				{
					$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
				}
				if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
				{
					$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
				}
				if(isset($_GET['type']) AND $_GET['type'] == "grain")
				{
					$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
				}
				$result = mysqli_query($conn, $sql);

				?>
			<div class="d-flex justify-content-center row" >
				<?php

					while($row = $result->fetch_array()):
						$picDestination = "images/productImages/".$row['pimage'];
					?>


				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="my-list">
						<img src="<?php echo $picDestination;?>" alt="dsadas" />
						<h3><?php echo $row['product'].'';?></h3>
						<span><?php echo "Price : Ksh. ".$row['price'].' /-';?></span>
						<div class="offer" style="text-overflow:ellipsis"><?php echo $row['pinfo'];?></div>
						<div class="detail">
							<p>Glyphicons in Bootstrap : Bootstrap Includes over 250 glyphs in font format </p>
							<img src="<?php echo $picDestination;?>" alt="dsadas" />
							<a href="#" class="btn btn-info">Add To Cart</a>
							<a href="#" class="btn btn-info">Deatil</a>
						</div>
					</div>
				</div>

						
					<?php endwhile;	?>


				</div>


			
			
			
        </div>

			</section>

	</section>

	</body>
</html>

</div>