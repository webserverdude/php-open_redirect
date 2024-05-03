# Open Redirect Vulnerability Page

This repository contains a simple PHP page with an intentionally added open redirect vulnerability for educational purposes. It demonstrates how such vulnerabilities can be exploited and the potential risks associated with them.

## Disclaimer

**Important: Do not deploy this code in a production environment!** This code contains a security vulnerability that can be exploited by malicious actors. It is intended for educational purposes only to demonstrate the concept of open redirect vulnerabilities and should be used responsibly.

## Usage

1. Clone this repository to your local machine:

    ```bash
    git clone https://github.com/your_username/open-redirect-vulnerability.git
    ```

2. Navigate to the repository directory:

    ```bash
    cd open-redirect-vulnerability
    ```

3. Start a local web server. For example, using PHP's built-in server:

    ```bash
    php -S localhost:8000
    ```

4. Open your web browser and visit `http://localhost:8000/open_redirect.php?url=<target_url>`, replacing `<target_url>` with the URL you want to redirect to.

## Example

To demonstrate the vulnerability, you can use the provided PHP page by appending a `url` parameter with a target URL. For example:

`http://localhost:8000/open_redirect.php?url=https://www.google.com`

## Contributing

Contributions to improve the code or add educational content about security vulnerabilities are welcome! Please open an issue or pull request to contribute.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
