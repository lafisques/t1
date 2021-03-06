<?php

/** Проблема номер раз - получение данных из бд. В таблице большое количество 
 * записей, теоретически 100% из них могут нам подойти. Проблему вылета скрипта
 * по памяти решаем чтением результатов mysql выборки по курсору, либо из 
 * потока.
 *
 * На первом этапе ограничим выборку. В таблице с адресами пользователей у нас 
 * есть ключ по домену провайдера электронной почты и таблица с валидными 
 * доменами. Ограничим выборку этим условием.
 *
 * Далее проверяем username адреса электронной почты на валидность - уже 
 * средствами php. Регулярки долго?
 *
 * Оставшиеся валидные адреса можно смело тестить на существование сетевыми 
 * запросами, более актуальной выборки не получить.
 */

define('EMAIL_DOMAIN_LIST', ['', '', '', '', '', '']);

class DataGenerator
{

}

class EmailChecker
{

}