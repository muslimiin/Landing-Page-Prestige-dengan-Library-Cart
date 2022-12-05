<?= $this->extend('/admin/template_admin'); ?>

<?= $this->section('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Dashboard</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
		</div>
	</div>

</div>
<div class="table-responsive table-hover">
	<main>
            <div class="col-lg-12">
                <div class="card lg-12 text-center">
                    <div class="card-header">
                        Log Activity
                    	</div>
                            <div class="card-body text-center">
        						<table class="table table-bordered dataTable" id="tableUser" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            						<thead>
										<tr role="row">
											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;" scope="col">Ip Address</th>
											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;" scope="col">Email</th>
											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;" scope="col">User Id</th>
											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;" scope="col">Date</th>
											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 127px;" scope="col">Success</th>
										</tr>
            						</thead>
									<tbody>
										<!--  -->
											<!-- <tr class="text-center"> -->
												
											<!-- </tr> -->
										<!--  -->
									</tbody>
        						</table>
							</div>
                    	</div>
                	</div>
        		</div>
			</div>
    </main>
</div>

<?= $this->endSection(); ?>
