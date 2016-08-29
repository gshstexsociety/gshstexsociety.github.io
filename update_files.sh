echo Starting...
date

echo PHP Site...
cd /var/www/html
git pull

echo Repo 1...
cd /var/www/html/files/An-Introduction-to-LaTeX
git pull
zip -FSr /var/www/html/files/An-Introduction-to-LaTeX.zip *

echo Repo 2...
cd /var/www/html/files/examples
git pull
zip -FSr /var/www/html/files/examples.zip *

echo Repo 3...
cd /var/www/html/files/gshslatexintro
git pull
zip -FSr /var/www/html/files/gshslatexintro.zip *

echo Repo 4...
cd /var/www/html/files/pdf-cloud
git pull
zip -FSr /var/www/html/files/pdf-cloud.zip *

export TZ=Asia/Seoul
date > /var/www/html/updated.txt

