
<div id="borrow_return<?php echo $borrow_details_id; ?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Return Book</h4>
            </div>
            <div class="modal-body">
              <p>Are you Sure? you wan't to Return this book?</p>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-danger" href="borrow_return_save.php<?php echo '?id='.$id; ?>&<?php echo 'book_id='.$book_id; ?>"> Return</button></a>
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>