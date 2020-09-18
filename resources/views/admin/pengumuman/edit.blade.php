@extends('admin.h&f.master')@section('judul_halaman', 'Tambah Pengumuman')
@section('header')
<!-- Page plugins -->

<link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel = "stylesheet" /> <link
    rel="stylesheet"
    href="<?php echo asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link
        rel="stylesheet"
        href="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
        <link
            rel="stylesheet"
            href="<?php echo asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>">
            @endsection @section('konten')
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0">Edit Pengumuman</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard/admin') }}">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard/admin/news/pengumuman') }}">
                                                Pengumuman
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Pengumuman</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                {{-- <a href="#" class="btn btn-sm btn-neutral">Tambah Pengumuman</a> --}}
                                <a
                                    href="{{ url('/dashboard/admin/news/pengumuman/manage') }}"
                                    class="btn btn-sm btn-neutral">Kelola Pengumuman</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <form
                                action="{{ route('pengumuman.update', $inf->id) }}"
                                method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Card header -->
                                <div class="card-header">
                                    <h3 class="mb-0">Tambah Pengumuman</h3>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="form-group">
                                        @if($errors->has('judul'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('judul')}}
                                        </div>
                                        @endif
                                        <label for="exampleInputEmail1">Judul Pengumuman</label>
                                        <input
                                            type="text"
                                            name="judul"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            value="{{$inf->judul}}"></div>
                                        <div class="form-group">
                                            @if($errors->has('konten'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('konten')}}
                                            </div>
                                            @endif
                                            <label for="exampleInputEmail1">Konten Pengumuman</label>
                                            <textarea name="konten" class="form-control my-editor">{{$inf->konten}}</textarea>
                                            {{-- <input type="text" class="form-control" id="exampleInputEmail1"> --}}
                                        </div>
                                        @if($errors->has('kategori'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('kategori')}}
                                        </div>
                                        @endif
                                        <label class="form-control-label" for="exampleFormControlSelect1">Kategori Pengumuman</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                            <option>PKM</option>
                                            <option>Lowongan</option>
                                            <option>Kewirausahaan</option>
                                            <option>Beasiswa</option>
                                            <option>Sertifikasi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <!-- Card header -->
                                    @if($errors->has('gambar'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('gambar')}}
                                    </div>
                                    @endif
                                    <div class="card-header">
                                        <h3 class="mb-0">Foto Banner</h3>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Single -->
                                        <div class="dropzone dropzone-single mb-3">
                                            <div class="fallback">
                                                <small class="text-muted">Cover saat ini</small>
                                                <br>
                                                    @if($inf->gambar)
                                                    <img src="{{asset('storage/' . $inf->gambar)}}" width="96px"/>
                                                    @endif
                                                    <div class="custom-file">
                                                        <input
                                                            type="file"
                                                            class="form-control-file"
                                                            name="gambar"
                                                            id="projectCoverUploads">
                                                            <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        {{-- <label for="exampleFormControlFile1">Foto banner</label>
                                        <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1"></div> --}}
                                        <!-- Tags -->
                                        <div class="card">
                                            <!-- Card header -->
                                            @if($errors->has('tag'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('tag')}}
                                            </div>
                                            @endif
                                            <div class="card-header">
                                                <h3 class="mb-0">Tags</h3>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                {{-- <form> --}}
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="tag"
                                                    {{-- value="Bucharest, Cluj, Iasi, Timisoara, Piatra Neamt" --}}
                                                    value="{{$inf->tag}}"
                                                    data-toggle="tags"/> {{-- </form> --}}
                                            </div>
                                        </div>
                                        <!-- Aksi -->
                                        <div class="card">
                                            <!-- Card header -->
                                            <div class="card-header">
                                                <h3 class="mb-0">Aksi</h3>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <?php
                                                // if ($_POST) {
                                                //     # code...
                                                //     print_r($_POST);
                                                // }
                                                ?>
                                                <button class="btn btn-warning" type="submit" name="action" value="DRAFT">Draft</button>
                                                <button class="btn btn-primary" type="submit" name="action" value="PUBLISH">Publish</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Argon Scripts -->
                            @endsection @section('script')
                            <!-- Argon Scripts -->
                            <!-- Optional JS -->
                            <script
                                src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

                            <script
                                src="<?php echo asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')?> "></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')?>"></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
                            <script
                                src="<?php echo asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')?>"></script>

                            <script
                                src="<?php echo asset('assets/vendor/dropzone/dist/min/dropzone.min.js')?>"></script>
                            <script
                                src="../../assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
                            <script src="<?php echo asset('assets/js/demo.min.js')?>"></script>
                            <script src="<?php echo asset('assets/js/argon.js?v=1.1.0')?>"></script>

                            <script
                                src="<?php echo asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')?>"></script>

                            <script>
                                var editor_config = {
                                    path_absolute: "{{ url('/') }}/",
                                    selector: "textarea.my-editor",
                                    plugins: [
                                        "advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern"
                                    ],
                                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter align" +
                                            "right alignjustify | bullist numlist outdent indent | link image media",
                                    relative_urls: false,
                                    file_browser_callback: function (field_name, url, type, win) {
                                        var x = window.innerWidth || document.documentElement.clientWidth || document
                                            .getElementsByTagName(
                                                'body'
                                            )[0]
                                            .clientWidth;
                                        var y = window.innerHeight || document.documentElement.clientHeight || document
                                            .getElementsByTagName(
                                                'body'
                                            )[0]
                                            .clientHeight;

                                        var cmsURL = editor_config.path_absolute + 'filemanager?field_name=' +
                                                field_name;
                                        if (type == 'image') {
                                            cmsURL = cmsURL + "&type=Images";
                                        } else {
                                            cmsURL = cmsURL + "&type=Files";
                                        }

                                        tinyMCE
                                            .activeEditor
                                            .windowManager
                                            .open({
                                                file: cmsURL,
                                                title: 'Filemanager',
                                                width: x * 0.8,
                                                height: y * 0.8,
                                                resizable: "yes",
                                                close_previous: "no"
                                            });
                                    }
                                };

                                tinymce.init(editor_config);
                            </script>
                            @endsection
