<div class="modal fade" id="addFishModal" tabindex="-1" role="dialog" aria-labelledby="addFishModalTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFishModalTitle">Submit For Detection</h5>
                <button type="button" class="btn btn-outline-dark close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/user_detection" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group text-dark mb-2">
                        <label for="fishName">Fish Name: </label>
                        <br>
                        <input class="form-control" required type="text" name="fishName" id="">
                    </div>
                    <div class="form-group text-dark mb-2">
                        <label for="remarks">Remarks: </label>
                        <br>
                        <textarea name="remarks" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-dark mb-2">
                        <a onclick="document.getElementById('mFile').click();">
                            <center>
                                <img id="addPhoto" src="/addPhoto.svg" alt="" srcset=""
                                    style="width: 200px; height: 200px;">
                            </center>
                        </a>
                        <input id="mFile" type="file" style="display: none;" name="imagePath"
                            onchange="previewImage(event)">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnAddFish" value="yes">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
