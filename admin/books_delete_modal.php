<div id="books_delete<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Book</h4>
            </div>
            <div class="modal-body">
              <p>Are you Sure? you wan't to Delete this Data?</p>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-danger" href="books_delete.php<?php echo '?id='.$id; ?>"> Delete</button></a>
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>