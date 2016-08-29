echo Starting...
date

echo PHP Site...
cd /home/pi/web/gshs/LaTeX
git pull

echo Repo 1...
cd /home/pi/web/gshs/LaTeX_Files/An-Introduction-to-LaTeX
git pull
zip -FSr ../An-Introduction-to-LaTeX.zip *

echo Repo 2...
cd /home/pi/web/gshs/LaTeX_Files/examples
git pull
zip -FSr ../examples.zip *

echo Repo 3...
cd /home/pi/web/gshs/LaTeX_Files/gshslatexintro
git pull
zip -FSr ../gshslatexintro.zip *

echo Repo 4...
cd /home/pi/web/gshs/LaTeX_Files/pdf-cloud
git pull
zip -FSr ../pdf-cloud.zip *

export TZ=Asia/Seoul
date > /home/pi/web/gshs/LaTeX/updated.txt

