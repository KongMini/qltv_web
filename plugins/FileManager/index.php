<?php

/**
 * +-------------------------------------------------------------------+
 * |                    F I L E M A N A G E R   (v10.41)               |
 * |                                                                   |
 * | Copyright Gerd Tentler               www.gerd-tentler.de/tools    |
 * | Created: Dec. 7, 2006                Last modified: Sep. 22, 2015 |
 * +-------------------------------------------------------------------+
 * | This program may be used and hosted free of charge by anyone for  |
 * | personal purpose as long as this copyright notice remains intact. |
 * |                                                                   |
 * | Obtain permission before selling the code for this program or     |
 * | hosting this software on a commercial website or redistributing   |
 * | this software over the Internet or in any other medium. In all    |
 * | cases copyright must remain intact.                               |
 * +-------------------------------------------------------------------+
 */
include_once('class/FileManager.php');

?>
<!DOCTYPE html>
<html>

<head>
  <title>File Manager</title>
</head>

<body class="fmBody">
  <?php
  /** Site config */
  include_once('../../configuration.php');
  $protocol = (strpos(strtolower($_SERVER['REQUEST_SCHEME']), 'https') == FALSE ? 'http' : 'https') . '://' . $_SERVER['HTTP_HOST'];
  /** FileManager config */
  $FileManager = new FileManager();
  $FileManager->tmpFilePath = __dir__ . '/tmp';
  $FileManager->fmWebPath  = $protocol . '/' . $ariaConfig_sitename . 'plugins/FileManager';
  $FileManager->rootDir = '../../upload';
  $FileManager->enableUpload  = true;
  $FileManager->language = 'vi';
  $FileManager->encoding = "UTF-8";
  $FileManager->fmView = "icons";

  $FileManager->maxImageWidth = 1500;
  $FileManager->maxImageHeight = 1000;

  // Phân quyền //
  $FileManager->enableUpload  = true;
  $FileManager->enablePermissions  = false;
  $FileManager->hideDisabledIcons  = true;
  // $FileManager->useRightClickMenu  = false;
  $FileManager->enableEdit  = false;
  $FileManager->enableCopy  = false;
  $FileManager->enableSearch  = false;
  $FileManager->enableImageRotation  = false;
  $FileManager->enableBulkDownload  = false;
  $FileManager->replSpacesUpload  = true;
  $FileManager->lowerCaseUpload  = true;

  if (isset($_SESSION["user"]) && $_SESSION["xkt_timesession"] > 0) {
    $FileManager->loginPassword  = false;
  } else {
    $FileManager->loginPassword  = true;
  }
  print $FileManager->create();

  ?>
  <script>
    function getUrlParam(paramName) {
      var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i');
      var match = window.location.search.match(reParam);

      return (match && match.length > 1) ? match[1] : '';
    }
    var mediaUrl = '<?= $protocol . '/' . $ariaConfig_sitename . 'upload' ?>';
  </script>
</body>

</html>