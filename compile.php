<?php
$_IN = __DIR__."/protos/src";
$_OUT = __DIR__."/src";

function listProtos($dir) {
  $files = [];
  if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        if (is_dir($dir."/".$entry)) {
          $files = array_merge($files, listProtos($dir."/".$entry));
        }
        else {
          $ext = explode(".", $entry);
          if (array_pop($ext) == "proto") {
            $files[] = $dir."/".$entry;
          }
        }
      }
    }
    closedir($handle);
  }

  return $files;
}

$fp = fopen("out.log", "w");
$files = listProtos($_IN);
foreach ($files as $file) {
  $cmd = "protoc --php_out=\"".$_OUT."\" -I \"".$_IN."\" \"".$file."\"";
  fwrite($fp, "Compile ".$file."\n");
  $out = shell_exec($cmd);
  fwrite($fp, $out);
}
fclose($fp);

echo "Log written to out.log\n";
