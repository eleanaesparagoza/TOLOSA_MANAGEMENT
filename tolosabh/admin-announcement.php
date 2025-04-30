<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Announcement Publisher</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="admin-announcement.css">
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
    <h1>PUBLISH ANNOUNCEMENT</h1>
    <div class="announcement-box">
      <form>
        <label for="title">Announcement Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Announcement Content:</label>
        <textarea id="content" name="content" rows="6" required></textarea>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <button type="submit">Publish Announcement</button>
      </form>
    </div>
  </main>
</body>
</html>