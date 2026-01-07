<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';

/* 🔹 Azure MySQL hostname */
$CFG->dbhost    = 'veritas-db-main.mysql.database.azure.com';

/* 🔹 Database name */
$CFG->dbname    = 'dbtg0pwapg1mpm';

/* 🔹 Azure MySQL username format */
$CFG->dbuser    = 'softdev@veritas-db-main';

/* 🔹 Password */
$CFG->dbpass    = '$<softdev>1';

/* 🔹 Table prefix */
$CFG->prefix    = 'soft_';

/* 🔹 Database options INCLUDING SSL */
$CFG->dboptions = array(
    'dbpersist' => 0,
    'dbport' => 3306,
    'dbsocket' => '',
    'dbcollation' => 'utf8mb4_general_ci',

    /* ✅ SSL settings for Azure MySQL */
    'ssl' => true,
    'sslca' => '/home/site/wwwroot/ssl/DigiCertGlobalRootG2.crt.pem',
);

$CFG->wwwroot   = 'https://elearning.veritas.edu.ng';
$CFG->dataroot  = '/home/u19-sh6vr71biafg/www/elearning.veritas.edu.ng/aeizdily';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0755;

require_once(__DIR__ . '/lib/setup.php');
