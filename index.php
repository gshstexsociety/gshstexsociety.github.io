<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>경기과학고 텍(TeX) 사용자협회</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="http://i.imgur.com/yf3RZGJ.jpg">
    <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="stylesheets/github-light.css" media="screen">
  </head>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <section class="page-header">
		<h1 class="project-name">경기과학고 텍 사용자협회</h1>
		<h2 class="project-tagline">GSHS TeX Society</h2>
		<h2 class="project-tagline"> 각종 양식 제공 + 입문서 + 예제 파일들 </h2>
		<h6> 경기과학고 학생 및 교직원이라면 누구나 참여 가능합니다. </h6>
		
		<?php
		$size_1=number_format(filesize("files/gshslatexintro.zip")/1024/1024,2);
		$size_2=number_format(filesize("files/examples.zip")/1024/1024,2);
		$size_3=number_format(filesize("files/An-Introduction-to-LaTeX.zip")/1024/1024,2);
		$size_4=number_format(filesize("files/pdf-cloud.zip")/1024/1024,2);		
		?>

		<a href="https://github.com/gshslatexintro/gshslatexintro" class="btn"><b>GitHub</b>에서 보기</a>
		<a href="files/gshslatexintro.zip" class="btn"><b>양식(R&E보고서, 졸업논문 등) </b>(<?php echo $size_1 ?>MB)</a>
		<a href="files/examples.zip" class="btn"><b> TeX 예시코드 </b>(<?php echo $size_2 ?>MB)</a>
		<a href="files/An-Introduction-to-LaTeX.zip" class="btn"><b> TeX 입문서 </b>(<?php echo $size_3 ?>MB)</a>
		<a href="files/pdf-cloud.zip" class="btn"><b> 기타 자료 모음집 </b>(<?php echo $size_4 ?>MB)</a>
		<a href="fileList.php" class="btn">전체 파일 목록</a>

	<h6> 1시간 주기로 GitHub에서 업데이트됩니다. </h6>
	<h6> 폴더에 포함되어 있는 .gitignore 파일들은 무시하셔도 됩니다. </h6>
		<div align="center">
		<div class="fb-like" data-href="http://gshslatexintro.github.io/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
    </section>

    <section class="main-content">

<h3> 양식, 예시 파일에 관하여 </h3>

<h4> 각종 양식들 - tex 또는 cls 파일로 제공됩니다. </h4>
<h4> 모든 양식은 TeXstudio 사용자를 기준으로 제작됩니다. </h4>

<li> <b>GSHS RnE report class</b> : 기초/심화 R&E tex 양식 및 샘플 (<b>정민석</b>, 박승원, 이상헌) </li>
<li> <b>gshs_thesis_certified</b> : (공식) 졸업논문 R&E tex 샘플(겸 논문작성 가이드) 및 cls 파일 (<b>목진욱</b>, 박승원, 이주찬) </li>
<li> gshs_thesis_certified-<b>adv</b> : BibTeX, subfiles, xelatex 을 이용한 졸업논문 양식 (<b>이주찬</b>, 박승원) </li>
<li> sample_document : 단순한 샘플 문서. User template 으로 등록해두면 편합니다. (박승원) </li>
<li> <b>gshs_chem_experiment</b> : 일반화학실험 실험보고서 도움말 및 cls 파일(beta, 2016.01.13) (<b>이주찬</b>) </li>
<li> <b>Humantech_Paper_Award</b> : 휴먼테크논문대회 초록/논문 양식(2015년도-22회 기준) (<b>목진욱</b>, 박승원) </li>
<li> Jointed_RnE_presentation : 영재학교 우수 R&E 공동발표회 보고서 양식(제 5회(대전과학고) 기준) (<b>박승원</b>) </li>
<li> gshs_reading : 2016학년도 1학기 독서 독후감 양식 (<b>이주찬</b>)</li>
<li> gshs_math_seminar_report : 2016학년도 수학세미나I 보고서 양식 (<b>박승원</b>) </li>
<li> gshs_poster : (Beta) 경기과학고 전용 포스터 양식 (<b>박승원</b>) </li>
<li> gshs_imaginarylab : 무한상상캠프 작품제작설명서 양식 (<b>박승원</b>, 서울) </li>

<h4> 학습용 예시 tex 파일들(업데이트되지 않음) </h4>
<li> Calculus_Prob_14041 : 미적분학 I 레포트 (박승원) </li>
<li> Discrete_Data_Prob_14080 : 이산구조 레포트 (이상헌) </li>
<li> Korean_and_Life_14041 : 국어와생활 시험범위 정리 (박승원) </li>
<li> 2015_Science_Research_Writing : 영어논문작성법 시험범위 정리 (박승원, 이상헌, 이주찬) </li>
<li> Advanced_Physics_14041 : 고급물리학I 레포트 </li>
<li> 2016_GSHS_Linear_Algebra_midterm : Linear Algebra Thm Archive - for Mid-Term Exam(황동욱, 박승원) </li>
<li> Manany_Harmony_Project : 경기과학고 작곡작사동아리 매나니 화성학 강의(이상헌) </li>
<li> Science_In_Narratives_14080 : 경기과학고 'Science in Narratives' 과목 발표자료(이상헌) </li>

<h3> LaTeX 시작하기 </h3>
<h4> TeX 엔진 설치 </h4>
<p>TeX 을 사용하기 위해서는 TeXlive 를 설치해야 합니다.
<a href="https://github.com/gshslatexintro/An-Introduction-to-LaTeX/blob/master/Installation.md" target="_blank">TeXlive 설치 가이드</a>

용량이 2GB정도 되니 주의 바랍니다. 설치 후 차지하는 용량은 약 3GB.</p>

<h4> TeX 에디터 설치 </h4>
<p>TeXstudio를 강력 추천합니다. <a href="http://www.texstudio.org/" target="_blank">http://www.texstudio.org/</a></p>
<p>TeXworks Editor(Windows)이나 TeXshop(OS X) 에 비하여 TeXstudio 가 비교 불가할 정도로 편리합니다.</p>

<h3> 경기과학고 텍 사용자협회 활동에 참여하기 </h3>

<h4> 참여 의사 표명, 관련 문의는 이메일로 : <a href="https://github.com/seungwonpark" target="_blank">박승원</a> (32기, 現 회장) </h4>
<div align="center">
	<div class="fb-page" data-href="https://www.facebook.com/gshstexsociety" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/gshstexsociety"><a href="https://www.facebook.com/gshstexsociety">경기과학고 TeX 사용자 협회</a></blockquote></div></div>
	<!-- <div class="fb-comments" data-href="http://gshslatexintro.github.io/" data-width="1000" data-numposts="10"></div> -->
</div>

<p>ⓒ  경기과학고 텍 사용자협회 </p>


      <footer class="site-footer">
        <span class="site-footer-credits">This page was generated by <a href="https://pages.github.com">GitHub Pages</a> using the <a href="https://github.com/jasonlong/cayman-theme">Cayman theme</a> by <a href="https://twitter.com/jasonlong">Jason Long</a>, and hosted by Chansol Yang's Raspberry Pi server.</span>
      </footer>

    </section>


  </body>
</html>
