<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include 'student_navbar.php'; ?>


<h2 class="text-center">Student Dashboard</h2>


<div class="container mt-4">
    <h3 class="text-center mb-4">Your Submitted Forms and Status Updates</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-red">
                <tr>
                    <th>Date Submitted</th>
                    <th>Club Name</th>
                    <th>Activity</th>
                    <th>Form Type</th>
                    <th>Status</th> 
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-11-15</td>
                    <td>ACSS</td>
                    <td>IT WEEK 2024</td>
                    <td>Activity Proposal Form</td>
                    <td>
                        <span class="badge badge-success">Approved</span>
                        <p>Date Approved: 2024-11-18</p>
                    </td>
                    <td>
                        <a href="edit_form.php?formType=BookingForm" class="btn btn-sm btn-outline-primary">View</a>
                    </td>
                </tr>
                <tr>
                    <td>2024-11-14</td>
                    <td>ACSS</td>
                    <td>IT WEEK 2024</td>
                    <td>Booking Form</td>
                    <td>
                        <span class="badge badge-secondary">Pending</span>
                    </td>
                    <td>
                        <a href="edit_form.php?formType=BookingForm" class="btn btn-sm btn-outline-primary">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>2024-11-14</td>
                    <td>ACSS</td>
                    <td>IT WEEK 2024</td>
                    <td>Booking Form</td>
                    <td>
                        <span class="badge badge-danger">Rejected</span>
                        <p>Date Rejected: 2024-11-18</p>
                    </td>
                    <td>
                        <div class="btn-group">
                            <?php include 'studentRejectModal.php'; ?>
                            <button type="button" class="btn btn-sm btn-outline-danger" 
                                    onclick="showDisapprovalReason('Insufficient details provided.')">
                                View Reason
                            </button>
                            <a href="edit_form.php?formType=BookingForm" class="btn btn-sm btn-outline-primary">Edit</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<footer>
        <p>&copy; 2024 Cor Jesu College. All Rights Reserved.</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function showDisapprovalReason(reason) {
        document.getElementById("disapprovalReasonText").innerText = reason;
        $('#disapprovalReasonModal').modal('show');
    }
</script>
</body>
</html>
