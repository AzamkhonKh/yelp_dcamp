<!-- Pop In Modal -->
<div class="modal fade" id="modal-popin{{ $org->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">

<form action="{{ route('categories.update', ['category' => $org->id]) }}" method="POST">
@csrf
@method('PUT')
    <div class="modal-dialog modal-dialog-popin" role="document">
    <div class="modal-content">
        <div class="block block-rounded shadow-none mb-0">
        <div class="block-header block-header-default">
            <h3 class="block-title">Edit category</h3>
            <div class="block-options">
            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times"></i>
            </button>
            </div>
        </div>
        <div class="block-content fs-sm">
        <div class="block-content">
              <div class="row">
                <div class="col-lg-8 col-xl-12">
                    <div class="mb-4">
                      <div class="input-group">
                        <span class="input-group-text">
                          Legal name
                        </span>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="name"
                            value="{{$org->name}}"
                        >
                      </div>
                    </div>
                </div>
              </div>
            </div>

        </div>
        <div class="block-content block-content-full block-content-sm text-end border-top">
            <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
            Close
            </button>
            <input type="submit">
        </div>
        </div>
    </div>
    </div>
</form>

</div>
<!-- END Pop In Modal -->