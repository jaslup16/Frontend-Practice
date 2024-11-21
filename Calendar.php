<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'admin_navbar.php'; ?>

<!-- Main Content for Calendar -->
<div class="content container mt-4">
    <div class="calendar-container">
        <!-- Calendar Section -->
        <div>
            <div class="calendar-header">
                <button class="btn btn-secondary" onclick="previousMonth()">Previous</button>
                <h2 id="calendarMonthYear" class="text-center"></h2>
                <button class="btn btn-secondary" onclick="nextMonth()">Next</button>
            </div>

            <!-- Month View -->
            <div id="monthView" class="calendar-grid">
                <!-- Days of the week -->
                <div class="day-cell font-weight-bold">Sun</div>
                <div class="day-cell font-weight-bold">Mon</div>
                <div class="day-cell font-weight-bold">Tue</div>
                <div class="day-cell font-weight-bold">Wed</div>
                <div class="day-cell font-weight-bold">Thu</div>
                <div class="day-cell font-weight-bold">Fri</div>
                <div class="day-cell font-weight-bold">Sat</div>
            </div>

            <!-- Day View -->
            <div id="dayView" style="display: none;">
                <h3 id="selectedDate" class="mt-4">Activities for </h3>
                <ul class="activity-list list-group">
                    <!-- Example activities (Replace with dynamic content) -->
                </ul>
                <button class="btn btn-secondary mt-3" onclick="showMonthView()">Back to Month View</button>
            </div>
        </div>

        <!-- Side Table for Approved Events -->
        <div>
            <h3>Approved Events</h3>
            <button class="btn btn-primary btn-block" onclick="openAddEventModal()">Add New Event</button>
            <ul id="approvedEventList" class="list-group mt-3">
                <!-- Approved events will be dynamically loaded here -->
            </ul>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Cor Jesu College. All Rights Reserved.</p>
</footer>

<script>
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    // Only approved events are stored here (replace this sample data with actual approved events from a database)
    const approvedEvents = {
        "2024-11-01": [{ name: "Sports Fest", description: "Sports festival" }],
        "2024-11-15": [{ name: "Art Exhibit", description: "Exhibition of student artworks" }]
    };

    function updateCalendar() {
        const monthYearDisplay = document.getElementById("calendarMonthYear");
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        
        // Update month and year display
        monthYearDisplay.textContent = `${monthNames[currentMonth]} ${currentYear}`;

        // Calculate the number of days in the current month
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        const firstDay = new Date(currentYear, currentMonth, 1).getDay();

        // Clear previous calendar days
        const monthView = document.getElementById("monthView");
        monthView.innerHTML = `
            <div class="day-cell font-weight-bold">Sun</div>
            <div class="day-cell font-weight-bold">Mon</div>
            <div class="day-cell font-weight-bold">Tue</div>
            <div class="day-cell font-weight-bold">Wed</div>
            <div class="day-cell font-weight-bold">Thu</div>
            <div class="day-cell font-weight-bold">Fri</div>
            <div class="day-cell font-weight-bold">Sat</div>
        `;

        // Add empty cells for days before the start of the month
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("div");
            emptyCell.classList.add("day-cell");
            monthView.appendChild(emptyCell);
        }

        // Populate the calendar with days and activity counts
        for (let day = 1; day <= daysInMonth; day++) {
            const date = `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const dayCell = document.createElement("div");
            dayCell.classList.add("day-cell");
            dayCell.innerHTML = day;

            // Check if there are approved events for the date
            if (approvedEvents[date]) {
                dayCell.innerHTML += `<br><span class="badge badge-info">${approvedEvents[date].length} Approved</span>`;
            }

            // Make day clickable to view activities
            dayCell.onclick = () => showDayView(date);
            monthView.appendChild(dayCell);
        }

        // Update side table with approved events for the month
        updateApprovedEventList();
    }

    function previousMonth() {
        if (currentMonth === 0) {
            currentMonth = 11;
            currentYear--;
        } else {
            currentMonth--;
        }
        updateCalendar();
    }

    function nextMonth() {
        if (currentMonth === 11) {
            currentMonth = 0;
            currentYear++;
        } else {
            currentMonth++;
        }
        updateCalendar();
    }

    function showDayView(date) {
        document.getElementById("monthView").style.display = "none";
        document.getElementById("dayView").style.display = "block";
        document.getElementById("selectedDate").innerText = "Activities for " + date;

        const activityList = document.querySelector(".activity-list");
        activityList.innerHTML = "";
        if (approvedEvents[date]) {
            approvedEvents[date].forEach(event => {
                const listItem = document.createElement("li");
                listItem.className = "list-group-item";
                listItem.textContent = event.name + " - " + event.description;
                activityList.appendChild(listItem);
            });
        } else {
            const listItem = document.createElement("li");
            listItem.className = "list-group-item";
            listItem.textContent = "No approved events for this day";
            activityList.appendChild(listItem);
        }

        // Update side table with day-view events
        updateApprovedEventList(date);
    }

    function showMonthView() {
        document.getElementById("monthView").style.display = "grid";
        document.getElementById("dayView").style.display = "none";
        updateApprovedEventList();
    }

    function openAddEventModal() {
        $('#addEventModal').modal('show');
    }

    function addEvent() {
        const eventName = document.getElementById("eventName").value;
        const eventDate = document.getElementById("eventDate").value;
        const eventDescription = document.getElementById("eventDescription").value;

        if (!eventName || !eventDate) {
            alert("Please enter both an event name and date.");
            return;
        }

        // Add event to approved events data
        if (!approvedEvents[eventDate]) {
            approvedEvents[eventDate] = [];
        }
        approvedEvents[eventDate].push({ name: eventName, description: eventDescription });

        // Close the modal and reset form
        $('#addEventModal').modal('hide');
        document.getElementById("addEventForm").reset();

        // Refresh the calendar and side table
        updateCalendar();
    }

    function updateApprovedEventList(selectedDate = null) {
        const eventList = document.getElementById("approvedEventList");
        eventList.innerHTML = ""; // Clear existing events

        const dates = selectedDate ? [selectedDate] : Object.keys(approvedEvents).filter(date => date.startsWith(`${currentYear}-${String(currentMonth + 1).padStart(2, '0')}`));
        dates.forEach(date => {
            approvedEvents[date].forEach(event => {
                const listItem = document.createElement("li");
                listItem.className = "list-group-item";
                listItem.innerHTML = `<strong>${date}</strong>: ${event.name}`;
                eventList.appendChild(listItem);
            });
        });
    }

    // Initialize the calendar on page load
    updateCalendar();
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
