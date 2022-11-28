@extends('layouts.admin')

@section('content')
<!-- Dynamic Table Full -->
<div class="block block-rounded mt-5 pt-5">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            Dynamic Table <small>Full</small>
        </h3>
        <button type="button" 
            class="btn btn-alt-primary" 
            data-bs-toggle="modal" 
            data-bs-target="#modal-popin-create">Create Category</button>
    </div>
    <div class="block-content block-content-full">
        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
        <thead>
            <tr>
            <th class="text-center">ID</th>
            <th>name</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $org)
            <tr>
                <td class="text-center"> {{ $org->id }}</td>
                <td class="fw-semibold"> {{ $org->name }}</td>
                <td class="d-none d-sm-table-cell">
                    <button type="button" 
                        class="btn btn-alt-primary" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modal-popin{{$org->id}}">Edit Category</button>
                    <button type="button" 
                        class="btn btn-alt-primary" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modal-popin-delete{{$org->id}}">Delete Category</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Full -->
@endsection

@section('modals')
    @include('categories.modals.store')
    @foreach($categories as $org)
        @include('categories.modals.edit',['org' => $org])
        @include('categories.modals.delete',['id' => $org->id])
    @endforeach
@endsection