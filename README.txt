# CloudComputtingWebAppGroup29
Web application that runs on amazon servers using Amazon Web Services

aws educate login: 

Password: CloudComputing@2021

Emails:
archibaldshingirai.makotose@mail.bcu.ac.uk
ahmed.mohamed3@mail.bcu.ac.uk
arslan.badar@mail.bcu.ac.uk

Access EC2 commands:
ssh -i C:\Users\Ahmed\Documents\computer-science-repo\Third-Year\CloudComputtingWebAppGroup29\WebServerpemkeypair.pem ec2-user@34.235.160.153

Copy fiels to EC2 command:

scp -i <path to private key pair> -r <path to host file> ec2-user@52.202.252.241:/var/www/html


<<Ignore>>
D:\computer-science-repo\Third-Year\Cloud-Computing\CloudComputtingWebAppGroup29\WebServerpemkeypair.pem
D:\computer-science-repo\Third-Year\Cloud-Computing\CloudComputtingWebAppGroup29\xampp2\htdocs\Application\*
<<>>

Connect to database command:

mysql -h websitedatabase.cfv3cdy44ueb.us-east-1.rds.amazonaws.com -P 3306 -u admin -p

EC2 folder containing website command:
cd /var/www/html






###################################
try this code to install php v7

link obtained below 
https://intellipaat.com/community/6543/how-to-install-php-7-on-ec2-t2-micro-instance-running-amazon-linux-distro
#################################

# automatically includes php70-cli php70-common php70-json php70-process php70-xml

sudo yum install php70

#####################################
then run the following ones individually 
####################################
# Install a few commonly used php packages

sudo yum install php70-gd

sudo yum install php70-imap

sudo yum install php70-mbstring

sudo yum install php70-mysqlnd

sudo yum install php70-opcache

sudo yum install php70-pdo

sudo yum install php70-pecl-apcu

##################################################
2. Modify DirectoryIndex to include index.php
############################################
sudo nano /etc/httpd/conf/httpd.conf

################################
change 

<IfModule dir_module>

    DirectoryIndex index.html

</IfModule>


to become

<IfModule dir_module>

    DirectoryIndex index.html index.php

</IfModule>


####################################
