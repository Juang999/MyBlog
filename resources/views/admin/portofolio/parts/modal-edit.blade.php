<button type="button" class="btn btn-secondary edit-portofolio " data-toggle="modal" data-id="{{ $data->id }}" data-target="#modal-edit">Edit</button>

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Portofolio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit" action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputTitle" class="text-dark">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="editTitle" placeholder="Enter title" value="hallo dunia">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputBuildWith" class="text-dark">BuildWith</label>
                            <input type="text" name="buildWith" class="form-control @error('buildWith') is-invalid @enderror" id="editBuildWith" placeholder="BuildWith"  value="">
                            @error('buildWith')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDemuURL" class="text-dark">Demo URL</label>
                            <input type="text" name="demoUrl" class="form-control @error('demoUrl') is-invalid @enderror" id="editDemoUrl" placeholder="Demo URL"  value="">
                            @error('demoUrl')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputProjectUrl" class="text-dark">Project URL</label>
                            <input type="text" name="projectUrl" class="form-control @error('projectUrl') is-invalid @enderror" id="editProjectUrl" placeholder="Project URL"  value="">
                            @error('projectUrl')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" class="text-dark">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" cols="30" id="editDescription" placeholder="Enter description"  value=""></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post Portofolio</button>
                    </div>
                    @method('put')
                    @csrf
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
