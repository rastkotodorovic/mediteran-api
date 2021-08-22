@extends('admin.layout')

@section('content')

    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item">
            <span>News</span>
        </li>
    </ul>
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    News
                </h6>
                <div class="element-box">
                    <table id="example" class="table table-hover table-clean">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Source</th>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $('#example').DataTable( {
            searchDelay: 500,
            processing: true,
            serverSide: true,
            deferRender: true,
            stateSave: true,
            stateDuration: 60 * 60 * 24 * 30,
            ajax: {
                url: '{{ route('articles.index') }}',
            },
            columns: [
                { data: 'title' },
                { data: 'source' },
                {
                    data: 'action',
                    class: 'text-right',
                    orderable: false,
                    searchable: false,
                }
            ]
        } );
    </script>

@endsection