<?php
class RepositoryDir extends RepositoryBase {
  function timestamp () {
    $ts = 0;
    $d = opendir($this->path);
    while ($f = readdir($d)) {
      $t = filemtime("{$this->path}/{$f}");
      if ($t > $ts) {
        $ts = $t;
      }
    }
    closedir($d);

    return $ts;
  }

  function data () {
    $data = parent::data();

    $d = opendir($this->path);
    while ($f = readdir($d)) {
      if (preg_match("/^([0-9a-zA-Z_\-]+)\.json$/", $f, $m) && $f !== 'package.json') {
        $d1 = json_decode(file_get_contents("{$this->path}/{$f}"), true);

	if (!$this->isCategory($d1)) {
	  continue;
	}

        $data['categories'][$m[1]] = jsonMultilineStringsJoin($d1, array('exclude' => array(array('const'))));
      }

      if (preg_match("/^(detailsBody|popupBody).html$/", $f, $m)) {
	$data['templates'][$m[1]] = file_get_contents("{$this->path}/{$f}");
      }
    }
    closedir($d);

    return $data;
  }

  function scandir($path="") {
    return scandir("{$this->path}/{$path}");
  }

  function file_get_contents ($file) {
    return file_get_contents("{$this->path}/{$file}");
  }

  function file_put_contents ($file, $content) {
    return file_put_contents("{$this->path}/{$file}", $content);
  }
}
