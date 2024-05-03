<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Redirect Vulnerability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Open Redirect Vulnerability</h1>

        <p>This page contains a simple open redirect vulnerability.</p>
        <p>To demonstrate the vulnerability, you can use the provided PHP page by appending a `url` parameter with a target URL. For example:</p>
        <p>http://localhost/open_redirect.php?url=https://www.google.com</p>

        <b>Important: Do not deploy this code in a production environment!</b>
        <?php
        // Check if a URL parameter is set and not empty
        if(isset($_GET['url']) && !empty($_GET['url'])) {
            // Get the URL parameter
            $redirect_url = $_GET['url'];
            // Redirect to the provided URL
            header("Location: $redirect_url");
            exit;
        }
        ?>
    </div>
</body>
</html>
