<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
aria-labelledby="logoutModalTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="logoutModalTitle">Attention</h5>
            <button type="button" class="btn btn-outline-dark close" data-bs-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/logout" method="get" autocomplete="off">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <h5>Are You Sure You Sure You Want To Logout</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="btnLogout"
                    value="yes">Yes, Proceed</button>
            </div>
        </form>
    </div>
</div>
</div>