<div class="modal fade" id="git-commit-modal" tabindex="-1" role="dialog" aria-labelledby="promptModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="promptModalLabel">Git Commit</h4>
            </div>
            <div class="modal-body form-inline">
                <input type="text" class="form-control" id="git-commit-modal-message" placeholder="{{ placeholder }}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default negative" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary positive">Execute</button>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div><!-- /.modal -->
