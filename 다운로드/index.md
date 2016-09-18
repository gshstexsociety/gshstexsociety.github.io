---
layout: page
menu: 다운로드
title: "양식/예시/입문서 다운로드"
description: "양식/예시/입문서 코드 및 파일 다운로드"
permalink: /다운로드/
---

아래는 자료의 목록입니다. 모든 파일은 매시 정각 <a href="https://github.com/gshslatexintro">GitHub</a>에서 업데이트됩니다.

<a href="{{ "/download.php" | prepend: site.baseurl }}">다운로드 페이지 링크</a>

## 입문서

Day0, Day1, Day2.

<hr>

<div class="row">
  <div class="col cell1of2">
    <h2>양식</h2>
    
    <dl>
    <dt> gshs_report </dt>
    <dd> R&E 보고서 양식. </dd>
    <dt> gshs_thesis </dt>
    <dd> 졸업논문 양식. </dd>
    <dt> gshs_thesis-adv </dt>
    <dd> 졸업논문 양식 - BibTeX, XeLaTeX 사용. </dd>
    <dt> gshs_beamer </dt>
    <dd> 다용도 Beamer 템플릿. </dd>
    <dt> gshs_chem_experiment </dt>
    <dd> 일반화학실험 보고서 도움말 및 양식. </dd>
    <dt> Humantech_Paper_Award </dt>
    <dd> 제 22회 기준 - 휴먼테크논문대상 초록/논문 양식. </dd>
    <dt> gshs_imaginarylab </dt>
    <dd> 무한상상캠프 작품제작설명서 양식. </dd>
    <dt> 5th_jointed_rne_presentation </dt>
    <dd> 제 5회 기준 - 우수 R&E 공동발표회 보고서 양식. </dd>
    <dt> gshs_reading </dt>
    <dd> 2016.1학기 독서 과목 독후감 양식. </dd>
    <dt> gshs_math_seminar_report </dt>
    <dd> 2016.1학기 수학세미나I 보고서 양식. </dd>
    </dl>
    
  </div>
  <div class="col cell1of2">
    <h2>예시</h2>
    예시 전체 다운로드
    
    <dl>
    <dt> Manany_Harmony_Project </dt>
    <dd> 작곡작사동아리 매나니 화성학 강의. </dd>
    <dt> 2016_GSHS_Linear_Algebra_midterm </dt>
    <dd> 선형대수학 시험범위 정리. </dd>
    <dt> Korean_and_Life_14041 </dt>
    <dd> 국어와생활 시험범위 정리. </dd>
    <dt> 2015_Science_Research_Writing </dt>
    <dd> 영어논문작성법 시험범위 정리. </dd>
    <dt> Calculus_Prob_14041 </dt>
    <dd> 미적분학I 레포트. </dd>
    <dt> Discrete_Data_Prob_14080 </dt>
    <dd> 이산구조 과제. </dd>
    <dt> Advanced_Physics_14041 </dt>
    <dd> 고급물리학I 레포트. </dd>
    <dt> Science_In_Narratives_14080 </dt>
    <dd> Science in Narratives 발표자료. </dd>
    <dt> sample_document </dt>
    <dd> 단순 샘플 문서. </dd>
    </dl>
    
  </div>
</div>

<hr>

## 텍 관련 파일 형식

+ .tex : .cls와 함께, 가장 핵심적인 문서 파일입니다. 이 파일을 조판하면 같은 폴더에 결과물(.pdf)이 생성됩니다.
+ .cls : 디자이너가 문서 레이아웃을 설정해놓는 파일입니다. .tex 파일과 같은 폴더 안에 두고 있으면 \documentclass로 사용할 수 있습니다. 저자들은 신경쓸 필요가 없는 파일이지만, 계속해서 조판 오류가 발생할 경우 <a href="http://swpark.ddns.net/latex/도움/">제보</a>해 주십시오.
+ .pdf : 우리가 얻고자 하는 결과물입니다. 물론 .pdf는 직접 수정할 수 없으므로 문서를 다른 사람이 수정 가능하게 하고 싶다면 .tex 파일 및 그림들을 함께 주어야 합니다.
+ .jpg, .png : 가장 친숙하며, 텍에서 사용할 수 있는 이미지 파일입니다. .tex 파일과 같은 폴더 안에 두면 \includegraphics 로 사용할 수 있습니다. 다만, 이미지가 많아질 경우 혼란을 막기 위해 images 폴더 안에 넣어두고 사용할 수 있도록 설정할 수 있습니다. (예시 - sample_document 참조)
+ .pdf, .svg, .eps 등 : 벡터 형식의 이미지 파일입니다. 주로 사진을 제외한 다이어그램, 그래프를 첨부할 때 사용합니다. .pdf가 가장 쉽게 첨부될 수 있으며, 상황에 따라 .svg 나 .eps 를 사용하게 됩니다.
+ .out, .aux, .synctex.gz, .toc, .lof, .lot, .nav, .snm, ... : 조판 시 생겨나는 보조 파일들입니다. 신경쓸 필요가 전혀 없는 파일입니다.
+ .bib : BibTeX 사용시 참고문헌 데이터베이스를 적어놓는 파일입니다.
+ .bst : BibTeX 사용시 참고문헌의 스타일(APA, ieeetr 등)을 지정하는 파일입니다.
+ .bbl, .blg : 조판 시 생겨나는 BibTeX 관련 보조 파일입니다. 이 보조 파일들은 예외적으로 신경써야 할 수도 있습니다 - BibTeX 사용 중 오류가 지속적으로 발생할 경우 이 보조 파일들을 삭제한 후 다시 조판해 보십시오.
+ 그 외의 보조 파일들 : 앞서 언급했듯 전혀 신경쓸 필요가 없지만, 목록은 <a href="https://github.com/github/gitignore/blob/master/TeX.gitignore">github/gitignore</a>에 있습니다.

<hr>

## 텍과 관련없는 파일 형식

아래는 다운로드한 파일에서 무시하셔도 되는 파일 형식들입니다.

+ .md : 마크다운(Markdown) 형식의 문서입니다. 주로 README에서 사용됩니다.
+ .gitignore : Git의 버전 관리에서 배제할 파일의 목록이 담긴 파일입니다.
