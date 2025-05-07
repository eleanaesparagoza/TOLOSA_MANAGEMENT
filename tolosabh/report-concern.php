<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Report a Concern</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="report-concern.css">
</head>

  <main>
    <h1>REPORT A CONCERN</h1>
    <div class="report-box">
      <form>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <button type="submit">Send Report</button>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
