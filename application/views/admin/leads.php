<div class="admin-header">
	<h1>Leads</h1>
	<span class="last-update"></span>
	<div class="button-wrap">
		<a class="button" href="admin/export-xlsx">export to XLSX</a>
		<a class="button" href="admin/export-csv">export to CSV</a>
		<a class="button" href="admin/leads-setting">Leads Setting</a>
	</div>		
</div>

<div class="admin-content">

	<?php Alert::show() ?>

	<ul>
		<?php 
			foreach ($this->view->leads as $lead) {
				echo '<li><a href="admin/lead/'.$lead['id'].'">'.$lead['dti'].' | '.$lead['data']['email'].'</a></li>';
			}
		?>
	</ul>
</div>