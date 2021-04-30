# latex.gs.hs.kr
## 개요
경기과학고등학교 레이텍 협회 사이트 저장소입니다. http://latex.gs.hs.kr/ 에서 만나볼 수 있습니다.

## 설치
이 사이트는 Jekyll을 이용하여 구동됩니다. local 환경에서 운영하려는 경우 다음 과정을 통해 운영할 수 있습니다.
### 환경 설치
```
sudo apt-get install ruby-dev gcc make php build-essential
```
### Jekyll 설치
```
sudo gem install jekyll bundler
sudo bundle install
```
### 저장소 복제
```
git clone https://github.com/gshslatexintro/latex.gs.hs.kr
cd latex.gs.hs.kr
```
## 환경 구성
local 환경에서 올바르게 운영하려면 저장소 안의 ```_config.yml``` 파일을 아래와 같이 ```baseurl```과 ```url``` 부분을 수정해야 합니다.
```yaml
# Site settings
title: latex.gs.hs.kr
# baseurl: "http://latex.gs.hs.kr"
baseurl: ""
# url: "http://latex.gs.hs.kr"
url: "127.0.0.1"

# Build settings
markdown: kramdown
# enable recognition of Github Flavored Markdown (GFM)
# kramdown:
#  input: GFM

# Permalinks
# http://jekyllrb.com/docs/permalinks/
# permalink: date|pretty|ordinal|none
permalink: pretty

# Destination
destination: /var/www/html

# GitHub:
github:
  repo: gshslatexintro/latex.gs.hs.kr
  branch: master
```
## 실행
위 작업이 완료되었다면 아래 명령어를 통해 사이트를 실행할 수 있습니다.

```sudo jekyll serve```

이후 http://localhost:4000 으로 접속하면 됩니다.


## 주의
**경고 : MS 메모장으로는 `.md` 파일을 편집하지 마시오.**
Jekyll 파싱 에러를 야기합니다. 편집할 때에는 GitHub에서 직접 편집하거나, [npp](https://notepad-plus-plus.org/)을 사용하십시오.

**Warning : Do not edit `.md` files with MS Notepad.**
It causes Jekyll parsing error. We would recommend to edit and commit on GitHub directly, or edit with [npp](https://notepad-plus-plus.org/).

Forked from [latex-project.org](https://github.com/latex3/latex3.github.io) under CC-BY 4.0 License.

