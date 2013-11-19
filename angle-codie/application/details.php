<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_angle extends Module {

public $version = '2.0';

public function info()
  {
    return array(
      'name' => array(
        'en' => 'angle'
      ),
      'description' => array(
        'en' => 'angle Module'
      ),
      'frontend' => TRUE,
      'backend' => TRUE,
      'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'angle',
      'sections' => array(
        'items' => array(
          'name'  => 'angle:items', // These are translated from your language file
          'uri'   => 'admin/angle',
            'shortcuts' => array(
              'create' => array(
                'name'  => 'angle:create',
                'uri'   => 'admin/angle/create',
                'class' => 'add'
                )
              )
            )
        )
    );
  }

public function install()
{
// Create client tables and add client category to user groups.
$this->dbforge->drop_table('angle');

    $tables_installed = $this->install_tables(array(
      'angle' => array(
        'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
        'task' => array('type' => 'VARCHAR', 'constraint' => 255),
        'strike' => array('type' => 'BOOL', 'constraint' => 'NOT NULL', 'default' => 0),
        'timestamp' => array('type' => 'TIMESTAMP', 'constraint' => 'on update current_timestamp')
      )
    ));
return $tables_installed;
}

public function uninstall()
{
// Remove client related data and module settings
$this->dbforge->drop_table('angle');
$this->db->delete('settings', array('module' => 'angle'));
    $this->dbforge->drop_table('angle_feed');
    $this->db->delete('settings', array('module' => 'angle'));
{
return TRUE;
}
}

public function upgrade($old_version)
{
// Your Upgrade Logic
return true;
}

public function help()
{
// Return a string containing help info
// You could include a file and return it here.
return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
}
}