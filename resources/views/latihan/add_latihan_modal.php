<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Form latihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer">

                    </div>
                    <div class="form-group">
                        <label for="name_latihan">Name</label>
                        <input type="text" name="name_latihan" id="name_latihan" placeholder="masukan nama anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="price_latihan">Price</label>
                        <input type="number" name="price_latihan" id="price_latihan" placeholder="masukan price anda" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_latihan">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>