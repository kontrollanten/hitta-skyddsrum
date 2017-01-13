<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:28
 */

$app->group(['prefix' => '/api/v1'], function () use ($app) {
    $app->get('shelters', 'SheltersController@index');
});