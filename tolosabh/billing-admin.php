<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Notice Board</title>
  <link rel="stylesheet" href="billing1.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo">
      <img src="IMG/TOLOSA.png" alt="Logo">
    </div>

    <nav class="nav-bar">
      <button class="nav-btn">Resident Services</button>
      <button class="nav-btn">Community Building</button>
      <button class="nav-btn">View Invoices</button>
      <button class="nav-btn">About Us</button>
    </nav>

    <button class="profile-button" onclick="alert('Profile clicked!')">
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
  </button>
  </header>

    </div>
  </header>
  <div class="admin-recording-form">
  <h2>Record New Payment</h2>
  <form>
    <div class="form-row">
      <input type="text" placeholder="Name" required>
      <input type="date" placeholder="Due Date" required>
      <input type="number" placeholder="Amount Paid" required>
    </div>
    <div class="form-row">
      <select required>
        <option value="">Select Status</option>
        <option value="Paid">Paid</option>
        <option value="Pending">Pending</option>
      </select>
      <input type="date" placeholder="Payment Date" required>
      <input type="text" placeholder="Reference No." required>
    </div>
    <button type="submit">Submit Record</button>
  </form>
</div>

<div class="recorded-invoice-copy">
  <h3>Recorded Invoice</h3>
  <div class="invoice-entry">
    <p><strong>Name:</strong> 1001</p>
    <p><strong>Due Date:</strong> 2025-05-15</p>
    <p><strong>Amount Paid:</strong> ₱3,500</p>
    <p><strong>Status:</strong> Paid</p>
    <p><strong>Payment Date:</strong> 2025-05-07</p>
    <p><strong>Reference No.:</strong> REF789123</p>
  </div>
</div>

</body>
</html>