PWD=$(pwd)
BASENAME=$(basename $PWD)
sudo rm /etc/nginx/sites-enabled/default
sudo ln -s "${PWD}/vhost" /etc/nginx/sites-available/${BASENAME}
sudo ln -s /etc/nginx/sites-available/${BASENAME} /etc/nginx/sites-enabled/${BASENAME}
sudo service nginx stop
sudo service nginx start
