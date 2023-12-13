---
layout: page
menu: 다운로드
title: "양식/예시/입문서 다운로드"
description: "양식/예시/입문서 코드 및 파일 다운로드"
permalink: /다운로드/
---

모든 파일은 매시 정각 <a href="https://github.com/gshstexsociety">GitHub</a>에서 업데이트됩니다.

## <a href="{{ "/download.php" | prepend: site.baseurl }}">다운로드 페이지 링크</a>

## 참고사항

### 텍 관련 파일 형식

+ .tex : .cls와 함께, 가장 핵심적인 문서 파일입니다. 이 파일을 조판하면 같은 폴더에 결과물(.pdf)이 생성됩니다.
+ .cls : 디자이너가 문서 레이아웃을 설정해놓는 파일입니다. .tex 파일과 같은 폴더 안에 두고 있으면 \documentclass로 사용할 수 있습니다. 저자들은 신경쓸 필요가 없는 파일이지만, 계속해서 조판 오류가 발생할 경우 <a href="http://swpark.ddns.net/latex/도움/">제보</a>해 주십시오.
+ .pdf : 우리가 얻고자 하는 결과물입니다. 물론 .pdf는 직접 수정하기 힘드므로 문서를 다른 사람이 수정 가능하게 하고 싶다면 .tex 파일 및 그림들을 함께 주어야 합니다.
+ .jpg, .png : 가장 친숙하며, 텍에서 사용할 수 있는 이미지 파일입니다. .tex 파일과 같은 폴더 안에 두면 \includegraphics 로 사용할 수 있습니다. 다만, 이미지가 많아질 경우 혼란을 막기 위해 images 폴더 안에 넣어두고 사용할 수 있도록 설정할 수 있습니다. (예시 - sample_document 참조)
+ .pdf, .svg, .eps 등 : 벡터 형식의 이미지 파일입니다. 주로 사진을 제외한 다이어그램, 그래프를 첨부할 때 사용합니다. .pdf가 가장 쉽게 첨부될 수 있으며, 상황에 따라 .svg 나 .eps 를 사용하게 됩니다.
+ .out, .aux, .synctex.gz, .toc, .lof, .lot, .nav, .snm, ... : 조판 시 생겨나는 보조 파일들입니다. 신경쓸 필요가 전혀 없는 파일입니다.
+ .bib : BibTeX 사용시 참고문헌 데이터베이스를 적어놓는 파일입니다.
+ .bst : BibTeX 사용시 참고문헌의 스타일(APA, ieeetr 등)을 지정하는 파일입니다.
+ .bbl, .blg : 조판 시 생겨나는 BibTeX 관련 보조 파일입니다. 이 보조 파일들은 예외적으로 신경써야 할 수도 있습니다 - BibTeX 사용 중 오류가 지속적으로 발생할 경우 이 보조 파일들을 삭제한 후 다시 조판해 보십시오.
+ 그 외의 보조 파일들 : 앞서 언급했듯 전혀 신경쓸 필요가 없지만, 목록은 <a href="https://github.com/github/gitignore/blob/master/TeX.gitignore">github/gitignore</a>에 있습니다.

<hr>

### 텍과 관련없는 파일 형식

아래는 다운로드한 파일에서 무시하셔도 되는 파일 형식들입니다.

+ .md : 마크다운(Markdown) 형식의 문서입니다. 주로 README에서 사용됩니다.
+ .gitignore : Git의 버전 관리에서 배제할 파일의 목록이 담긴 파일입니다.
