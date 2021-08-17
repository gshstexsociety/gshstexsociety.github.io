#!/usr/bin/env bash

find_branch="git symbolic-ref -q HEAD"
find_upstream="git for-each-ref --format=%(upstream:short)"

echo Started updating posts...
date

echo Updating posts and website...
cd /var/www/source
git fetch --all
git reset --hard $($find_upstream $($find_branch))
jekyll build
