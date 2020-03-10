<?php
	require 'menu.php';
	require 'db.php';
	$pid = $_GET['pid'];

	$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$fid = $row['fid'];
	$sql = "SELECT * FROM farmer WHERE fid = '$fid'";
	$result = mysqli_query($conn, $sql);
	$frow = mysqli_fetch_assoc($result);

	$picDestination = "images/productImages/".$row['pimage'];


	?>

	<style>
		ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
.btn-success{width:100%;border-radius:0;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0;color:black}
.title-attr{margin-top:0;margin-bottom:0;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:0px !important;}
    .container > .row{padding:0 !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0 ;    
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0 !important;
        padding-right:0 !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
        
    }            
    .section{width:104%;}
    .menu-items{padding-left:0;}
}
	</style>
<section id="main" class="wrapper style1 align-center">
	
<div class="container py-5 mx-auto px-3" style="background: #fff; color: #000">
	<div class="row">
		<div class="col-xs-4 item-photo">
			<img style="max-width:100%;" src="<?php echo $picDestination.'';?>" />
		</div>
		<div class="col-xs-5" style="border:0px solid gray">
			<!-- Datos del vendedor y titulo del producto -->
			<h3><?= $row['product']; ?>e</h3>    

			<!-- Precios -->
			<h6 class="title-price"><small>Price</small></h6>
			<h3 style="margin-top:0px;"><?= $row['price'].' /-'; ?></h3>


			<!-- Botones de compra -->
			<div class="section" style="padding-bottom:20px;">
				<a href="buyNow.php?pid=<?= $pid; ?>" class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Buy</a>
				<h6><a href="myCart.php?flag=1&pid=<?= $pid; ?>"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer; margin-top:15px"></span>Add To Cart</a></h6>
			</div>                                        
		</div>                              

		<div class="col-xs-9">
			<ul class="menu-items">
				<li class="active">Details</li>
				<li>Specific</li>
				<li>Farmer</li>
			</ul>
			<div style="width:100%;border-top:1px solid silver">
				<?php echo $row['pinfo']?>
			</div>
			<div class="row">
				<?php
					$sql = "SELECT * FROM review WHERE pid='$pid'";
					$result = mysqli_query($conn, $sql);
				?>
				<div class="col-0 col-sm-3"></div>
				<div class="col-12 col-sm-6">
					<?php
						if($result) :
							while($row1 = $result->fetch_array()) :
					?>
				<div class="con">
					<div class="row">
						<div class="col-sm-4">
							<em style="color: black;"><?= $row1['comment']; ?></em>
						</div>
						<div class="col-sm-4">
							<em style="color: black;"><?php echo "Rating : ".$row1['rating'].' out of 10';?></em>
						</div>
					</div>
					<span class="time-right" style="color: black;"><?php echo "From: ".$row1['name']; ?></span>
					<br /><br />
				</div>
					<?php endwhile; endif;?>
			</div>
		</div>		
	</div>
</div> 
</div>


<script>

$(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
</script>
</body>
</html>
