 <?php //include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
			<div class="col-md-12">
			<?php print_r($data); ?>
			<form method="post" action="<?php echo base_url("User/edit_sub"); ?>">
			<div class="form-group">
			<label>Name</label>
			<input type="hidden" name="id" value="<?php echo $data->id; ?>" >
			<input type="text" name="fname" placeholder="Name" value="<?php echo $data->fname ; ?>" class="form-control">
			</div>
			
			<div class="form-group">
			<label>email</label>
			<input type="email" name="email" placeholder="Enter Email"  value="<?php echo $data->email ; ?>" class="form-control">
			</div>
			
			
			<div class="form-group">
		
			<input type="submit" name="update" placeholder="Name" class="btn btn-success">
			</div>
			
			</form>
			</div>
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php //include("footer.php"); ?>