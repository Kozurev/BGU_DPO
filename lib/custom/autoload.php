<?php
/**
 * Подключения файлов лично разработанных и используемых библиотек
 * Аналогичный набор библиотек использовался при разработке:
 *  https://talant.bsu.edu.ru/
 *  http://dekanat.bsu.edu.ru/blocks/bsu_other/fest/
 *  http://dekanat.bsu.edu.ru/blocks/bsu_other/techsupport/
 * и других личных проектов
 *
 * @author BadWolf
 * @date 07.02.2019 12:01
 * @version 1.0.1
 */

define( 'ROOT', dirname(__FILE__) );

require_once 'core/db.php';
require_once 'core/orm.php';
require_once 'core/entity/model.php';
require_once 'core/entity.php';
require_once 'core/core.php';
require_once 'core/array.php';
require_once 'functions.php';
require_once 'observers.php';

Orm::Debug( false );