<html>
<head>
  <meta charset="UTF-8">
  <title>경기과학고 TeX 사용자협회 git 파일</title>
</head>
<body>
  <p>Click to expand...</p>
  <p>차례로 입문서 / 예시코드 / 양식 / 파일모음집 </p>
  <?php
	echo "<p class=\"project-tagline\" style=\"font-size:0.67rem\">Last Updated:";
	$updateinfo = file_get_contents("updated.txt");
	echo $updateinfo;
	echo "</p>";
  ?>
  <?php
  /*
  function scan($dir){
    $files=scandir($dir);
    foreach($files as &$val){
      if (is_dir($val)===true){
        //scan($val);
        echo $val, "\n";
      }
      else{
        echo $val, "\n";
      }
    }

  }*/
/*
  function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = $dir.DIRECTORY_SEPARATOR.$value;
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

$files=getDirContents(".");


echo "<ul>";
foreach ($files as $val){
  if (strpos($val, '.git') !== false) {

}else{
  echo "<li><a href=\"{$val}\">{$val}</a></li>\n";
}

}
echo "</ul>";*/

function getDirContentsR($dir){
  $files = scandir($dir);

  foreach($files as $key => $value){
      $path = $dir.DIRECTORY_SEPARATOR.$value;
      if ($value[0]==".") continue;

      if(!is_dir($path)) { //File
        $size=number_format(filesize($path)/1024/1024,3);
          echo "<li><a href=\"{$path}\" >{$value} ({$size} MB)</a></li>\n";
      } else if($value != "." && $value != "..") { //Directory
        echo "<li><span class=\"Collapsable\">{$value}</span><ul>\n";
        getDirContentsR($path);
        echo "</ul></li>\n";

      }
  }
}
echo "<ul id=\"root\">";
getDirContentsR("files/");
echo "</ul>";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
$(".Collapsable").click(function () {

    $(this).parent().children().toggle();
    $(this).toggle();

});

$(".Collapsable").each(function(){

    $(this).parent().children().toggle();
    $(this).toggle();
});
</script>


</body>
</html>
