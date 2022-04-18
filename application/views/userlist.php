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
			
			<table class="table">
			<thead>
			<th>No.</th>
			<th>Name</th>
			<th>Name</th>
			<th>Name</th>
			<th>Name</th>
			</thead>
			<tbody>
			

       <!-- ajax se karnan hai  -->
			<?php
			//print_r($row);
			$i = 1;
			foreach($row as $val){ 
			?>
			<tr id="row_<?php echo $val->id ;?>">
			<td><?php echo $i++; ?></td>
			<td><?php echo $val->fname; ?></td>
			<td><?php echo $val->email; ?></td>
			<td><?php if(@$val->images){?><img src="<?php  echo base_url()."assets/images/".$val->images; ?>" height="50px" /><?php } ?></td>
			<td><?php echo $val->status; ?></td>
			<td><a href="<?php echo base_url('User/editData/'.$val->id);?>">Edit</a>/
			<a href="<?php echo base_url('User/deleteData/'.$val->id);?>">Delete</a>
			<button class="deleteRecord" data-id="<?php echo $val->id; ?>">DELETE</button>
			</td>
			
			</tr>				
			<?php 
			}
			?>
			
			</tbody>
			
			</table></div>
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php //include("footer.php"); ?>