<?php session_start();?>


<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>







							?>
					</div>
				</div>
			<!-- end header -->

			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to <b>Book Store</b>
								<br>
								<br


						

<div class="slider-photo">
							<img width="720" height="399" alt="خوێندكارانی زانكۆی گه&zwnj;شپێدانی مرۆیی، جێگای متمانه&zwnj;ن بۆ پێشخستنی بزنسه&zwnj;كانتان" title="خوێندكارانی زانكۆی گه&zwnj;شپێدانی مرۆیی، جێگای متمانه&zwnj;ن بۆ پێشخستنی بزنسه&zwnj;كانتان" src="/img/image/slide-kargery.jpg">
						</div>



							<?php 









								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm'];
								}
								else
								{
									echo 'Book Store';
								}
							?>
							</h1>
							

						</div>

					</div>
					<!-- end content -->

					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
