echo Started updating posts...
date

echo Updating posts and website...
cd /var/www/source
git pull
jekyll build

cd /var/www/source/files
git clone https://github.com/gshslatexintro/examples-mirror examples-mirror
