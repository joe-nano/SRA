<? $this->load->view('waveform/bootstrap') ?>
<div class="alert alert-info">
	<h3><i class="icon-share-alt"></i> Share library</h3>
	<p>Enter the email address of the person you would like to share this reference library with.</p>
	<p>They will be provided with access to this library and have the ability to export the references in the format they choose.</p>
</div>
<form action="<?=SITE_ROOT?>libraries/share/<?=$library['libraryid']?>" method="post" class="form-horizontal">
	<?=$this->waveform->Table()?>
	<div class="pull-center">
		<button class="btn btn-success" action="submit"><i class="icon-share"></i> Share library</button>
	</div>
</form>
