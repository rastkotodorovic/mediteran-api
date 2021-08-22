@extends('admin.layout')

@section('content')

    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Početna</a>
        </li>
    </ul>
    <div class="content-i">
        <div class="content-box"><div class="row">
                <div class="col-lg-10">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Articles
                        </h6>
                        <div class="element-box">
                            <form
                                method="POST"
                                action="{{ route('articles.store') }}" enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" name="title">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <input type="text" class="form-control" id="body" aria-describedby="emailHelp" placeholder="Body" name="body">
                                    @error('body')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="source">Source</label>
                                    <input type="text" class="form-control" id="source" aria-describedby="emailHelp" placeholder="Source" name="source">
                                    @error('source')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">
                                        Dodajte
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

    <script>
        tinymce.init({
            selector: '#tekst',
            plugins: 'autoresize advlist hr charmap fullscreen insertdatetime image link preview searchreplace visualblocks wordcount help lists code pagebreak',
            toolbar: 'fullscreen | undo redo | bold italic forecolor backcolor styleselect | numlist bullist | alignleft aligncenter alignright alignjustify | link insertfile image | a11ycheck preview code visualblocks wordcount | searchreplace | help | pagebreak',
            advlist_bullet_styles: "square",
            automatic_uploads: true,
            branding: false,
            max_height: 600,
            min_height: 400,
            paste_data_images : true,
            file_picker_types: 'image'
        });
    </script>

@endsection