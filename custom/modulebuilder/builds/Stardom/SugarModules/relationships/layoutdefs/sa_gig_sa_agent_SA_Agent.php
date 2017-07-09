<?php
 // created: 2017-07-09 16:38:13
$layout_defs["SA_Agent"]["subpanel_setup"]['sa_gig_sa_agent'] = array (
  'order' => 100,
  'module' => 'SA_Gig',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_GIG_SA_AGENT_FROM_SA_GIG_TITLE',
  'get_subpanel_data' => 'sa_gig_sa_agent',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
