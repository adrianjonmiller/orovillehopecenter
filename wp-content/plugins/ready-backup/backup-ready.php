<?php
/**
 * Plugin Name: Ready! Backup
 * Plugin URI: http://readyshoppingcart.com/product/wordpress-backup-and-restoration-plugin/
 * Description:  Complete online backup + restoration. Manual or automate backup to Dropbox, FTP and Email. Custom backup files, database, plugins
 * Version: 0.6.6
 * Author: Backup Plugin Ready
 * Author URI: http://readyshoppingcart.com
 **/

require_once(dirname(__FILE__). DIRECTORY_SEPARATOR. 'config.php');
require_once(dirname(__FILE__). DIRECTORY_SEPARATOR. 'functions.php');

importClassBup('dbBup');
importClassBup('installerBup');
importClassBup('baseObjectBup');
importClassBup('moduleBup');
importClassBup('modelBup');
importClassBup('viewBup');
importClassBup('controllerBup');
importClassBup('helperBup');
importClassBup('tabBup');
importClassBup('dispatcherBup');
importClassBup('fieldBup');
importClassBup('tableBup');
importClassBup('frameBup');
importClassBup('langBup');
importClassBup('reqBup');
importClassBup('uriBup');
importClassBup('htmlBup');
importClassBup('responseBup');
importClassBup('fieldAdapterBup');
importClassBup('validatorBup');
importClassBup('errorsBup');
importClassBup('utilsBup');
importClassBup('modInstallerBup');
importClassBup('wpUpdater');
importClassBup('toeWordpressWidgetBup');
importClassBup('installerDbUpdaterBup');
importClassBup('templateModuleBup');
importClassBup('templateViewBup');
importClassBup('fileuploaderBup');

installerBup::update();
errorsBup::init();

dispatcherBup::doAction('onBeforeRoute');
frameBup::_()->parseRoute();
dispatcherBup::doAction('onAfterRoute');

dispatcherBup::doAction('onBeforeInit');
frameBup::_()->init();
dispatcherBup::doAction('onAfterInit');

dispatcherBup::doAction('onBeforeExec');
frameBup::_()->exec();
dispatcherBup::doAction('onAfterExec');