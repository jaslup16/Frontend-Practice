<!-- Booking Form Modal -->
<div class="modal fade" id="bookingFormModal" tabindex="-1" role="dialog" aria-labelledby="bookingFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingFormModalLabel">Booking Forms</h5>
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
                                <td>GYM Booking</td>
                                <td>2024-11-14</td>
                                <td>ACSS</td>
                                <td><button type="button" class="btn btn-info btn-sm">View Details</button></td>
                                <td>
                                    <button class="btn btn-success btn-sm" onclick="approveActivity(this)">Approve</button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#disapproveModal" onclick="setDisapproveContext('GYM Booking', 'ACSS')">Reject</button>
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