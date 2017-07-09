<?php
// created: 2017-07-09 16:38:13
$dictionary["SA_Celebrity"]["fields"]["sa_agent_sa_celebrity"] = array (
  'name' => 'sa_agent_sa_celebrity',
  'type' => 'link',
  'relationship' => 'sa_agent_sa_celebrity',
  'source' => 'non-db',
  'module' => 'SA_Agent',
  'bean_name' => false,
  'vname' => 'LBL_SA_AGENT_SA_CELEBRITY_FROM_SA_AGENT_TITLE',
  'id_name' => 'sa_agent_sa_celebritysa_agent_ida',
);
$dictionary["SA_Celebrity"]["fields"]["sa_agent_sa_celebrity_name"] = array (
  'name' => 'sa_agent_sa_celebrity_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_AGENT_SA_CELEBRITY_FROM_SA_AGENT_TITLE',
  'save' => true,
  'id_name' => 'sa_agent_sa_celebritysa_agent_ida',
  'link' => 'sa_agent_sa_celebrity',
  'table' => 'sa_agent',
  'module' => 'SA_Agent',
  'rname' => 'name',
);
$dictionary["SA_Celebrity"]["fields"]["sa_agent_sa_celebritysa_agent_ida"] = array (
  'name' => 'sa_agent_sa_celebritysa_agent_ida',
  'type' => 'link',
  'relationship' => 'sa_agent_sa_celebrity',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_AGENT_SA_CELEBRITY_FROM_SA_CELEBRITY_TITLE',
);
