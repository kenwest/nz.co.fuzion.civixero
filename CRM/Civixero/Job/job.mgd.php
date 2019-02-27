<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array(
  0 => array(
    'name' => 'CiviXero Contact Push Job',
    'entity' => 'Job',
    'update' => 'never',
    'params' => array(
      'version' => 3,
      'name' => 'CiviXero Contact Push Job',
      'description' => 'Push updated contacts to Xero',
      'api_entity' => 'Civixero',
      'api_action' => 'contactpush',
      'run_frequency' => 'Always',
      'parameters' => 'plugin=xero',
    ),
  ),
  1 => array(
    'name' => 'CiviXero Contact Pull Job',
    'entity' => 'Job',
    'update' => 'never',
    'params' => array(
      'version' => 3,
      'name' => 'CiviXero Contact Pull Job',
      'description' => 'Pull updated contacts from Xero',
      'api_entity' => 'Civixero',
      'api_action' => 'contactpull',
      'run_frequency' => 'Always',
      'parameters' => "plugin=xero\nstart_date=yesterday",
    ),
  ),
  2 => array(
    'name' => 'CiviXero Invoice Push Job',
    'entity' => 'Job',
    'update' => 'never',
    'params' => array(
      'version' => 3,
      'name' => 'CiviXero Invoice Push Job',
      'description' => 'Push updated invoices from Xero',
      'api_entity' => 'Civixero',
      'api_action' => 'invoicepush',
      'run_frequency' => 'Always',
      'parameters' => 'plugin=xero',
    ),
  ),
  3 => array(
    'name' => 'CiviXero Invoice Pull Job',
    'entity' => 'Job',
    'update' => 'never',
    'params' => array(
      'version' => 3,
      'name' => 'CiviXero Invoice Pull Job',
      'description' => 'Pull updated invoices from Xero',
      'api_entity' => 'Civixero',
      'api_action' => 'invoicepull',
      'run_frequency' => 'Always',
      'parameters' => "plugin=xero\nstart_date=yesterday",
    ),
  ),
  4 => array (
    'name' => 'CiviAccountSync Complete Contributions From Accounts (Xero)',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'CiviAccountSync Complete Contributions',
      'description' => 'Complete Contributions in CiviCRM where completed in Accounts',
      'api_entity' => 'AccountInvoice',
      'api_action' => 'update_contribution',
      'run_frequency' => 'Always',
      'parameters' => "plugin=xero\naccounts_status_id=1",
    ),
  ),
  5 => array (
    'name' => 'CiviAccountSync Cancel Contributions From Accounts (Xero)',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'CiviAccountSync Cancel Contributions',
      'description' => 'Cancel Contributions in CiviCRM where cancelled in Accounts',
      'api_entity' => 'AccountInvoice',
      'api_action' => 'update_contribution',
      'run_frequency' => 'Always',
      'parameters' => "plugin=xero\naccounts_status_id=3\ncontribution_status_id=2",
    ),
  ),
);
