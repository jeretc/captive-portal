Custom Fake-Portal To Get User Credentials For Social Media Accounts. 


![rsz_mobile-portal](https://cloud.githubusercontent.com/assets/20941239/21763192/98ff6f92-d697-11e6-8ed1-017aedddce56.jpg)



**Introduction**

This is a *custom fake evil hotspot portal* to capture credentials. It's a deceptive way to get user's social media login accounts. This hack was tested on *ParrotSec* and with *WiFi-Pumpkin*. You can use any linux machine, mitm tool to perform this attack. The techniques are more or less the same.



**Requirements**

Wifi-Pumpkin, Apache2 WebServer, Mysql, PhP


Kali & Parrotsec comes with apache, mysql and Php but if you need to install it manually, these commands will install the necessary files.

**Apache2**

*sudo apt-get update*
*sudo apt-get install apache2*

**Mysql**

*sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql*

**Activate mysql**

*sudo mysql_install_db*
 
**Finish up installation running the MySQL set up script**

*sudo /usr/bin/mysql_secure_installation*
 
**PhP**

*sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt*



**For Wifi-Pumpkin installation refer to :**

*https://github.com/P0cL4bs/WiFi-Pumpkin/wiki/Installation*


**The easy method:** 

Use this portal with Wifi-Pumpkin, copy the downloaded files to your "www" folder. Download Wifi-Pumpkin :

*https://github.com/P0cL4bs/WiFi-Pumpkin*



**the learning method, do it manually**

*http://www.rootsh3ll.com/2015/12/fake-wifi-access-point-walkthrough/*

 


Thanks and have fun!

*www.facebook.com/hackprooftips* **<--** like my page :smile:


This tutorial and Custom Fake-Portal are for informational and educational purposes only. Do it at your own risk.
