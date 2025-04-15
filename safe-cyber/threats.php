<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Threats Page</title>
    <link rel="stylesheet" href="threats.css"/>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
 
</head>
<body>
<?php include 'header.php'?>
    <div class="content">
        <div class="header">
            <div class="img">
                <img src="Images/h1.jpg" alt="header">
            </div>
            <div class="txt">
                <h2 class="txt1">Threats Attacks</h2>
            </div>
        </div>
        <div class="info">
            <div class="im">
                <img src="Images/p1.webp" alt="Phishing Attacks" class="images"/>
            </div>
            <div class="intro">
                <h1 class="heading">Phishing Attacks : </h1>
                <h2 class="des">Description : </h2>
                <p class="para">~ Fraudulent attempts to obtain sensitive information by disguising as a trustworthy entity.</p>
                <h2 class="des">Prevention : </h2>
                <p class="para">~ Be cautious of unsolicited emails or messages.<br>
                    ~ Verify the sender's email address.<br/>
                    ~ Avoid clicking on suspicious links.</p>
            </div>
        </div>
        <div class="info">
            <div class="im">
                <img src="Images/p2.webp" alt="Ransomware Attacks" class="images"/>
            </div>
            <div class="intro">
                <h1 class="heading">Ransomware Attacks : </h1>
                <h2 class="des">Description : </h2>
                <p class="para">~ Malicious software that encrypts files and demands payment for their release.</p>
                <h2 class="des">Prevention : </h2>
                <p class="para">~ Regularly back up your data.<br>
                    ~ Keep software and antivirus programs updated.<br/>
                    ~ Avoid downloading unknown attachments.</p>
            </div>
        </div>
        <div class="info">
            <div class="im">
                <img src="Images/p3.jpg" alt="Malware Attacks" class="images"/>
            </div>
            <div class="intro">
                <h1 class="heading">Malware Attacks : </h1>
                <h2 class="des">Description : </h2>
                <p class="para">~ Malicious software designed to harm or exploit devices.</p>
                <h2 class="des">Prevention : </h2>
                <p class="para">~ Use reputable antivirus software.<br>
                    ~ Avoid visiting untrusted websites.<br/>
                    ~ Download software only from official sources.</p>
            </div>
        </div>
        <div class="info">
            <div class="im">
                <img src="Images/p4.jpg" alt="Denial of Service (DoS) Attacks" class="images"/>
            </div>
            <div class="intro">
                <h1 class="heading">Denial of Service (DoS) Attacks : </h1>
                <h2 class="des">Description : </h2>
                <p class="para">~ Overloading a system to make it unavailable to users.</p>
                <h2 class="des">Prevention : </h2>
                <p class="para">~ Use firewalls and intrusion detection systems.<br>
                    ~ Implement rate limiting on your servers.<br/></p>
            </div>
        </div>
        <div class="info">
            <div class="im">
                <img src="Images/p5.png" alt="Man-in-the-Middle (MitM) Attacks" class="images"/>
            </div>
            <div class="intro">
                <h1 class="heading">Man-in-the-Middle (MitM) Attacks : </h1>
                <h2 class="des">Description : </h2>
                <p class="para">~ Eavesdropping or altering communication between two parties without their knowledge.</p>
                <h2 class="des">Prevention : </h2>
                <p class="para">~ Use secure connections (HTTPS).<br>
                    ~ Avoid public Wi-Fi for sensitive transactions.<br/>
                    ~ Use a Virtual Private Network (VPN).</p>
            </div>
        </div>
        <div class="info">
            <div class="im">
                <img src="Images/p6.png" alt="SQL Injection Attacks"class="images"/>
            </div>
            <div class="intro">
                <h1 class="heading">SQL Injection Attacks : </h1>
                <h2 class="des">Description : </h2>
                <p class="para">~ Inserting malicious SQL queries into input fields to manipulate databases.</p>
                <h2 class="des">Prevention : </h2>
                <p class="para">~ Use prepared statements and parameterized queries.<br>
                    ~ Regularly update and patch your web applications.</p>
            </div>
        </div>
        <?php include 'footer.php'?>

    </div>
</body>
</html>