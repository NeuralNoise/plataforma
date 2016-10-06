<?php
/**
 * Group module (also called a group widget)
 *
 * @uses $vars['title']    The title of the module
 * @uses $vars['content']  The module content
 * @uses $vars['all_link'] A link to list content
 * @uses $vars['add_link'] A link to create content
 */


$group = elgg_get_page_owner_entity();

$header = "<span class=\"groups-widget-viewall\">{$vars['all_link']}</span>";
$header .= '<h3>' . $vars['title'] . '</h3>';

if ($group->canWriteToContainer() && isset($vars['add_link'])) {
	$vars['content'] .= "<span class='elgg-widget-more'>{$vars['add_link']}</span>";
}

$gid = elgg_get_page_owner_guid();


$op = False;


if ($vars['title']=="discussion:group" || $vars['title']=="Debats"||$vars['title']=="Debates" || $vars['title']=="Taldearen eztabaida" || $vars['title']=="Group discussion" ){
	$op = $group->columns_enable;


}




if( $op=="yes" ){
	//var_dump($vars);
	echo '<table cellspacing="10" cellpadding="10" width="100%">';
	echo '<tr>';
	echo '<td>';
	echo elgg_view_module('info', '', $vars['content'], array(
		'header' => $header,
		'class' => 'elgg-module-group',
		

	));
	echo '</td>';
	echo '</tr>';
	echo "</table>";

}else{
echo '<li>';
echo elgg_view_module('info', '', $vars['content'], array(
	'header' => $header,
	'class' => 'elgg-module-group',
	

));
echo '</li>';


}





