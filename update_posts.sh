echo Started updating posts...
date

echo Updating posts and website...
cd /var/www/source
git pull
jekyll build
