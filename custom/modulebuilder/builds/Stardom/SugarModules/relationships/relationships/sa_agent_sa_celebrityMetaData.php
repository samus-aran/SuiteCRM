<?php
// created: 2017-07-09 16:38:13
$dictionary["sa_agent_sa_celebrity"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sa_agent_sa_celebrity' => 
    array (
      'lhs_module' => 'SA_Agent',
      'lhs_table' => 'sa_agent',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_Celebrity',
      'rhs_table' => 'sa_celebrity',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_agent_sa_celebrity_c',
      'join_key_lhs' => 'sa_agent_sa_celebritysa_agent_ida',
      'join_key_rhs' => 'sa_agent_sa_celebritysa_celebrity_idb',
    ),
  ),
  'table' => 'sa_agent_sa_celebrity_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sa_agent_sa_celebritysa_agent_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_agent_sa_celebritysa_celebrity_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_agent_sa_celebrityspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_agent_sa_celebrity_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_agent_sa_celebritysa_agent_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_agent_sa_celebrity_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_agent_sa_celebritysa_celebrity_idb',
      ),
    ),
  ),
);