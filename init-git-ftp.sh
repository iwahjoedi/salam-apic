#!/bin/sh

echo "[IW] git-ftp init start." &&
git checkout -b git-ftp-init &&
mv .gitignore gitignore &&

# Add your git-ftp exclude files here
echo "docker-compose.yml" >> .gitignore &&
echo "phpunit.xml.dist" >> .gitignore &&
echo "spark" >> .gitignore &&
echo ".git/*" >> .gitignore &&
echo ".circleci/*" >> .gitignore &&
echo ".editorconfig" >> .gitignore &&
echo ".env.dev" >> .gitignore &&
echo ".gitlab-ci.yaml" >> .gitignore &&
echo "composer.json" >> .gitignore &&
echo "composer.lock" >> .gitignore &&
echo "docker-compose.yml" >> .gitignore &&
echo "env.prod" >> .gitignore &&
echo "README.md" >> .gitignore &&

echo "app/*" >> .gitignore &&
echo "system/*" >> .gitignore &&
echo "writeable/*" >> .gitignore &&
echo "vendor/*" >> .gitignore &&

git add --all && git commit -m 'git-ftp-init' --quite &&

git rev-parse HEAD | xargs git checkout &&
git ftp init -vv  &&
git ftp catchup -vv &&

git checkout master &&
git branch -d git-ftp-init &&

echo "[IW] git-ftp init done."


