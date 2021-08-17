#!/usr/bin/env bash
# Git repo information
org_url=https://github.com/gshslatexintro
repo_list="An-Introduction-to-LaTeX examples examples-mirror gshs-format gshs-format-mirror"

find_branch="git symbolic-ref -q HEAD"
find_upstream="git for-each-ref --format=%(upstream:short)"

echo Started updating files...
date

cd /var/www/source/files/

for repo in $repo_list; do
echo Repo $repo...
if [ ! -d $repo ]; then
git clone $org_url/$repo
fi
pushd $repo
git fetch --all
echo Checkout $($find_upstream $($find_branch))...
git reset --hard $($find_upstream $($find_branch))
zip -FSr ../$repo.zip *
popd
done

echo Time...
date > /var/www/source/updated.txt

echo Building website...
cd /var/www/source
jekyll build
