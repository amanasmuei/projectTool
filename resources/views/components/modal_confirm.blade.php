<div class="modal fade bs-example-modal-sm" id="{{ $id ?? 'default' }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Delete Confirmation</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 pl-3"><i class="mdi mdi-alert-circle-outline mdi-48px text-danger"></i></div>
                    <div class="col-9 pt-2"><p>{{ $slot }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">NO</button>
                <button type="button" id="teruskan" class="btn btn-danger waves-effect waves-light">YES</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->