<!-- ModalDelete -->
<div class="modal fade" id="Delete-modal" role="basic" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Hapus Klien</h4>
			</div>
			<div class="modal-body">
				<h4>Apakah anda yakin ingin menghapus data <span class="text-danger" id="Delete-name"></span> ? </h4>
			</div>
			<div class="hidden" id="delete-id">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
				<a role="button" onclick="delete_now();" data-dismiss="modal" class="btn btn-danger" id="btnDelete">Ya</a>
			</div>
		</div>
	</div>
</div>
<!-- /ModalDelete -->

<!-- ModalDelete -->
<div class="modal fade" id="Delete-fail-modal" role="basic" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Hapus Klien</h4>
			</div>
			<div class="modal-body">
				<h4>Klien  <span class="text-danger" id="Delete-fail-name"></span> dilarang dihapus . Karena memiliki history order </h4>
			</div>
			<div class="hidden" id="delete-id">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
			</div>
		</div>
	</div>
</div>
<!-- /ModalDelete -->