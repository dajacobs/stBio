git pull
composer $1
npm prune
npm $1
node_modules/.bin/bower prune
node_modules/.bin/bower $1
node_modules/.bin/gulp
sudo service nginx reload
