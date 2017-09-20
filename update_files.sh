# Repo information
repo_list="An-Introduction-to-LaTeX examples examples-mirror gshs-format gshs-format-mirror"

echo Started updating files...
date

cd /var/www/source/files/

for repo in $repo_list; do
echo Repo $repo...
if [ ! -d $repo ]; then
git clone https://github.com/gshslatexintro/$repo
fi
pushd $repo
git pull
zip -FSr ../$repo.zip /*
popd
done
