<?php
 // created: 2017-07-09 16:38:13
$layout_defs["SA_Gig"]["subpanel_setup"]['sa_gig_sa_celebrity'] = array (
  'order' => 100,
  'module' => 'SA_Celebrity',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_GIG_SA_CELEBRITY_FROM_SA_CELEBRITY_TITLE',
  'get_subpanel_data' => 'sa_gig_sa_celebrity',
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
