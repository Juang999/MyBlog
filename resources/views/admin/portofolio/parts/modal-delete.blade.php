<button type="button" class="btn btn-danger delete-portofolio" data-toggle="modal" data-id="{{ $data->id }}" data-target="#modal-delete">Delete</button>

<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Portofolio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center">
                <img class="delete-icon" src="/img/warning.png" style="width: 150px; height: 150px;">
                <h4 class="text-center">Apakah benar ingin dihapus?</h4>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form class="form-delete" action="" method="post">
                    <button type="submit"  class="btn btn-danger delete-approved">Delete</button>
                    @method('delete')
                    @csrf
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
