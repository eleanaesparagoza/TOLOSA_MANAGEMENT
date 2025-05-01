<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View User Reports</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="admin-view-report.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="TOLOSA.png" alt="Tolosa Boarding House">
        </div>
        <nav class="nav-bar">
            <a href="#services" class="nav-btn">Resident Services</a>
            <a href="#community" class="nav-btn">Community Building</a>
            <a href="#invoices" class="nav-btn">View Invoices</a>
            <a href="#about" class="nav-btn">About Us</a>
            <a href="#register" class="nav-link">Register</a>
            <a href="#" class="nav-link"><i class='bx bx-user-circle'></i></a>
          </nav>
    </header>
    
  <main>
    <h1>USER REPORTS</h1>
    <div class="report-table-container">
      <table>
        <thead>
          <tr>
            <th>Report ID</th>
            <th>Date</th>
            <th>Tenant Name</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>2025-04-30</td>
            <td>Jane Doe</td>
            <td>Broken Sink</td>
            <td>There's a leak under the kitchen sink in Room 5B.</td>
            <td>Pending</td>
          </tr>
          <tr>
            <td>002</td>
            <td>2025-04-29</td>
            <td>John Smith</td>
            <td>WiFi Issue</td>
            <td>Internet connection is unstable on the 3rd floor.</td>
            <td>Resolved</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>