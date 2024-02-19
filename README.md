
# Esewa Exploiting: Credential Phishing on 000Webhost (With Script Download)

This guide will walk you through the process of exploiting Esewa, a popular digital wallet in Nepal, using a credential phishing attack. We will be using 000Webhost as our web hosting service and downloading a script to automate the unzipping process.
## Prerequisites

Before beginning this attack, you will need the following tools and resources:
* A phishing framework or method for creating a fake Esewa login page. This can be as simple as creating a basic HTML page and hosting it on a web server, or you can use a more advanced tool such as [Spoof](https://github.com/drk1wi/Spoof) or [Modlishka](https://github.com/drk1wi/Modlishka).
* A way to capture the user's credentials once they are entered on the fake login page. This can be done using a tool such as [Burp Suite](https://portswigger.net/burp) or [Wireshark](https://www.wireshark.org/) to intercept and analyze network traffic.
* A free account on [000Webhost](https://www.00webhost.com/).
* The repository files and the `unzip.php` file from [this link](https://github.com/<USERNAME>/Esewa-Phishing/archive/refs/heads/main.zip).

## Steps

1. Download the repository files and the `unzip.php` file from the provided link.
2. Unzip the downloaded repository files.
3. Host the fake login page on 000Webhost. Here are the steps to do this:
    a. Sign up for a free account on 000Webhost.
    b. Log in to your 000Webhost account.
    c. Click on the "My Sites" tab and then click on the "Create Site" button.
    d. Choose a domain name for your phishing site (e.g., "esewa-login.00webhostapp.com").
    e. Select the "Free" hosting plan.
    f. Click on the "Create Site" button to create your new site.
    g. Once your site is created, click on the "Manage Site" button.
    h. Click on the "File Manager" button.

    i. In the File Manager, navigate to the "public_html" directory.
    j. Upload the repository files to the "public_html" directory.
    k. Upload the `unzip.php` file to the "public_html" directory.
    l. Click on the `unzip.php` file and click on "View" to unzip the repository files.
4. Navigate to the unzipped folder, find the `login.html` file, and click on "View" to see the Esewa login page.
5. Copy the link of the login page and send it to your target victim.
6. Once the user enters their credentials on the fake login page, use a tool such as Burp Suite or Wireshark to intercept and capture the credentials.
7. Use the captured credentials to log in to the user's Esewa account and perform whatever actions you have been authorized to perform.
8. After the user enters their credentials, a new file named `data.txt` will be created in the "public_html" directory, containing the victim's IP address. The IP address will also be stored in a separate file named `ip.txt`.

## About Developer Bijaya Tamang

Bijaya Tamang is a Nepalese software developer who is known for his work on the Esewa platform. He has contributed significantly to the development and maintenance of the Esewa application. As an employee of Esewa, he is not involved in any unauthorized security testing or hacking activities.
## Conclusion

Credential phishing is a powerful attack that can be used to gain unauthorized access to a user's account. By following the steps outlined in this guide, you can successfully exploit Esewa using this attack. However, it is important to remember that this attack should only be used with the explicit permission and authorization of the target user and Esewa.
## Disclaimer

This guide is intended for educational purposes only and should not be used for mal
