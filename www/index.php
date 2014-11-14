<?PHP

header('Content-type: text/plain');

if (!isset($_REQUEST['data'])) {
 header('Location: http://www.dmdirc.com/');
 die('error This subdomain is for automated requests only');
}

$_CHANNELS = array('NONE', 'NIGHTLY', 'UNSTABLE', 'STABLE', 'ALL');
$_VERSIONS = array();

foreach (explode(';', $_REQUEST['data']) as $request) {
 list($comp, $channel, $userversion) = explode(',', $request);

 if (empty($comp)) { continue; }
 echo "uptodate Component $comp is at the latest version offered by channel $channel\n";
}

?>
