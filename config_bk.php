<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '192.168.1.56';
$CFG->dbname    = 'tlweb';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'jack5899';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'http://192.168.1.73/tlweb1';
$CFG->dataroot  = '/var/www/tlweb1data';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->ewant_site = 'tl';
$CFG->forcelastname='*';
$CFG->unicodecleanfilename = true;

$CFG->certlock=true;
$CFG->lastlocalcourse = 15;
//$CFG->lastmnetcourse = 12;
$CFG->mnetcourse = 5;
$CFG->frontpageschool = false;
$CFG->frontpagefavorite = true;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!