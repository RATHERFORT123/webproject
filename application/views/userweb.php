<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <H1> WEL-COME YOUER </H1>
                            <h3><?php echo $this->session->userdata('Name');?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <?php $this->session->userdata();
             $this->session->userdata('Email');
             $this->session->userdata('UserType'); ?>
    </div>
</div>
</section>
</div>