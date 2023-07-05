<?php
include('include/php/connection.php');
include('include/php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Approval</title>

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="include/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include('include/php/header.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('include/php/sidebar.php');?>
    <main class="app-content">

       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <h3>Approval Update</h3>
                <hr />
                <span>Do you want to approve this application?</span>
                <input type="hidden" name="app_id" value="<?php echo trim($_GET["app_id"]); ?>"/>
				<div align="left">
					<button type="submit" id="approve" name="approve">Approve</button>
					&nbsp
			        <button type="submit" id="cancel" name="cancel" formaction="approval_member.php">Cancel</button>
                    <input type="button" onclick="document.location.href='approval_member.php';" value="Cancel" name="btn_cancel" class="btn_cancel btn">
				</div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <!-- Essential javascripts for application to work-->
    <script src="include/js/jquery-3.2.1.min.js"></script>
    <script src="include/js/popper.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/main.js"></script>
    <script src="include/js/admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="include/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="include/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="include/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>

  <!--Footer-->
  <?php include('include/php/footer.php');?>
  <!--Footer end-->
</html>
<?php //} ?>