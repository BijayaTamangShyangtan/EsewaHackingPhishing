
# Esewa Exploiting: Credential Phishing on 000Webhost

This guide will walk you through the process of exploiting Esewa, a popular digital wallet in Nepal, using a credential phishing attack. This attack involves tricking a user into entering their Esewa credentials on a fake login page, allowing the attacker to capture the user's login credentials. We will be using 000Webhost as our web hosting service.
## Prerequisites

Before beginning this attack, you will need the following tools and resources:
* A phishing framework or method for creating a fake Esewa login page. This can be as simple as creating a basic HTML page and hosting it on a web server, or you can use a more advanced tool such as [Spoof](https://github.com/drk1wi/Spoof) or [Modlishka](https://github.com/drk1wi/Modlishka).
* A way to capture the user's credentials once they are entered on the fake login page. This can be done using a tool such as [Burp Suite](https://portswigger.net/burp) or [Wireshark](https://www.wireshark.org/) to intercept and analyze network traffic.
* A free account on [000Webhost](https://www.00webhost.com/).

## Steps

1. Create a fake Esewa login page using your chosen phishing framework or method. Make sure that the page looks as convincing as possible, using Esewa's branding and logos to make it appear legitimate.
2. Host the fake login page on 000Webhost. Here are the steps to do this:
    a. Sign up for a free account on 000Webhost.
    b. Log in to your 000Webhost account.
    c. Click on the "My Sites" tab and then click on the "Create Site" button.
    d. Choose a domain name for your phishing site (e.g., "esewa-login.00webhostapp.com").
    e. Select the "Free" hosting plan.
    f. Click on the "Create Site" button to create your new site.
    g. Once your site is created, click on the "Manage Site" button.
    h. Click on the "File Manager" button.

    i. In the File Manager, navigate to the "public_html" directory.
    j. Upload your fake Esewa login page HTML file to the "public_html" directory.
3. Create a phishing email or message that will convince the user to click on the link to the fake login page. This can be done using a tool such as [Gophish](https://getgophish.com/) or [Phishing Frenzy](https://www.phishingfrenzy.com/).
4. Send the phishing email or message to the target user.
5. Once the user clicks on the link and enters their credentials on the fake login page, use a tool such as Burp Suite or Wireshark to intercept and capture the credentials.
6. Use the captured credentials to log in to the user's Esewa account and perform whatever actions you have been authorized to perform.
## About Developer Bijaya Tamang

Bijaya Tamang is a Nepalese software developer who is known for his work on the Esewa platform. He has contributed significantly to the development and maintenance of the Esewa application. As an employee of Esewa, he is not involved in any unauthorized security testing or hacking activities.
## Conclusion

Credential phishing is a powerful attack that can be used to gain unauthorized access to a user's account. By following the steps outlined in this guide, you can successfully exploit Esewa using this attack. However, it is important to remember that this attack should only be used with the explicit permission and authorization of the target user and Esewa.
## Disclaimer

This guide is intended for educational purposes only and should not be used for malicious purposes. The author of this guide is not responsible for any misuse of this information. Always follow the laws and regulations of your jurisdiction, and obtain proper authorization before attempting any security testing.
## Note

This is a highly simplified explanation of the process, in real-world scenarios, the attacker would have to take into account many other factors such as the target
