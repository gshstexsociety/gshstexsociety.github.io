echo Starting...
date

echo PHP Site...
echo PHP site update diasbled due to security issues
cd /var/www/source
#git pull

echo Repo 1...
cd /var/www/source/files/An-Introduction-to-LaTeX
git pull
zip -FSr /var/www/source/files/An-Introduction-to-LaTeX.zip *

echo Repo 2...
cd /var/www/source/files/examples
git pull
zip -FSr /var/www/source/files/examples.zip *

echo Repo 3...
cd /var/www/source/files/gshslatexintro
git pull
zip -FSr /var/www/source/files/gshslatexintro.zip *

echo Repo 4...
cd /var/www/source/files/pdf-cloud
git pull
zip -FSr /var/www/source/files/pdf-cloud.zip *

echo Time...
export TZ=Asia/Seoul
date > /var/www/source/updated.txt

