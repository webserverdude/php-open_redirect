# Open Redirect Vulnerability Page

This repository contains a simple PHP page with an intentionally added open redirect vulnerability for educational purposes. It demonstrates how such vulnerabilities can be exploited and the potential risks associated with them.

## Disclaimer

**Important: Do not deploy this code in a production environment!** This code contains a security vulnerability that can be exploited by malicious actors. It is intended for educational purposes only to demonstrate the concept of open redirect vulnerabilities and should be used responsibly.

## Usage with Nginx Web Server

1. Ensure you have Nginx and PHP-FPM (PHP FastCGI Process Manager) installed and configured on your system. If not, you can install it using your package manager or by following the official installation instructions.

2. Clone this repository to your server:

    ```bash
    git clone https://github.com/webserverdude/php-open_redirect.git
    ```

3. Move the repository directory to your Nginx web root directory.

4. Update your Nginx configuration to serve the open_redirect.php page. 

5. Restart Nginx to apply the changes.

6. Now, you can access the vulnerable PHP page in your web browser. Visit `http://localhost/open_redirect.php?url=<target_url>`, replacing `<target_url>` with the URL you want to redirect to.

## Example

To demonstrate the vulnerability, you can use the provided PHP page by appending a `url` parameter with a target URL. For example:

`http://localhost/open_redirect.php?url=https://www.google.com`

Remember, exercise caution when running vulnerable code and avoid deploying it in a production environment.