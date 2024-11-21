<!-- Disapprove Modal -->
<div class="modal fade" id="disapproveModal" tabindex="-1" role="dialog" aria-labelledby="disapproveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="disapproveModalLabel">Disapprove Activity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Activity:</strong> <span id="activityName">Activity Name</span></p>
                <p><strong>Club:</strong> <span id="clubName">Club Name</span></p>
                <p>Please provide a reason for disapproval:</p>
                <input type="text" class="form-control" id="disapprovalReason" placeholder="Reason for disapproval" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="submitDisapproval()">Submit Disapproval</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>