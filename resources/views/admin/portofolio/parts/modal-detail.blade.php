<button type="button" class="btn btn-primary detail-portofolio " data-toggle="modal" data-id="{{ $data->id }}" data-target="#modal-detail">Detail</button>

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Portofolio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="mb-0">Title</label>
                <p id="title"></p>

                <label class="mb-0">BuildWith</label>
                <p id="buildWith"></p>

                <label class="mb-0">Demo URL</label>
                <p id="demoUrl"></p>

                <label class="mb-0">Project URL</label>
                <p id="projectUrl"></p>

                <label class="mb-0">Status</label>
                <p id="status"></p>

                <label class="mb-0">Description</label>
                <p id="description"></p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
