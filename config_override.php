<?php
/***CONFIGURATOR***/
$sugar_config['disable_persistent_connections'] = false;
/** Calendar Settings */
$sugar_config['calendar']['default_day_start'] = "12:00";
$sugar_config['calendar']['default_day_end'] = "16:00";
/**
 * forms.requireFirst
 * Presents all required fields grouped together in the first panel on the EditView form.
 */
$sugar_config['forms']['requireFirst'] = true;

/**
 * installer_locked
 * Sets whether the installer is locked or not. When false,
 * it is possible to access Sugar's initial configuration page to reinstall the instance.
 * Instances running on the On-Demand environment will have this setting enforced as true.
 */
$sugar_config['installer_locked'] = true;


/***CONFIGURATOR***/