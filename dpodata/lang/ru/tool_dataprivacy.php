<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_dataprivacy', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Активные элементы и ресурсы';
$string['addcategory'] = 'Добавить категорию';
$string['addnewdefaults'] = 'Добавить новый модуль по умолчанию';
$string['addpurpose'] = 'Добавить цель';
$string['addroleoverride'] = 'Добавить переопределение роли';
$string['approve'] = 'Одобрить';
$string['approverequest'] = 'Одобрить запрос';
$string['automaticdeletionrequests'] = 'Автоматическое создание запросов на  удаление данных';
$string['automaticdeletionrequests_desc'] = 'При включенном параметре запрос на удаление данных будет создан автоматически для любых учетных записей, удаленных вручную.';
$string['bulkapproverequests'] = 'Одобрить запросы';
$string['bulkdenyrequests'] = 'Отклонить запросы';
$string['cachedef_contextlevel'] = 'Уровни контекста цели и категории';
$string['cachedef_purpose'] = 'Цели данных';
$string['cachedef_purpose_overrides'] = 'Переопределение целей в инструменте конфиденциальности данных';
$string['cancelrequest'] = 'Отменить запрос';
$string['cancelrequestconfirmation'] = 'Вы действительно хотите отменить этот запрос данных?';
$string['cannotreset'] = 'Невозможно сбросить этот запрос. Только отклоненные запросы могут быть сброшены.';
$string['categories'] = 'Категории';
$string['categorieslist'] = 'Список категорий данных';
$string['category'] = 'Категория';
$string['categorycreated'] = 'Категория создана';
$string['categorydefault'] = 'Категория по умолчанию';
$string['categorydefault_help'] = 'Категория по умолчанию - это категория данных, применяемая ко всем новым экземплярам. Если выбрано «Наследовать», применяется категория данных более высокого уровня. Уровни (от низкого до высокого): Блоки > Активные элементы > Курсы > Категории курсов > Пользователь > Сайт.';
$string['category_help'] = 'Категория в реестре данных описывает тип данных. Может быть добавлена новая категория или, если выбрано «Наследовать», применяется категория данных более высокого уровня. Уровни (от низкого до высокого): Блоки > Активные элементы > Курсы > Категории курсов > Сайт.';
$string['categoryupdated'] = 'Категория обновлена';
$string['close'] = 'Закрыть';
$string['confirmapproval'] = 'Вы действительно хотите одобрить этот запрос данных?';
$string['confirmbulkapproval'] = 'Вы действительно хотите массово одобрить выбранные запросы данных?';
$string['confirmbulkdenial'] = 'Вы действительно хотите массово отклонить выбранные запросы данных?';
$string['confirmcompletion'] = 'Вы действительно хотите отметить этот запрос пользователя как завершенный?';
$string['confirmcontextdeletion'] = 'Вы действительно хотите подтвердить удаление выбранных уровней? Это также удалит все пользовательские данные для их соответствующих подуровней.';
$string['confirmdenial'] = 'Вы действительно хотите отклонить этот запрос данных?';
$string['contactdataprotectionofficer'] = 'Связь с сотрудником по вопросам конфиденциальности';
$string['contactdataprotectionofficer_desc'] = 'При включенном параметре пользователи смогут связаться с сотрудником по вопросам конфиденциальности и сделать запрос данных по ссылке на странице своего профиля.';
$string['contactdpoviaprivacypolicy'] = 'Пожалуйста, свяжитесь с сотрудником по конфиденциальности, как описано в политике конфиденциальности.';
$string['contextlevelname10'] = 'Сайт';
$string['contextlevelname30'] = 'Пользователи';
$string['contextlevelname40'] = 'Категории курсов';
$string['contextlevelname50'] = 'Курсы';
$string['contextlevelname70'] = 'Активные элементы';
$string['contextlevelname80'] = 'Блоки';
$string['contextpurposecategorysaved'] = 'Цель и категория сохранены.';
$string['createcategory'] = 'Создать категорию данных';
$string['createnewdatarequest'] = 'Создать новый запрос данных';
$string['createpurpose'] = 'Создать цель данных';
$string['creationauto'] = 'Автоматически';
$string['creationmanual'] = 'Вручную';
$string['datadeletion'] = 'Удаление данных';
$string['datadeletionpagehelp'] = 'Здесь перечислены данные, для которых истек срок хранения. Просмотрите и подтвердите удаление данных, которое затем будет выполнено запланированной задачей «Удалить устаревшие контексты».';
$string['dataprivacy:downloadallrequests'] = '';
$string['dataprivacy:downloadownrequest'] = '';
$string['dataprivacy:makedatarequestsforchildren'] = 'Запрашивать данные для несовершеннолетних';
$string['dataprivacy:managedataregistry'] = 'Управлять реестром данных';
$string['dataprivacy:managedatarequests'] = 'Управлять запросами данных';
$string['dataregistry'] = 'Реестр данных';
$string['dataregistryinfo'] = 'Реестр данных позволяет устанавливать категории (типы данных) и цели (причины обработки данных) для всего контента на сайте - от пользователей и курсов до активных элементов и блоков. Для каждой цели может быть установлен срок хранения. По истечении срока хранения данные помечаются и отображаются как ожидающие удаления. Для удаления требуется подтверждение администратора.';
$string['datarequestcreatedforuser'] = 'Запрос данных создан для {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Автоматически создается из запланированной задачи (удаление ранее существовавшего пользователя).';
$string['datarequestcreatedupondelete'] = 'Автоматически создается при удалении пользователя.';
$string['datarequestemailsubject'] = 'Запрос данных: {$a}';
$string['datarequests'] = 'Запросы данных';
$string['dataretentionexplanation'] = 'Эта сводка показывает цели и категории по умолчанию  для сохранения пользовательских данных. Определенные области могут иметь более конкретные категории и цели, чем перечисленные здесь.';
$string['dataretentionsummary'] = 'Сводка хранения данных';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'Дата запроса';
$string['daterequesteddetail'] = 'Дата запроса:';
$string['defaultexpired'] = 'Данные для всех пользователей';
$string['defaultexpiredexcept'] = 'Данные для всех пользователей, кроме тех, кто имеет одну из следующих ролей: <br>{$a->unexpired}';
$string['defaultsinfo'] = 'Цели и категории  по умолчанию применяются ко всем новым и существующим экземплярам, для которых не задано значение.';
$string['defaultssaved'] = 'Сохранены значения по умолчанию';
$string['defaultswarninginfo'] = 'Предупреждение. Изменение этих значений по умолчанию может повлиять на срок хранения существующих экземпляров.';
$string['defaultunexpired'] = 'Только данные для пользователей, имеющих одну из следующих ролей: <br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Только данные для пользователей, имеющих одну из следующих ролей: <br>
{$a->expired}
Кроме случаев, когда они также имеют одну из следующих ролей: <br>
{$a->unexpired}';
$string['deletecategory'] = 'Удалить категорию';
$string['deletecategorytext'] = 'Вы уверены, что хотите удалить категорию «{$a}»?';
$string['deletedefaults'] = 'Удалить значения по умолчанию: {$a}';
$string['deletedefaultsconfirmation'] = 'Вы уверены, что хотите удалить цель и категорию по умолчанию для модулей ({$a})?';
$string['deleteexistingdeleteduserstask'] = 'Создать запрос на удаление данных удаленных ранее существовавших пользователей';
$string['deleteexpiredcontextstask'] = 'Удалить просроченные контексты';
$string['deletemyaccount'] = 'Удалите мой аккаунт';
$string['deletepurpose'] = 'Удалить цель';
$string['deletepurposetext'] = 'Вы уверены, что хотите удалить цель «{$a}»?';
$string['deny'] = 'Отклонить';
$string['denyrequest'] = 'Отклонить запрос';
$string['deprecated'] = 'Устарел';
$string['deprecatedexplanation'] = 'Этот плагин использует старую версию одного из интерфейсов конфиденциальности и должен быть обновлен.';
$string['download'] = '';
$string['downloadexpireduser'] = 'Срок загрузки истек. Подайте новый запрос, если вы хотите экспортировать свои личные данные.';
$string['duplicaterole'] = 'Роль уже определена';
$string['editcategories'] = 'Редактировать категории';
$string['editcategory'] = 'Редактировать категорию';
$string['editpurpose'] = 'Редактировать цель';
$string['editpurposes'] = 'Редактировать цели';
$string['frontpagecourse'] = 'Главная страница курса';
$string['hide'] = 'Свернуть все';
$string['inherit'] = 'Наследовать';
$string['lawfulbases'] = 'Законные основания';
$string['message'] = 'Сообщение';
$string['messagelabel'] = 'Сообщение:';
$string['messageprovider:contactdataprotectionofficer'] = 'Запросы данных';
$string['mypersonaldatarequests'] = 'Запросы моих персональных данных';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['newrequest'] = 'Новый запрос';
$string['pluginname'] = 'Конфиденциальность данных';
$string['privacy'] = 'Конфиденциальность';
$string['purpose'] = 'Цель';
$string['purposecreated'] = 'Цель создана';
$string['purposedefault'] = 'Цель по умолчанию';
$string['purposedefault_help'] = 'Целью по умолчанию применяется к любым новым экземплярам. Если выбрано «Наследовать», то применяется цель из вышестоящего контекста. Контексты (от низкого до высокого): Блоки > Модули активных элементов > Курсы > Категории курсов > Пользователь > Сайт.';
$string['purpose_help'] = 'Цель описывает причину обработки данных. Может быть добавлена новая цель, или, если выбрано «Наследовать», применяется цель из вышестоящего контекста. Контексты (от низкого до высокого):  Блоки > Модули активных элементов > Курсы > Категории курсов > Пользователь > Сайт.';
$string['purposes'] = 'Цели';
$string['purposeslist'] = 'Список целей данных';
$string['purposeupdated'] = 'Цель обновлена';
$string['replyto'] = 'Ответ пользователю';
$string['requestactions'] = 'Действия';
$string['requestapproved'] = 'Запрос был одобрен';
$string['requestcomments'] = 'Комментарии';
$string['requestcomments_help'] = 'Вы можете ввести сюда любую дополнительную информацию о запросе своих данных.';
$string['requestfor'] = 'Пользователь';
$string['requestorigin'] = 'Сайт';
$string['requeststatus'] = 'Состояние';
$string['requestsubmitted'] = 'Ваш запрос был отправлен сотруднику по вопросам конфиденциальности';
$string['requesttype'] = 'Тип';
$string['requesttypedelete'] = 'Удалить все мои персональные данные';
$string['requesttypedeleteshort'] = 'Удалить';
$string['requesttypeexport'] = 'Экспортировать все мои персональные данные';
$string['requesttypeexportshort'] = 'Экспортировать';
$string['requesttype_help'] = 'Выберите причину, по которой вы хотите связаться с сотрудником по вопросам конфиденциальности. Учтите, что удаление всех персональных данных приведет к тому, что Вы больше не сможете зайти на сайт.';
$string['requesttypeothersshort'] = 'Сообщение';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['role'] = 'Роль';
$string['role_help'] = 'Роль, к которой следует применить переопределение.';
$string['roleoverride'] = 'Переопределение роли';
$string['roleoverrideoverview'] = 'Политику хранения по умолчанию можно переопределить для указанных пользовательских ролей, что позволяет задать политику более длинного или более короткого хранения. Срок действия пользователя истекает только после истечения срока действия всех его ролей.';
$string['selectbulkaction'] = 'Выберите массовое действие.';
$string['send'] = 'Отправить';
$string['statusapproved'] = 'Одобренный';
$string['statusawaitingapproval'] = 'В ожидании одобрения';
$string['statuscomplete'] = 'Выполненный';
$string['statusdeleted'] = 'Удаленный';
$string['statusdetail'] = 'Состояние:';
$string['statusexpired'] = 'Истекший';
$string['statuspending'] = 'На рассмотрении';
$string['statuspreprocessing'] = 'Предварительная обработка';
$string['statusprocessing'] = 'Обработка';
$string['systemconfignotsetwarning'] = 'Цель и категория сайта не определены. Если они не определены, все данные будут удалены при обработке запросов на удаление.';
$string['user'] = 'Пользователь';
$string['visible'] = 'Развернуть все';
