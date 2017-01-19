<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:28
 */

$app->get('shelters', 'Shelters\SheltersController@index');
$app->get('shelters/{id}', 'Shelters\SheltersController@show');