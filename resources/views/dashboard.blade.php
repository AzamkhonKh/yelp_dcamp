@extends('layout.admin')

@section('content')
       
          <!-- Bordered Table -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Bordered Table</h3>
              <div class="block-options">
                <div class="block-options-item">
                  <code>.table-bordered</code>
                </div>
              </div>
            </div>
            <div class="block-content">
              <table class="table table-bordered table-vcenter">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 50px;"></th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($organisation as $org)
                  <tr>
                    <th class="text-center" scope="row">{{ $org->id }}</th>
                    <td>{{ $org->legal_name }}</td>
                    <td class="d-none d-sm-table-cell">
                      <span class="badge bg-success">VIP</span>
                    </td>
                    <td class="text-center">
                      <div class="btn-group">
                        <button 
                            type="button" 
                            class="btn btn-sm btn-secondary" 
                            title="Edit"
                            data-bs-toggle="modal" 
                            data-bs-target="#modal-popin{{$org->id}}"
                        >
                          <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Bordered Table -->

@endsection


@section('modal')
    @foreach($organisation as $org)

          <!-- Pop In Modal -->
          <div class="modal fade" id="modal-popin{{ $org->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
              <div class="modal-content">

                <!-- With Text -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                    <h3 class="block-title">With Text {{ $org->legal_name }}</h3>
                    </div>
                    <div class="block-content">
                    <div class="row">
                        <div class="col-lg-4">
                        <p class="text-muted">
                            Prepend or Append Text next to your inputs, useful if you you would like to add extra info
                        </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                        <form action="{{ url('organisation/edit/'.$org->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text">
                                    legal_name
                                    </span>
                                    <input type="text" class="form-control" name="legal_name">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-text">
                                    description
                                    </span>
                                    <textarea class="form-control" name="description">
                                    </textarea>
                                </div>
                            </div>
                            <input type="submit">
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- END With Text -->

              </div>
            </div>
          </div>
          <!-- END Pop In Modal -->
        
    @endforeach
@endsection