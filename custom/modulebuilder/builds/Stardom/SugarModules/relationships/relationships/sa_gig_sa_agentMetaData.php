<?php
// created: 2017-07-09 16:38:13
$dictionary["sa_gig_sa_agent"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sa_gig_sa_agent' => 
    array (
      'lhs_module' => 'SA_Gig',
      'lhs_table' => 'sa_gig',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_Agent',
      'rhs_table' => 'sa_agent',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_gig_sa_agent_c',
      'join_key_lhs' => 'sa_gig_sa_agentsa_gig_ida',
      'join_key_rhs' => 'sa_gig_sa_agentsa_agent_idb',
    ),
  ),
  'table' => 'sa_gig_sa_agent_c',
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
      'name' => 'sa_gig_sa_agentsa_gig_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_gig_sa_agentsa_agent_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_gig_sa_agentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_gig_sa_agent_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_gig_sa_agentsa_gig_ida',
        1 => 'sa_gig_sa_agentsa_agent_idb',
      ),
    ),
  ),
);