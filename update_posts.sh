PATH=/bin/date:/usr/local/bin:/usr/local/rvm/gems/ruby-2.3.0/bin:/usr/bin

echo Started updating posts...
date

echo Updating posts and website...
cd /var/www/source
git pull
jekyll build
