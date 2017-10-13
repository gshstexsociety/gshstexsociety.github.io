---
layout: home
menu: Home
title: 경기과학고 텍 사용자협회
description: "LaTeX is a high-quality typesetting system; it includes features designed for the production of technical and scientific documentation."
---
<?php
	$size_1=number_format(filesize("files/gshs-format.zip")/1024/1024,2);
	$size_2=number_format(filesize("files/examples.zip")/1024/1024,2);
	$size_3=number_format(filesize("files/An-Introduction-to-LaTeX.zip")/1024/1024,2);
	$size_4=number_format(filesize("files/examples-mirror.zip")/1024/1024,2);
	$size_5=number_format(filesize("files/gshs-format-mirror.zip")/1024/1024,2);
?>
<h1>다운로드</h1>

<div class="row">
	<div class="col cell1of3">
		<a href="files/gshs-format.zip" class="btn"><b>양식</b>(<?php echo $size_1 ?>MB)</a>
		<br>
		R&E, 졸업논문, 휴텍 양식 등
	</div>
	<div class="col cell1of3">
		<a href="files/examples.zip" class="btn"><b>예제</b>(<?php echo $size_2 ?>MB)</a>
		<br>
		매나니 화성학 강의 등
	</div>
	<div class="col cell1of3">
		<a href="files/An-Introduction-to-LaTeX.zip" class="btn"><b>텍 입문서</b>(<?php echo $size_3 ?>MB)</a>
		<br>
		v2.0 - Day0,1,2,3 / TeX Cheatsheet / 설치 가이드, 협회 참여 가이드
	</div>
</div>
<hr>
<div class="row">
	<div class="col cell1of3">
		<a href="files/gshs-format-mirror.zip" class="btn"><b>양식-mirror</b>(<?php echo $size_5 ?>MB)</a>
		<br>
		컴파일된 pdf파일 포함 버전
	</div>
	<div class="col cell1of3">
		<a href="files/examples-mirror.zip" class="btn"><b>예제-mirror</b>(<?php echo $size_4 ?>MB)</a>
		<br>
		컴파일된 pdf파일 포함 버전
	</div>
	<div class="col cell1of3">
		<a href="fileList.php" class="btn">전체 파일 목록</a>
	</div>
</div>
<hr>
