<div class="modal fade" id='delete_form2'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class='modal-header'>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				<h4 class='modal-title'>View Military Data</h4>
			</div>
			<div class='modal-body'>
				<div class='row'>
					<div class='col-lg-12'>
          	<form action="logic/delete_form2Logic.php" enctype='multipart/form-data' method="POST">
          	    <h4>Are you sure you want to delete?</h4>
                <div id='delete-modal-inputs'>
                </div>
                <button type="submit" value="Ok" class="btn btn-default pull-right" onclick="return confirm('Are you sure?')">OKAY</button>
          	</form>
						</div>
					</div>
				</div>
			</div>
			<div class='modal-footer'>
				
			</div>
		</div>
	</div>
</div>


			