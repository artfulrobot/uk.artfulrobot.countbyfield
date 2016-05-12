<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Countbyfield_Form_Report_CountByField',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Count By Field',
      'description' => 'Count By Field (uk.artfulrobot.countbyfield)',
      'class_name' => 'CRM_Countbyfield_Form_Report_CountByField',
      'report_url' => 'uk.artfulrobot.countbyfield/countbyfield',
      'component' => '',
    ),
  ),
);
