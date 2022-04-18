<?php  if($this->session->userdata('UserType')==2){ ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Product Categorys</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php $i = 1; foreach($row as $val){ ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p> <?php echo $val->categrory_name; ?> </p>
                            <p> <?php echo $val->categrory_id; ?> </p>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </section>
</div>
<?php } ?>