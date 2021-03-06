<?php
class RepositoryGit extends RepositoryBase {
  function timestamp () {
    $ts = (int)shell_exec("cd " . escapeShellArg($this->path) . "; git log -1 --pretty=format:%ct");

    return $ts;
  }

  function data () {
    $data = parent::data();

    $d = popen("cd " . escapeShellArg($this->path) . "; git ls-tree HEAD", "r");
    while ($r = fgets($d)) {
      if (preg_match("/^[0-9]{6} blob [0-9a-f]{40}\t(([0-9a-zA-Z_\-]+)\.json)$/", $r, $m)) {
        $f = $m[1];
        $id = $m[2];

        if ($f === 'package.json') {
          continue;
        }

        $d1 = json_decode(shell_exec("cd " . escapeShellArg($this->path) . "; git show HEAD:" . escapeShellArg($f)), true);

	if (!$this->isCategory($d1)) {
	  continue;
	}

        $data['categories'][$id] = jsonMultilineStringsJoin($d1, array('exclude' => array(array('const'))));
      }

      if (preg_match("/^[0-9]{6} blob [0-9a-f]{40}\t((detailsBody|popupBody)\.html)$/", $r, $m)) {
	$data['templates'][$m[2]] = shell_exec("cd " . escapeShellArg($this->path) . "; git show HEAD:" . escapeShellArg($m[1]));
      }
    }
    pclose($d);

    return $data;
  }

  function scandir($path="") {
    if ($path !== '' && substr($path, -1) !== '/') {
      $path .= '/';
    }

    $d = popen("cd " . escapeShellArg($this->path) . "; git ls-tree HEAD " . escapeShellArg($path), "r");
    $ret = array();
    while ($r = fgets($d)) {
      $ret[] = substr($r, 53);
    }
    pclose($d);

    return $ret;
  }

  function file_get_contents ($file) {
    return shell_exec("cd " . escapeShellArg($this->path) . "; git show HEAD:" . escapeShellArg($file));
  }
}
