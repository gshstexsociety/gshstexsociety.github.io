---
layout: home
menu: Home
title: 경기과학고 텍 사용자협회
description: "LaTeX is a high-quality typesetting system; it includes features designed for the production of technical and scientific documentation."
---
<?php
	$size_1=number_format(filesize("files/gshslatexintro.zip")/1024/1024,2);
	$size_2=number_format(filesize("files/examples.zip")/1024/1024,2);
	$size_3=number_format(filesize("files/An-Introduction-to-LaTeX.zip")/1024/1024,2);
	$size_4=number_format(filesize("files/pdf-cloud.zip")/1024/1024,2);
?>
<h1>다운로드</h1>

<div class="row">
	<div class="col cell1of3">
		<a href="files/gshslatexintro.zip" class="btn"><b>양식</b>(<?php echo $size_1 ?>MB)</a>
		<br>
		R&E, 졸업논문, 휴텍 양식 등
	</div>
	<div class="col cell1of3">
		<a href="files/examples.zip" class="btn"><b>예시 코드</b>(<?php echo $size_2 ?>MB)</a>
		<br>
		매나니 화성학 강의 등
	</div>
	<div class="col cell1of3">
		<a href="files/An-Introduction-to-LaTeX.zip" class="btn"><b>텍 입문서</b>(<?php echo $size_3 ?>MB)</a>
		<br>
		v2.0 - Day0, Day1, Day2
	</div>
</div>
<hr>
<div class="row">
	<div class="col cell1of2">
		<a href="files/pdf-cloud.zip" class="btn"><b>기타 자료 모음집</b>(<?php echo $size_4 ?>MB)</a>
	</div>
	<div class="col cell1of2">
		<a href="fileList.php" class="btn">전체 파일 목록</a>
	</div>
</div>
<hr>
