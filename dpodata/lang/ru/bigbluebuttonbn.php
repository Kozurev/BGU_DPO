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
 * Strings for component 'bigbluebuttonbn', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   bigbluebuttonbn
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bbbduetimeoverstartingtime'] = 'Время окончания должно быть позже времени начала';
$string['bbbdurationwarning'] = 'Максимальная продолжительность этого сеанса - %duration% мин.';
$string['bbbrecordwarning'] = 'Этот сеанс записывается.';
$string['bigbluebuttonbn'] = 'BigBlueButton';
$string['bigbluebuttonbn:addinstance'] = 'Создавать новое собрание';
$string['bigbluebuttonbn:join'] = 'Участвовать в собрании';
$string['bigbluebuttonbn:managerecordings'] = 'Управлять записями';
$string['config_extended_capabilities'] = 'Настройки для расширенных возможностей';
$string['config_extended_capabilities_description'] = 'Настройки для расширенных возможностей в случае, если сервер BigBlueButton позволяет их использование.';
$string['config_general'] = 'Общие настройки';
$string['config_general_description'] = 'Эти параметры используются <b>всегда</b>';
$string['config_scheduled'] = 'Настройки для функции «Запланированные сеансы»';
$string['config_scheduled_description'] = 'Эти параметры определяют поведение по умолчанию для запланированных сеансов.';
$string['config_scheduled_duration_compensation'] = 'Время для компенсации (в минутах)';
$string['config_scheduled_duration_compensation_description'] = 'Этот промежуток времени (в минутах) будет добавлен ко времени закрытия при расчете продолжительности.';
$string['config_scheduled_duration_enabled'] = 'Включить расчет продолжительности';
$string['config_scheduled_duration_enabled_description'] = 'Продолжительность запланированного сеанса вычисляется на основе времени открытия и закрытия.';
$string['config_scheduled_pre_opening'] = 'Доступ заранее (в минутах)';
$string['config_scheduled_pre_opening_description'] = 'Этот параметр задает за сколько минут до времени открытия сеанс становится доступен.';
$string['config_server_url'] = 'URL сервера BigBlueButton';
$string['config_server_url_description'] = 'URL-адрес Вашего сервера BigBlueButton должен заканчиваться на /bigbluebutton/. (Значение по умолчанию — это URL сервера BigBlueButton, предоставленного компанией Blindside Networks, который Вы можете использовать для тестирования.)';
$string['config_shared_secret'] = 'Секретный ключ BigBlueButton';
$string['config_shared_secret_description'] = 'Секретный ключ Вашего сервера BigBlueButton. (Значение по умолчанию — это секретный ключ сервера BigBlueButton, предоставленного компанией Blindside Networks, который Вы можете использовать для тестирования.)';
$string['config_warning_curl_not_installed'] = 'Для работы этой функции требуется, чтобы расширение CURL языка PHP было установлено и включено. Настройки будут доступны только если это условие выполнено.';
$string['email_body_notification_meeting_by'] = 'пользователем';
$string['email_body_notification_meeting_description'] = 'Описание';
$string['email_body_notification_meeting_details'] = 'Информация';
$string['email_body_notification_meeting_end_date'] = 'Дата окончания';
$string['email_body_notification_meeting_has_been'] = 'была';
$string['email_body_notification_meeting_start_date'] = 'Дата начала';
$string['email_body_notification_meeting_title'] = 'Заглавие';
$string['email_body_recording_ready_for'] = 'Запись для';
$string['email_body_recording_ready_is_ready'] = 'готова';
$string['email_footer_sent_by'] = 'Это автоматическое уведомление было отправлено пользователем';
$string['email_footer_sent_from'] = 'из курса';
$string['event_activity_created'] = 'Элемент курса «Видеоконференция BigBlueButton» создан';
$string['event_activity_deleted'] = 'Элемент курса «Видеоконференция BigBlueButton» удален';
$string['event_activity_modified'] = 'Элемент курса «Видеоконференция BigBlueButton» обновлен';
$string['event_activity_viewed'] = 'Просмотрен элемент курса «Видеоконференция BigBlueButton»';
$string['event_activity_viewed_all'] = 'Просмотрена страница управления элементом курса «Видеоконференция BigBlueButton»';
$string['event_meeting_created'] = 'Собрание BigBlueButton создано';
$string['event_meeting_ended'] = 'Собрание BigBlueButton принудительно завершено';
$string['event_meeting_joined'] = 'Пользователь присоединился к собранию BigBlueButton';
$string['event_meeting_left'] = 'Пользователь покинул собрание BigBlueButton';
$string['event_recording_deleted'] = 'Запись собрания BigBlueButton удалена';
$string['event_recording_published'] = 'Запись собрания BigBlueButton опубликована';
$string['event_recording_unpublished'] = 'Отменена публикация записи собрания BigBlueButton';
$string['general_error_unable_connect'] = 'Невозможно подключится к серверу. Проверьте URL сервера BigBlueButton и убедитесь, что сервер BigBlueButton работает.';
$string['index_confirm_end'] = 'Вы хотите завершить это собрание?';
$string['index_disabled'] = 'отключено';
$string['index_enabled'] = 'включено';
$string['index_ending'] = 'Идет завершение собрания... Пожалуйста, подождите';
$string['index_error_checksum'] = 'Ошибка контрольной суммы. Убедитесь, что Вы ввели правильный секретный ключ сервера.';
$string['index_error_forciblyended'] = 'Невозможно принять участие в этом собрании, поскольку оно было принудительно завершено.';
$string['index_error_unable_display'] = 'Невозможно отобразить собрание. Проверьте URL сервера BigBlueButton и убедитесь, что сервер BigBlueButton работает.';
$string['index_heading'] = 'Видеоконференции BigBlueButton';
$string['index_heading_actions'] = 'Действия';
$string['index_heading_group'] = 'Группа';
$string['index_heading_moderator'] = 'Руководители';
$string['index_heading_name'] = 'Собрание';
$string['index_heading_recording'] = 'Запись';
$string['index_heading_users'] = 'Пользователей';
$string['index_heading_viewer'] = 'Участники';
$string['mod_form_block_general'] = 'Основные настройки';
$string['mod_form_block_participants'] = 'Участники';
$string['mod_form_block_presentation'] = 'Презентация';
$string['mod_form_block_record'] = 'Настройки записи';
$string['mod_form_block_schedule'] = 'Расписание сеансов';
$string['mod_form_field_closingtime'] = 'Подключение закрывается';
$string['mod_form_field_conference_name'] = 'Название собрания';
$string['mod_form_field_duration'] = 'Продолжительность';
$string['mod_form_field_duration_help'] = 'Установка продолжительности позволяет ограничить максимальное время собрания';
$string['mod_form_field_intro'] = 'Описание';
$string['mod_form_field_intro_help'] = 'Краткое описание собрания';
$string['mod_form_field_name'] = 'Название виртуального собрания';
$string['mod_form_field_notification'] = 'Отправить уведомления';
$string['mod_form_field_notification_created_help'] = 'Отправить записанным на курс пользователям уведомление о том, что был создан этот элемент курса';
$string['mod_form_field_notification_help'] = 'Отправить записанным на курс пользователям уведомление о том, что этот элемент курса был создан или изменен';
$string['mod_form_field_notification_modified_help'] = 'Отправить записанным на курс пользователям уведомление о том, что этот элемент курса был изменен';
$string['mod_form_field_notification_msg_at'] = 'в';
$string['mod_form_field_notification_msg_created'] = 'создана';
$string['mod_form_field_notification_msg_modified'] = 'изменена';
$string['mod_form_field_openingtime'] = 'Подключение открывается';
$string['mod_form_field_participant_add'] = 'Добавить участника';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Руководитель';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Наблюдатель';
$string['mod_form_field_participant_list'] = 'Список участников';
$string['mod_form_field_participant_list_action_add'] = 'Добавить';
$string['mod_form_field_participant_list_action_remove'] = 'Удалить';
$string['mod_form_field_participant_list_text_as'] = 'в качестве';
$string['mod_form_field_participant_list_type_all'] = 'Все записанные на курс пользователи';
$string['mod_form_field_participant_list_type_owner'] = 'Владелец';
$string['mod_form_field_participant_list_type_role'] = 'Роль';
$string['mod_form_field_participant_list_type_user'] = 'Пользователь';
$string['mod_form_field_record'] = 'Сеанс может быть записан';
$string['mod_form_field_room_name'] = 'Название собрания';
$string['mod_form_field_userlimit'] = 'Ограничение на количество пользователей';
$string['mod_form_field_userlimit_help'] = 'Максимальное разрешенное количество пользователей на собрании. Если установлено значение 0, то количество пользователей не будет ограничено.';
$string['mod_form_field_voicebridge'] = 'Номер голосового моста [####]';
$string['mod_form_field_voicebridge_format_error'] = 'Некорректный формат. Вы должны указать число от 1 до 99999';
$string['mod_form_field_voicebridge_help'] = 'Номер, по которому участники могут подключиться к голосовой конференции с использованием телефонной связи. Необходимо указать число от 1 до 99999. Если указать значение 0, что вместо постоянного номера для голосового моста будет использоваться случайное значение. При использовании четырехзначного номера перед номером будет добавлена цифра 7.';
$string['mod_form_field_voicebridge_notunique_error'] = 'Вы указали неуникальное значение. Этот номер используется другим собранием.';
$string['mod_form_field_wait'] = 'Участники должны ожидать входа руководителя';
$string['mod_form_field_wait_help'] = 'При включении этого параметра участники не смогут подключиться к сеансу до тех пор, пока не подключится руководитель';
$string['mod_form_field_welcome'] = 'Приветственное сообщение';
$string['mod_form_field_welcome_default'] = '<br>Добро пожаловать на собрание <b>«%%CONFNAME%%»</b>!<br><br>Чтобы разобраться, как пользоваться системой BigBlueButton, Вы можете посмотреть <a href="event:http://www.bigbluebutton.org/content/videos"><u>обучающие видео</u></a> (на английском языке).<br><br>Для участия в аудиоконференции нажмите на изображение головной гарнитуры (наушников) в верхнем левом углу. <b>Пожалуйста, используйте гарнитуру, чтобы  уберечь себя и других от неприятного гула.</b>';
$string['mod_form_field_welcome_help'] = 'Можно заменить стандартное сообщение, настроенное для сервера BigBlueButton. Сообщение может содержать подстановки (%%CONFNAME%% - название конференции, %%DIALNUM%% - номер телефона, %%CONFNUM%% - номер конференции), а также тэги html, например <b>...</b> или <i>...</i>.';
$string['modulename'] = 'Видеоконференция BigBlueButton';
$string['modulename_help'] = 'Модуль «Видеоконференция BigBlueButton» позволяет создавать в Moodle ссылки на виртуальные онлайн собрания в BigBlueButton - системе с открытым исходным кодом для проведения веб-конференций для дистанционного обучения.

Используя этот модуль, Вы можете указать название, описание, событие календаря (диапазон дат, в который возможно участие), группы и параметры записи онлайн сеанса.

Чтобы, в дальнейшем, просмотреть записи, добавьте в курс ресурс типа «Записи видеоконференций BigBlueButton».';
$string['modulenameplural'] = 'Видеоконференции BigBlueButton';
$string['pluginadministration'] = 'Управление модулем «Видеоконференция BigBlueButton»';
$string['pluginname'] = 'Видеоконференция BigBlueButton';
$string['serverhost'] = 'Адрес сервера';
$string['view_conference_action_end'] = 'Завершить сеанс';
$string['view_conference_action_join'] = 'Подключиться к сеансу';
$string['view_error_create'] = 'Сервер BigBlueButton вернул сообщение об ошибке. Собрание не может быть создано.';
$string['view_error_max_concurrent'] = 'Достигнуто максимально количество одновременных собраний.';
$string['view_error_no_group'] = 'Группы еще не настроены. Пожалуйста, сначала настройте группы, а уже после этого повторите попытку подключения к собранию.';
$string['view_error_no_group_student'] = 'Вы не записаны ни в одну из групп. Пожалуйста, свяжитесь с учителем или администратором.';
$string['view_error_no_group_teacher'] = 'Группы еще не настроены. Пожалуйста, настройте группы или свяжитесь с администратором.';
$string['view_error_unable_join'] = 'Невозможно присоединиться к собранию. Проверьте URL сервера BigBlueButton и убедитесь, что сервер BigBlueButton работает.';
$string['view_error_unable_join_student'] = 'Невозможно подключиться к серверу BigBlueButton. Пожалуйста, свяжитесь с учителем или администратором.';
$string['view_error_unable_join_teacher'] = 'Невозможно подключиться к серверу BigBlueButton. Пожалуйста, свяжитесь с администратором.';
$string['view_error_userlimit_reached'] = 'Для этого собрания достигнуто максимально количество пользователей.';
$string['view_groups_selection'] = 'Выберите группу, к которой Вы хотите присоединиться и нажмите «Войти»';
$string['view_groups_selection_join'] = 'Войти';
$string['view_groups_selection_warning'] = 'Для каждой из групп создано отдельное собрание. Если у Вас есть доступ к нескольким собраниям, убедитесь, что выбрали нужное.';
$string['view_login_moderator'] = 'Вход в качестве руководителя ...';
$string['view_login_viewer'] = 'Вход в качестве участника ...';
$string['view_message_conference_has_ended'] = 'Это собрание закончилось.';
$string['view_message_conference_in_progress'] = 'Это собрание сейчас идет.';
$string['view_message_conference_not_started'] = 'Это собрание еще не началось.';
$string['view_message_conference_room_ready'] = 'Собрание подготовлено. Сейчас Вы можете подключиться к сеансу.';
$string['view_message_conference_wait_for_moderator'] = 'Ожидание подключения руководителя.';
$string['view_message_finished'] = 'Это собрание завершено.';
$string['view_message_has_joined'] = 'подключился';
$string['view_message_have_joined'] = 'подключились';
$string['view_message_hour'] = 'час';
$string['view_message_hours'] = 'часов';
$string['view_message_minute'] = 'минута';
$string['view_message_minutes'] = 'минут';
$string['view_message_moderator'] = 'руководитель';
$string['view_message_moderators'] = 'руководители';
$string['view_message_norecordings'] = 'Нет записей этого собрания.';
$string['view_message_notavailableyet'] = 'Этот сеанс еще не доступен.';
$string['view_message_room_closed'] = 'Это собрание закрыто.';
$string['view_message_room_open'] = 'Это собрание открыто.';
$string['view_message_room_ready'] = 'Это собрание готово.';
$string['view_message_session_has_user'] = 'Участвует';
$string['view_message_session_has_users'] = 'Участвуют';
$string['view_message_session_no_users'] = 'В этом сеансе нет пользователей';
$string['view_message_session_running_for'] = 'Этот сеанс идет уже';
$string['view_message_session_started_at'] = 'Этот сеанс начался в';
$string['view_message_tab_close'] = 'Эта вкладка или это окно должно быть закрыто вручную';
$string['view_message_user'] = 'пользователь';
$string['view_message_users'] = 'пользователей';
$string['view_message_viewer'] = 'наблюдатель';
$string['view_message_viewers'] = 'наблюдателей';
$string['view_noguests'] = 'Гости не могут участвовать в видеоконференции BigBlueButton';
$string['view_nojoin'] = 'У Вас недостаточно прав для участия в этом сеансе';
$string['view_recording_actionbar'] = 'Действия';
$string['view_recording_activity'] = 'Элемент курса';
$string['view_recording_course'] = 'Курс';
$string['view_recording_date'] = 'Дата';
$string['view_recording_delete_confirmation'] = 'Вы уверены, что хотите удалить эту запись?';
$string['view_recording_description'] = 'Описание';
$string['view_recording_duration'] = 'Продолжительность';
$string['view_recording_duration_min'] = 'мин.';
$string['view_recording_format_presentation'] = 'презентация';
$string['view_recording_format_video'] = 'видео';
$string['view_recording_length'] = 'Длина';
$string['view_recording_list_actionbar'] = 'Действия';
$string['view_recording_list_actionbar_delete'] = 'Удалить';
$string['view_recording_list_actionbar_hide'] = 'Скрыть';
$string['view_recording_list_actionbar_publish'] = 'Опубликовать';
$string['view_recording_list_actionbar_show'] = 'Отобразить';
$string['view_recording_list_actionbar_unpublish'] = 'Отменить публикацию';
$string['view_recording_list_activity'] = 'Элемент курса';
$string['view_recording_list_course'] = 'Курс';
$string['view_recording_list_date'] = 'Дата';
$string['view_recording_list_description'] = 'Описание';
$string['view_recording_list_duration'] = 'Продолжительность';
$string['view_recording_list_recording'] = 'Запись';
$string['view_recording_modal_button'] = 'Применить';
$string['view_recording_modal_title'] = 'Введите информацию об этой записи';
$string['view_recording_name'] = 'Название';
$string['view_recording_recording'] = 'Запись';
$string['view_recording_tags'] = 'Теги';
$string['view_section_title_presentation'] = 'Файл презентации';
$string['view_section_title_recordings'] = 'Записи';
