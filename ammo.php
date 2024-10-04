<?php

require_once 'constant.php';
require_once 'function.php';

$data = get_data(API_URL);

render_template('head');
render_template('header');
render_template('ammo-page', $data);
render_template('style');

?>
