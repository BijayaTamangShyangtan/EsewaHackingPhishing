
# Esewa Exploiting: Credential Phishing on 000Webhost

This guide will walk you through the process of exploiting Esewa, a popular digital wallet in Nepal, using a credential phishing attack. This attack involves tricking a user into entering their Esewa credentials on a fake login page, allowing the attacker to capture the user's login credentials. We will be using 000Webhost as our web hosting service.
## Prerequisites

Before beginning this attack, you will need the follow the following steps

## Steps

1. Download zip file of this repo

    a. Sign up for a free account on 000Webhost.
    b. Log in to your 000Webhost account.
    c. Click on the "My Sites" tab and then click on the "Create Site" button.
    d. Choose a domain name for your phishing site (e.g., "esewa-login.00webhostapp.com").
    e. Select the "Free" hosting plan.
    f. Click on the "Create Site" button to create your new site.
    g. Once your site is created, click on the "Manage Site" button.
    h. Click on the "File Manager" button.

    i. In the File Manager, navigate to the "public_html" directory.
    j. Upload your Download Esewa login page zipfile to the "public_html" directory.
   k.Also upload unzip.php file in same directory
4. Create a phishing email or message that will convince the user to click on the link to the fake login page. This can be done using a tool such as [Gophish](https://getgophish.com/) or [Phishing Frenzy](https://www.phishingfrenzy.com/).
5. Send the phishing email or message to the target user.
6. Once the user clicks on the link and enters their credentials on the fake login page, use a tool such as Burp Suite or Wireshark to intercept and capture the credentials.
7. Use the captured credentials to log in to the user's Esewa account and perform whatever actions you have been authorized to perform.
## About Developer Bijaya Tamang

Bijaya Tamang is a Nepalese software developer who is known for his work on the Esewa platform. He has contributed significantly to the development and maintenance of the Esewa application. As an employee of Esewa, he is not involved in any unauthorized security testing or hacking activities.
## Conclusion

Credential phishing is a powerful attack that can be used to gain unauthorized access to a user's account. By following the steps outlined in this guide, you can successfully exploit Esewa using this attack. However, it is important to remember that this attack should only be used with the explicit permission and authorization of the target user and Esewa.
## Disclaimer

This guide is intended for educational purposes only and should not be used for malicious purposes. The author of this guide is not responsible for any misuse of this information. Always follow the laws and regulations of your jurisdiction, and obtain proper authorization before attempting any security testing.
## Note

This is a highly simplified explanation of the process, in real-world scenarios, the attacker would have to take into account many other factors such as the target
