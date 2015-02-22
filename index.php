<?php
  switch($_GET['showpage']) {
    case 'activity':
    case 'applica1':
    case 'court':
    case 'index':
    case 'jobopps':
    case 'links':
    case 'mission':
    case 'organiza':
    case 'rsvp':
    case 'staff':
    case 'volex':
    case 'voluntee':
      echo "loading " . $_GET['showpage'] . '.htm';
      echo "loading " . $_SERVER['REDIRECT_QUERY_STRING'] . '.htm';

      require_once($_GET['showpage'] . '.htm');
      break;
  }
//  echo $http_response_header;
  echo json_encode($_SESSION);
  echo json_encode($_ENV);
  echo json_encode($_REQUEST);
  echo json_encode($_SERVER);
//  echo $_SERVER;

?>
