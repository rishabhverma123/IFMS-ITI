<nav class="navbar navbar-inverse" style="margin-bottom:0px;padding-left:0px;padding-top:0px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Department Management System</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="
			<?php 
				if($_SESSION['department']==1)
				{
					echo 'finance_after_login.php';
				} 
				else
				{
					echo 'inventory_after_login.php';
				}
			?>
			">Home</a></li>
		</ul>
		<a href="../includes/logout.php">
			<button	class="btn btn-danger navbar-btn navbar-right"	data-toggle="modal"	data-target="#">Logout &nbsp;</button>
		</a>

	</div>
</nav>