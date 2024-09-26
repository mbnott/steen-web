# steen-web
A Web interface to view everything about steen from its [API](https://github.com/mbnott/steen-api).

## Links
Steen Rest API: [steen-api](https://github.com/mbnott/steen-api)

# Deployment
This is a small guide on how to setup steen-web on a local ubuntu machine/WSL. Must have admin rights.
1. Download Apache and PHP:
```sh
sudo apt install apache2 apache2-doc php8.3 php8.3-cli^
```  
2. Move to the apache dir with `cd /var/www/html` and clone this repo:
```sh
git clone https://github.com/mbnott/steen-web.git
```
3. Copy to apache config file to sites-available:
```sh
sudo cp ./steen-api/apache/steen.web.conf /etc/apache2/sites-available/
```
4. Enable the apache rewrite module with `sudo a2enmod rewrite` and activate the website with `sudo a2ensite steen.web`
5. Restart apache:
```sh
sudo service apache2 start
```
Your website should now be accessible from requests to your server with the `steen.web` url. You can set up a virtual host on windows with the guide below.
## Windows Virtual Host
To add `steen.web` to your virtual hosts, you can either download [PowerToys](https://learn.microsoft.com/en-us/windows/powertoys/) and use the built in Host files editor, or follow the steps below:  
1. Open `C:\Windows\System32\drivers\etc\hosts` with your favorite text editor (like notepad) with Administrator rights  
2. Add the following to the end of the file:
```
  127.0.0.1 steen.web
  ::1       steen.web
```
