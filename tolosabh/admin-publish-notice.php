<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Publish Notice</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="admin-publish-notice.css">
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
    <h1>PUBLISH NOTICE</h1>
    <div class="notice-form-box">
      <form>
        <label for="notice-title">Notice Title:</label>
        <input type="text" id="notice-title" name="notice-title" required>

        <label for="notice-body">Notice Content:</label>
        <textarea id="notice-body" name="notice-body" rows="6" required></textarea>

        <label for="notice-date">Date:</label>
        <input type="date" id="notice-date" name="notice-date" required>

        <button type="submit">Post Notice</button>
      </form>
    </div>
  </main>
</body>
</html>