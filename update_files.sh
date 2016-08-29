echo Starting...
date

echo PHP Site...
cd /var/www/html
git pull

echo Repo 1...
cd /var/www/LaTeX_files/An-Introduction-to-LaTeX
git pull
zip -FSr ../An-Introduction-to-LaTeX.zip *

echo Repo 2...
cd /var/www/LaTeX_files/examples
git pull
zip -FSr ../examples.zip *

echo Repo 3...
cd /var/www/LaTeX_files/gshslatexintro
git pull
zip -FSr ../gshslatexintro.zip *

echo Repo 4...
cd /var/www/LaTeX_files/pdf-cloud
git pull
zip -FSr ../pdf-cloud.zip *

export TZ=Asia/Seoul
date > /var/www/html/updated.txt

