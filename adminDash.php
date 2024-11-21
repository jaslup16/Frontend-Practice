<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include 'admin_navbar.php'; ?>


    <h2 class="text-center">Admin Dashboard</h2>

    <!-- Activity Proposals Section -->
    <div class="container mt-4">
        <h3 class="text-center mb-4">Activity Proposals</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-red">
                    <tr>
                        <th>Activity</th>
                        <th>Club Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr>
                        <td>IT WEEK 2024</td>
                        <td>ACSS</td>
                        <td><span class="badge badge-secondary">Received</span></td>
                        <td>
                            <button type="button" class="btn btn-light btn-sm btn-block" data-toggle="modal" data-target="#activityProposalModal">View Activity Proposal Forms</button>
                            <button type="button" class="btn btn-light btn-sm btn-block" data-toggle="modal" data-target="#bookingFormModal">View Booking Forms</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
<?php include 'adminRejectModal.php'; ?>
<?php include 'actProFormModal.php'; ?>
<?php include 'bookFormModal.php'; ?>



<footer>
        <p>&copy; 2024 Cor Jesu College. All Rights Reserved.</p>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function setDisapproveContext(activity, club) {
        document.getElementById('activityName').textContent = activity;
        document.getElementById('clubName').textContent = club;
    }

    function submitDisapproval() {
        const reason = document.getElementById('disapprovalReason').value;
        if (!reason) {
            alert('Please enter a reason for disapproval.');
            return;
        }
        $('#disapproveModal').modal('hide');
        document.getElementById('disapprovalReason').value = '';
    }
</script>

</body>
</html>
