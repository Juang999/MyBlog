<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-create">
    Create Portofolio
</button>

<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-dark">Create Portofolio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin-panel/portofolio" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputTitle" class="text-dark">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputTitle" placeholder="Enter title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputBuildWith" class="text-dark">BuildWith</label>
                        <input type="text" name="buildWith" class="form-control @error('buildWith') is-invalid @enderror" id="inputBuildWith" placeholder="BuildWith">
                        @error('buildWith')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputDemuURL" class="text-dark">Demo URL</label>
                        <input type="text" name="demoUrl" class="form-control @error('demoUrl') is-invalid @enderror" id="inputDemuURL" placeholder="Demo URL">
                        @error('demoUrl')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputProjectUrl" class="text-dark">Project URL</label>
                        <input type="text" name="projectUrl" class="form-control @error('projectUrl') is-invalid @enderror" id="inputProjectUrl" placeholder="Project URL">
                        @error('projectUrl')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputDescription" class="text-dark">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" cols="30" id="inputDescription" placeholder="Enter description"></textarea>
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
                    <button type="submit" class="btn btn-primary">Post Portofolio</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
