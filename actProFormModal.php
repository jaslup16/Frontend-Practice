<!-- Activity Proposal Form Modal -->
<div class="modal fade" id="activityProposalModal" tabindex="-1" role="dialog" aria-labelledby="activityProposalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="activityProposalModalLabel">Activity Proposal Forms</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-red">
                            <tr>
                                <th>Form Name</th>
                                <th>Date Submitted</th>
                                <th>Club Name</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample Row -->
                            <tr>
                                <td>IT WEEK 2024 Proposal</td>
                                <td>2024-11-15</td>
                                <td>ACSS</td>
                                <td><button type="button" class="btn btn-info btn-sm">View Details</button></td>
                                <td>
                                    <button class="btn btn-success btn-sm" onclick="approveActivity(this)">Approve</button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#disapproveModal" onclick="setDisapproveContext('IT WEEK 2024', 'ACSS')">Reject</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>