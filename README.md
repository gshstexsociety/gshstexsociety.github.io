# latex.gs.hs.kr
## 개요
경기과학고등학교 레이텍 협회 사이트 저장소입니다. http://latex.gs.hs.kr/ 에서 만나볼 수 있습니다.

서버에 관한 정보는 [Wiki](https://github.com/gshslatexintro/latex.gs.hs.kr/wiki)에서 확인 가능합니다.

## 설치
이 사이트는 Jekyll을 이용하여 구동됩니다. local 환경에서 운영하려는 경우 다음 과정을 통해 운영할 수 있습니다.
### 저장소 복제
```
git clone https://github.com/gshslatexintro/latex.gs.hs.kr
mv latex.gs.hs.kr /var/www/source
```
### 환경 설치
```
sudo apt-get install ruby-dev gcc make php build-essential apache2
```
### Apache2 설정 (보통 이미 되어 있음)
```
sudo service apache2 start
systemctl enable apache2
```
### Jekyll 설치
```
sudo gem install jekyll bundler
cd /var/www/source
sudo bundle install
```
## 환경 구성
local 환경에서 테스트하려면 저장소 안의 ```_config.yml``` 파일에서 아래와 같이 ```url``` 부분을 수정해야 합니다.
```yaml
# Site settings
title: latex.gs.hs.kr
baseurl: ""
# url: "http://latex.gs.hs.kr"
url: "127.0.0.1"

...
```
## 실행
위 작업이 완료되었다면 아래 명령어를 통해 사이트를 실행할 수 있습니다.

```
sudo jekyll serve
```

이후 http://localhost 나 http://localhost:4000 으로 접속하면 됩니다.

실제 서버를 운영할 때는 nohup을 통해 실행하십시오.
```
nohup jekyll serve 1>/dev/null 2>&1 &
```
## 갱신
```update_posts.sh```와 ```update_files.sh```를 실행하면 수정된 사항들을 갱신할 수 있습니다. (글 갱신 등.)

```/var/www/source``` 안에서 위 실행파일들을 [cron](https://crontab.guru/) 등을 이용해 주기적으로 실행하면 됩니다. 현재 갱신 주기는 각각 1분, 1시간입니다.


## 글 작성
[CMS](http://latex.gs.hs.kr/cms/) 에서 글을 작성할 수 있습니다. gshslatexintro에 소속된 github 계정이 필요합니다. [GiHhub Token](https://github.com/settings/tokens)에서 ```repo``` 권한을 가진 ```token```을 생성해 암호란에 입력하면 됩니다. 


## 주의
**경고 : MS 메모장으로는 `.md` 파일을 편집하지 마시오.**
Jekyll 파싱 에러를 야기합니다. 편집할 때에는 GitHub에서 직접 편집하거나, [npp](https://notepad-plus-plus.org/)을 사용하십시오.

**Warning : Do not edit `.md` files with MS Notepad.**
It causes Jekyll parsing error. We would recommend to edit and commit on GitHub directly, or edit with [npp](https://notepad-plus-plus.org/).

Forked from [latex-project.org](https://github.com/latex3/latex3.github.io) under CC-BY 4.0 License.

