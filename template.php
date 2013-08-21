<?php

//Allows nodes to use custom tpl.php files
function pygametheme_preprocess_node(&$vars){
if($vars['node']->type=='pygame_node_level' && $vars['view_mode'] == 'full'){
	$vars['theme_hook_suggestions'][]='node__pygame_node_level__full';
}


}