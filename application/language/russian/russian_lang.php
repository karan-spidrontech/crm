<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Имя';
$lang['options']              = 'Опции';
$lang['submit']               = 'Сохранить';
$lang['added_successfully']    = '%s успешно добавлено.';
$lang['updated_successfully']  = '%s обновлено.';
$lang['edit']                 = 'Изменить %s';
$lang['add_new']              = 'Добавить %s';
$lang['deleted']              = '%s удалено';
$lang['problem_deleting']     = 'Проблема удаления %s';
$lang['is_referenced']        = 'The ID of the %s is already using.';
$lang['close']                = 'Закрыть';
$lang['send']                 = 'Отправить';
$lang['cancel']               = 'Отмена';
$lang['go_back']              = 'Вернуться назад';
$lang['error_uploading_file'] = 'Ошибка при загрузки файла';
$lang['load_more']            = 'Загрузить еще';
$lang['cant_delete_default']  = 'Не могу удалить по умолчанию %s';

# Invoice General
$lang['invoice_status_paid']                = 'Оплачено';
$lang['invoice_status_unpaid']              = 'Не оплачено';
$lang['invoice_status_overdue']             = 'Просрочено';
$lang['invoice_status_not_paid_completely'] = 'Частично оплачено';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading']            = 'Позиция';
$lang['invoice_table_quantity_heading']        = 'Кол-во';
$lang['invoice_table_rate_heading']            = 'Стоимость';
$lang['invoice_table_tax_heading']             = 'Налог';
$lang['invoice_table_amount_heading']          = 'Сумма';
$lang['invoice_subtotal']                      = 'Подытог';
$lang['invoice_adjustment']                    = 'Корректировка';
$lang['invoice_total']                         = 'Итого';
$lang['invoice_vat']                           = 'VAT Number';
$lang['invoice_bill_to']                       = 'Детали';
$lang['invoice_data_date']                     = 'Дата формирования счета:';
$lang['invoice_data_duedate']                  = 'Оплатить до:';
$lang['invoice_received_payments']             = 'Транзакции';
$lang['invoice_no_payments_found']             = 'Оплата по счету не проводилась';
$lang['invoice_note']                          = 'Заметка:';
$lang['invoice_payments_table_number_heading'] = 'Платеж #';
$lang['invoice_payments_table_mode_heading']   = 'Способ оплаты';
$lang['invoice_payments_table_date_heading']   = 'Дата';
$lang['invoice_payments_table_amount_heading'] = 'Сумма';


# Announcements
$lang['announcement']                 = 'Объявление';
$lang['announcement_lowercase']       = 'объявление';
$lang['announcements']                = 'Объявления';
$lang['announcements_lowercase']      = 'объявления';
$lang['new_announcement']             = 'Новое объявление';
$lang['announcement_name']            = 'Тема';
$lang['announcement_message']         = 'Сообщение';
$lang['announcement_show_to_staff']   = 'Показать сотрудникам';
$lang['announcement_show_to_clients'] = 'Показать клиентам';
$lang['announcement_show_my_name']    = 'Показывать мое имя';

# Clients
$lang['clients']                               = 'Клиенты';
$lang['client']                                = 'Клиент';
$lang['new_client']                            = 'Новый клиент';
$lang['client_lowercase']                      = 'клиент';
$lang['client_delete_tooltip']                 = 'All customer data will be deleted. Contracts,tickets,notes. NOTE: If invoices found customer wont be deleted. You need to assign this invoices to another customer to keep the invoice number';
$lang['customer_delete_invoices_warning']      = 'This customer have invoices on the account. You cant delete this customer. Change all invoices to another customer in a future then delete.';
$lang['client_firstname']                      = 'Имя';
$lang['client_lastname']                       = 'Фамилия';
$lang['client_email']                          = 'Эл. почта';
$lang['client_company']                        = 'Компания';
$lang['client_vat_number']                     = 'НДС';
$lang['client_address']                        = 'Адрес';
$lang['client_city']                           = 'Город';
$lang['client_postal_code']                    = 'Почтовый индекс';
$lang['client_state']                          = 'Район';
$lang['client_password']                       = 'Пароль';
$lang['client_password_change_populate_note']  = 'Примечание: при заполнении этого поля, пароль будет изменен для контакта.';
$lang['client_password_last_changed']          = 'Последнее изменение пароля:';
$lang['login_as_client']                       = 'Войти как клиент';
$lang['client_invoices_tab']                   = 'Счета';
$lang['contracts_invoices_tab']                = 'Договора';
$lang['contracts_tickets_tab']                 = 'Тикеты';
$lang['contracts_notes_tab']                   = 'Заметки';
$lang['client_invoice_number_table_heading']   = 'Счет #';
$lang['client_invoice_date_table_heading']     = 'Дата';
$lang['client_invoice_due_date_table_heading'] = 'До';
$lang['client_string_table_heading']           = 'Клиент';
$lang['client_amount_table_heading']           = 'Сумма';
$lang['client_status_table_heading']           = 'Статус';
$lang['note_description']                      = 'Примечание';

$lang['client_string_contracts_table_heading']      = 'Клиент';
$lang['client_start_date_contracts_table_heading']  = 'Дата начала';
$lang['client_end_date_contracts_table_heading']    = 'Дата окончания';
$lang['client_description_contracts_table_heading'] = 'Описание';
$lang['client_do_not_send_welcome_email']           = 'Не отправлять приветственное электронное письмо';

$lang['clients_notes_table_description_heading'] = 'Описание';
$lang['clients_notes_table_addedfrom_heading']   = 'Добавил(а)';
$lang['clients_notes_table_dateadded_heading']   = 'Добавлено';
$lang['clients_list_full_name']   = 'Full Name';
$lang['clients_list_last_login']  = 'Последний вход';

# Contracts
$lang['contracts']                = 'Договора';
$lang['contract']                 = 'Договор';
$lang['new_contract']             = 'Новый договор';
$lang['contract_lowercase']       = 'договор';
$lang['contract_start_date']      = 'Дата начала';
$lang['contract_end_date']        = 'Дата окончания';
$lang['contract_subject']         = 'Заголовок';
$lang['contract_description']     = 'Описание';
$lang['contract_subject_tooltip'] = 'Заголовок виден клиенту';
$lang['contract_client_string']   = 'Клиент';
$lang['contract_attach']          = 'Прикрепить документ';

$lang['contract_list_client']     = 'Клиент';
$lang['contract_list_subject']    = 'Заголовок';
$lang['contract_list_start_date'] = 'Дата начала';
$lang['contract_list_end_date']   = 'Дата окончания';

# Currencies
$lang['currencies']           = 'Валюта';
$lang['currency']             = 'Валюта';
$lang['new_currency']         = 'Новая валюта';
$lang['currency_lowercase']   = 'валюта';
$lang['base_currency_set']    = 'Теперь это основная валюта.';
$lang['make_base_currency']   = 'Отметить как основная валюта';
$lang['base_currency_string'] = 'Основная валюта';

$lang['currency_list_name']   = 'Название';
$lang['currency_list_symbol'] = 'Символ';


$lang['currency_add_edit_description'] = 'Код валюты';
$lang['currency_add_edit_rate']        = 'Символ';

$lang['currency_edit_heading'] = 'Изменить валюту';
$lang['currency_add_heading']  = 'Добавить валюту';


# Department
$lang['departments']          = 'Отделы';
$lang['department']           = 'Отдел';
$lang['new_department']       = 'Новый отдел';
$lang['department_lowercase'] = 'отдел';

$lang['department_name']             = 'Название отдела';
$lang['department_email']            = 'Эл. почта отдела';
$lang['department_hide_from_client'] = 'Скрыть от клиента?';
$lang['department_list_name']        = 'Название';

# Email Templates
$lang['email_templates']                        = 'Шаблоны эл. писем';
$lang['email_template']                         = 'Шаблон эл. письма';
$lang['email_template_lowercase']               = 'шаблон эл. письма';
$lang['email_templates_lowercase']              = 'шаблоны эл. писем';
$lang['email_template_ticket_fields_heading']   = 'Тикеты';
$lang['email_template_invoices_fields_heading'] = 'Счета';
$lang['email_template_clients_fields_heading']  = 'Клиенты';

$lang['template_name']                                      = 'Название шаблона';
$lang['template_subject']                                   = 'Тема';
$lang['template_fromname']                                  = 'От кого';
$lang['template_fromemail']                                 = 'Эл. почта отправителя';
$lang['send_as_plain_text']                                 = 'Отправить как обычный текст';
$lang['email_template_disabled']                             = 'Отключить';
$lang['email_template_email_message']                       = 'Сообщение';
$lang['available_merge_fields']                             = 'Доступные шорткоды';
# Home
$lang['dashboard_string']                                   = 'Консоль';
$lang['home_latest_todos']                                  = 'Новые задачи';
$lang['home_no_latest_todos']                               = 'Нет задач';
$lang['home_latest_finished_todos']                         = 'Последние выполненные задачи';
$lang['home_no_finished_todos_found']                       = 'Нет выполненных задач';
$lang['home_todo_heading']                                  = 'Задачи';
$lang['home_tickets_awaiting_reply_by_department']          = 'Тикеты в ожидании ответа отделом';
$lang['home_tickets_awaiting_reply_by_status']              = 'Тикеты в ожидании ответа по статусу';
$lang['home_this_week_events']                              = 'События на этой неделе';
$lang['home_upcoming_events_next_week']                     = 'Предстоящие события на следующей неделе';
$lang['home_event_added_by']                                = 'Событие добавлено';
$lang['home_public_event']                                  = 'Открытое мероприятие';
$lang['home_weekly_payment_records']                        = 'Еженедельные платежные отчеты';
$lang['home_weekend_ticket_opening_statistics']             = 'Еженедельная статистика открытых тикетов';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Обмен документами, идеи..';
$lang['new_post']                                           = 'Отправить';
$lang['newsfeed_upload_tooltip']                            = 'Совет: перетащите файлы, чтобы загрузить';
$lang['newsfeed_all_departments']                           = 'Все отделы';
$lang['newsfeed_pin_post']                                  = 'Закрепить';
$lang['newsfeed_unpin_post']                                = 'Открепить';
$lang['newsfeed_delete_post']                               = 'Удалить';
$lang['newsfeed_published_post']                            = 'Добавлено';
$lang['newsfeed_you_like_this']                             = 'Вам понравилось';
$lang['newsfeed_like_this']                                 = 'Нравится';
$lang['newsfeed_one_other']                                 = 'другие';
$lang['newsfeed_you']                                       = 'Вы';
$lang['newsfeed_and']                                       = 'и';
$lang['newsfeed_you_and']                                   = 'Вам и';
$lang['newsfeed_like_this_saying']                          = 'Нравится';
$lang['newsfeed_unlike_this_saying']                        = 'Unlike this';
$lang['newsfeed_show_more_comments']                        = 'Показать еще комментарии';
$lang['comment_this_post_placeholder']                      = 'Ваш комментарий..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Коллеги, которым понравилось';
$lang['newsfeed_comment_likes_modal_heading']               = 'Коллеги, которым нравится этот комментарий';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Этот пост видят только следующие отделы: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Invoice Items';
$lang['invoice_item']                                       = 'Invoice Item';
$lang['new_invoice_item']                                   = 'New Item';
$lang['invoice_item_lowercase']                             = 'invoice item';

$lang['invoice_items_list_description'] = 'Описание';
$lang['invoice_items_list_rate']        = 'Стоимость';
$lang['invoice_items_list_tax']         = 'Налог';

$lang['invoice_item_add_edit_description'] = 'Описание';
$lang['invoice_item_add_edit_rate']        = 'Стоимость';
$lang['invoice_item_add_edit_tax']         = 'Налог';
$lang['invoice_item_add_edit_tax_select']  = 'Выбрать налог';

$lang['invoice_item_edit_heading'] = 'Изменить';
$lang['invoice_item_add_heading']  = 'Добавить';

# Invoices


$lang['invoices']                       = 'Счета на оплату';
$lang['invoice']                        = 'Счет на оплату';
$lang['invoice_lowercase']              = 'счет на оплату';
$lang['create_new_invoice']             = 'Добавить счет на оплату';
$lang['view_invoice']                   = 'Посмотреть счета';

$lang['invoice_payment_recorded']       = 'Зарегистрирована оплата счета';
$lang['invoice_payment_record_failed']  = 'Не удалось зафиксировать оплата';
$lang['invoice_sent_to_client_success'] = 'Счет успешно отправлен клиенту';
$lang['invoice_sent_to_client_fail']    = 'Проблема при отправке счета';
$lang['invoice_reminder_send_problem']  = 'Проблема отправки напоминания о просроченном счете';
$lang['invoice_overdue_reminder_sent']  = 'Напоминание было успешно отправлено';

$lang['invoice_details']              = 'Детали счета';
$lang['invoice_view']                 = 'Посмотреть';
$lang['invoice_select_customer']      = 'Клиент';
$lang['invoice_add_edit_number']      = 'Номер счета';
$lang['invoice_add_edit_date']        = 'Дата счета';
$lang['invoice_add_edit_duedate']     = 'Оплата до';
$lang['invoice_add_edit_currency']    = 'Валюта';
$lang['invoice_add_edit_client_note'] = 'Примечание клиента';
$lang['invoice_add_edit_admin_note']  = 'Примечание администратора';

$lang['invoice_add_edit_search_item']  = 'Поиск';
$lang['invoices_toggle_table_tooltip'] = 'Таблица';

$lang['edit_invoice_tooltip']                   = 'Изменить счет';
$lang['delete_invoice_tooltip']                 = 'Удалить Счет. Примечание: все платежи по этому счету будут удалены (если таковые имеются).';
$lang['invoice_sent_to_email_tooltip']          = 'Отправить по электронной почте';
$lang['invoice_already_send_to_client_tooltip'] = 'Этот счет уже отправлен клиенту %s';
$lang['send_overdue_notice_tooltip']            = 'Отправить уведомление о просрочке платежа';
$lang['invoice_view_activity_tooltip']          = 'Журнал операций';
$lang['invoice_record_payment']                 = 'Зарегистрировать платеж';

$lang['invoice_send_to_client_modal_heading']    = 'Отправить счет клиенту';
$lang['invoice_send_to_client_attach_pdf']       = 'Прикрепить счет в формате PDF';
$lang['invoice_send_to_client_preview_template'] = 'Предпросмотр отправляемого сообщения';

$lang['invoice_dt_table_heading_number']  = 'Счет #';
$lang['invoice_dt_table_heading_date']    = 'Дата';
$lang['invoice_dt_table_heading_client']  = 'Клиент';
$lang['invoice_dt_table_heading_duedate'] = 'Оплата до';
$lang['invoice_dt_table_heading_amount']  = 'Сумма';
$lang['invoice_dt_table_heading_status']  = 'Статус';

$lang['record_payment_for_invoice']              = 'Record Payment for';
$lang['record_payment_amount_received']          = 'Полученная сумма';
$lang['record_payment_date']                     = 'Дата оплаты';
$lang['record_payment_leave_note']               = 'Оставьте примечание';
$lang['invoice_payments_received']               = 'Полученные платежи';
$lang['invoice_record_payment_note_placeholder'] = 'Примечание администратора';
$lang['no_payments_found']                       = 'Платежи по этому счету не найдены';
$lang['invoice_email_link_text']                 = 'Открыть счет';

# Payments
$lang['payments']                             = 'Платежи';
$lang['payment']                              = 'Платеж';
$lang['payment_lowercase']                    = 'платеж';
$lang['payments_table_number_heading']        = 'Платеж #';
$lang['payments_table_invoicenumber_heading'] = 'Счет #';
$lang['payments_table_mode_heading']          = 'Способ платежа';
$lang['payments_table_date_heading']          = 'Дата';
$lang['payments_table_amount_heading']        = 'Сумма';
$lang['payments_table_client_heading']        = 'Клиент';
$lang['payment_not_exists']                   = 'Платеж не существует';

$lang['payment_edit_for_invoice']     = 'Оплата счета';
$lang['payment_edit_amount_received'] = 'Полученная сумма';
$lang['payment_edit_date']            = 'Дата оплаты';
$lang['payment_edit_lave_note']       = 'Примечание';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Тема';
$lang['kb_article_add_edit_group']   = 'Группа';
$lang['kb_string']                   = 'База знаний';
$lang['kb_article']                  = 'Раздел';
$lang['kb_article_lowercase']        = 'раздел';
$lang['kb_article_new_article']      = 'Новый раздел';
$lang['kb_article_disabled']         = 'Откл.';
$lang['kb_article_description']      = 'Описание раздела';

$lang['kb_table']                      = 'Список';
$lang['kb_no_articles_found']          = 'В базе знаний ничего нет';
$lang['kb_dt_article_name']            = 'Название раздела';
$lang['kb_dt_group_name']              = 'Группа';
$lang['new_group']                     = 'Новая группа';
$lang['kb_group_add_edit_name']        = 'Название группы';
$lang['kb_group_add_edit_description'] = 'Краткое описание';
$lang['kb_group_add_edit_disabled']    = 'Откл.';
$lang['kb_group_add_edit_note']        = 'Примечание: все статьи в этой группе будут скрыты, если установлен флажок "Откл."';
$lang['group_table_name_heading']      = 'Название';
$lang['group_table_isactive_heading']  = 'Активно';
$lang['kb_no_groups_found']            = 'Нет групп';

# Mail Lists
$lang['mail_lists']                           = 'Mail Lists';
$lang['mail_list']                            = 'Mail List';
$lang['new_mail_list']                        = 'New Mail List';
$lang['mail_list_lowercase']                  = 'mail list';
$lang['custom_field_deleted_success']         = 'Custom field deleted';
$lang['custom_field_deleted_fail']            = 'Problem deleting custom field';
$lang['email_removed_from_list']              = 'Email removed from list';
$lang['email_remove_fail']                    = 'Email removed from list';
$lang['staff_mail_lists']                     = 'Staff Mail List';
$lang['clients_mail_lists']                   = 'Clients Mail List';
$lang['mail_list_total_imported']             = 'Total emails imported: %s';
$lang['mail_list_total_duplicate']            = 'Total duplicate emails: %s';
$lang['mail_list_total_failed_to_insert']     = 'Emails failed to insert: %s';
$lang['mail_list_total_invalid']              = 'Invalid email address: %s';
$lang['cant_edit_mail_list']                  = 'You cant edit this list, this list is populated automatically';
$lang['mail_list_add_edit_name']              = 'Mail List Name';
$lang['mail_list_add_edit_customfield']       = 'Add custom field';
$lang['mail_lists_viewing_emails']            = 'Viewing Emails From List';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Date Added';
$lang['add_new_email_to']                     = 'Add New Email to %s';
$lang['import_emails_to']                     = 'Import Emails to %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Import File';
$lang['mail_list_available_custom_fields']    = 'Available Custom Fields';
$lang['submit_import_emails']                 = 'Import Emails';
$lang['btn_import_emails']                    = 'Import Emails (Excel)';
$lang['btn_add_email_to_list']                = 'Add Email to This List';
$lang['mail_lists_dt_list_name']              = 'List Name';
$lang['mail_lists_dt_datecreated']            = 'Date Created';
$lang['mail_lists_dt_creator']                = 'Creator';
$lang['email_added_to_mail_list_successfully'] = 'Email added to list';
$lang['email_is_duplicate_mail_list']         = 'Email already exists in this list';

# Media
$lang['media_files']            = 'Файлы';

# Payment modes
$lang['new_payment_mode']       = 'Новый способ оплаты';
$lang['payment_modes']          = 'Способы оплаты';
$lang['payment_mode']           = 'Способ оплаты';
$lang['payment_mode_lowercase'] = 'способ оплаты';
$lang['payment_modes_dt_name']  = 'Название способа оплаты';

$lang['payment_mode_add_edit_name'] = 'Название способа оплаты';
$lang['payment_mode_edit_heading']  = 'Изменить способ оплаты';
$lang['payment_mode_add_heading']   = 'Добавить новый способ оплаты';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Новый заготовленный ответ';
$lang['predefined_replies']                = 'Готовые ответы';
$lang['predefined_reply']                  = 'Готовый ответ';
$lang['predefined_reply_lowercase']        = 'готовый ответ';
$lang['predefined_replies_dt_name']        = 'Название заготовленного ответа';
$lang['predefined_reply_add_edit_name']    = 'Название заготовленного ответа';
$lang['predefined_reply_add_edit_content'] = 'Ответ';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Новый приоритет';
$lang['ticket_priorities']             = 'Приоритеты тикетов';
$lang['ticket_priority']               = 'Приоритет тикета';
$lang['ticket_priority_lowercase']     = 'приоритет тикета';
$lang['no_ticket_priorities_found']    = 'Приоритеты не найдены';
$lang['ticket_priority_dt_name']       = 'Название приоритета';
$lang['ticket_priority_add_edit_name'] = 'Название приоритета';

# Reports
$lang['kb_reports']                         = 'Отчет о статьях базы знаний';
$lang['sales_reports']                      = 'Отчет по продажам';
$lang['reports_choose_kb_group']            = 'Выберите группу';
$lang['reports_sales_select_report_type']   = 'Выберите тип отчета';
$lang['report_kb_yes']                      = 'Да';
$lang['report_kb_no']                       = 'Нет';
$lang['report_kb_no_votes']                 = 'Голосов еще нет';
$lang['report_this_week_leads_conversions'] = 'Конверсия за эту неделю';
$lang['report_leads_sources_conversions']   = 'Источник конверсии';
$lang['report_leads_monthly_conversions']   = 'За месяц';
$lang['sales_report_heading']               = 'Отчет по продажам';
$lang['report_sales_type_income']           = 'Общий доход';

$lang['report_sales_type_customer']                    = 'Отчет по клиентам';
$lang['report_sales_base_currency_select_explanation'] = 'Вы должны выбрать валюту, потому что у вас есть счета в разной валюте';
$lang['report_sales_from_date']                        = 'От';
$lang['report_sales_to_date']                          = 'До настоящего времени';


$lang['report_sales_months_all_time']      = 'За все время';
$lang['report_sales_months_six_months']    = 'За последние 6 месяцев';
$lang['report_sales_months_twelve_months'] = 'За последние 12 месяцев';
$lang['report_sales_months_custom']        = 'Выбрать период';
$lang['reports_sales_generated_report']    = 'Сформированный отчет';



$lang['reports_sales_dt_customers_client']                = 'Клиент';
$lang['reports_sales_dt_customers_total_invoices']        = 'Всего счетов';
$lang['reports_sales_dt_items_customers_amount']          = 'Сумма';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Сумма с учетом налога';

# Roles
$lang['new_role']           = 'Новая роль';
$lang['all_roles']          = 'Все роли';
$lang['roles']              = 'Роли сотрудников';
$lang['role']               = 'Роль';
$lang['role_lowercase']     = 'роль';
$lang['roles_total_users']  = 'Всего пользователей: ';
$lang['roles_dt_name']      = 'Название роли';
$lang['role_add_edit_name'] = 'Название роли';

# Service
$lang['new_service']           = 'New Service';
$lang['services']              = 'Services';
$lang['service']               = 'Service';
$lang['service_lowercase']     = 'service';
$lang['services_dt_name']      = 'Service Name';
$lang['service_add_edit_name'] = 'Service Name';

# Settings
$lang['settings']                     = 'Настройки';
$lang['settings_updated']             = 'Настройки обновлены';
$lang['settings_save']                = 'Сохранить настройки';
$lang['settings_group_general']       = 'Общие';
$lang['settings_group_localization']  = 'Локализация';
$lang['settings_group_tickets']       = 'Тикеты';
$lang['settings_group_sales']         = 'Финансы';
$lang['settings_group_email']         = 'Эл. почта';
$lang['settings_group_clients']       = 'Клиенты';
$lang['settings_group_newsfeed']      = 'Лента новостей';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Да';
$lang['settings_no']                                         = 'Нет';
$lang['settings_clients_default_theme']                      = 'Default customers theme';
$lang['settings_clients_allow_registration']                 = 'Разрешить регистрацию клиентам';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Разрешить просмотр базы знаний без регистрации';

$lang['settings_cron_send_overdue_reminder']                 = 'Отправить напоминание о просроченном платеже';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Send overdue email to client when invoice status updated to overdue from Cron Job';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Автоматическая отправка напоминаний через (кол-во дней)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Автоматическая повторная отправка напоминаний после (кол-во дней)';

$lang['settings_email_host']      = 'SMTP Host';
$lang['settings_email_port']      = 'SMTP Port';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Password';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Email Signature';

$lang['settings_general_company_logo']                = 'Логотип компании';
$lang['settings_general_company_logo_tooltip']        = 'Рекомендуемые размеры: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Удалить логотип';
$lang['settings_general_company_name']                = 'Название компании';
$lang['settings_general_company_main_domain']         = 'Ссылка на сайт компании';
$lang['settings_general_use_knowledgebase']           = 'Использование Базы Знаний';
$lang['settings_general_use_knowledgebase_tooltip']   = 'If you allow this options knowledge base will be shown also on clients side';
$lang['settings_general_tables_limit']                = 'Предел нумерации страниц';
$lang['settings_general_default_staff_role']          = 'Роль сотрудника по умолчанию';
$lang['settings_general_default_staff_role_tooltip']  = 'При добавлении нового сотрудника эта роль будет выбрана по умолчанию';

$lang['settings_localization_date_format']      = 'Формат даты';
$lang['settings_localization_default_timezone'] = 'Временная зона по умолчанию';
$lang['settings_localization_default_language'] = 'Язык по умолчанию';


$lang['settings_newsfeed_max_file_upload_post']    = 'Макс. размер файла при загрузке';
$lang['settings_newsfeed_max_file_size']           = 'Макс. размер файла (MB)';

$lang['settings_reminders_contracts']         = 'Напоминание об истечении договора';
$lang['settings_reminders_contracts_tooltip'] = 'Уведомление о напоминании об истечении в днях';

$lang['settings_tickets_use_services']             = 'Use Services';
$lang['settings_tickets_max_attachments']          = 'Макс. вложений в тикете';
$lang['settings_tickets_allow_departments_access'] = 'Разрешить сотрудникам доступ только к тем тикетам, к отделу которого они относятся';
$lang['settings_tickets_allowed_file_extensions']  = 'Разрешить вложения с расширениями';

$lang['settings_sales_general']                                    = 'Общие';
$lang['settings_sales_general_note']                               = 'Общие настройки';
$lang['settings_sales_invoice_prefix']                             = 'Префикс номера счета';
$lang['settings_sales_decimal_separator']                          = 'Десятичный разделитель';
$lang['settings_sales_thousand_separator']                         = 'Разделитель тысяч';
$lang['settings_sales_currency_placement']                         = 'Размещение валюты';
$lang['settings_sales_currency_placement_before']                  = 'Перед суммой';
$lang['settings_sales_currency_placement_after']                   = 'После суммы';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Потребовать от клиента войти в систему для просмотра счета';
$lang['settings_sales_next_invoice_number']                        = 'Следующий номер счета';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Установите в этом поле значение 1, если вы хотите начать с начала';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrement invoice number on delete';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Do you want to decrement the invoice number when the last invoice is deleted? eq. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented.';
$lang['settings_sales_invoice_number_format']                      = 'Формат номера счета';
$lang['settings_sales_invoice_number_format_year_based']           = 'Год';
$lang['settings_sales_invoice_number_format_number_based']         = 'Номер (000001)';


$lang['settings_sales_company_info_note']    = 'Эта информация будет отображаться на накладных/сметах/платежах и других документах в формате PDF, где информация о компании обязательна';
$lang['settings_sales_company_name']         = 'Название компании';
$lang['settings_sales_address']              = 'Адрес';
$lang['settings_sales_city']                 = 'Город';
$lang['settings_sales_country_code']         = 'Страна';
$lang['settings_sales_postal_code']          = 'Почтовый индекс';
$lang['settings_sales_phonenumber']          = 'Телефон';

# Leads
$lang['new_lead']       = 'Новый лид';
$lang['leads']          = 'Лиды';
$lang['lead']           = 'Лид';
$lang['lead_lowercase'] = 'лид';
$lang['leads_all']      = 'Все';

$lang['leads_canban_notes']  = 'Примечание: %s';
$lang['leads_canban_source'] = 'Источник: %s';

$lang['lead_new_source']            = 'Новый источник';
$lang['lead_sources']               = 'Источники лидов';
$lang['lead_source']                = 'Источник лида';
$lang['lead_source_lowercase']      = 'источник лида';
$lang['leads_sources_not_found']    = 'Источники не найдены';
$lang['leads_sources_table_name']   = 'Источник';
$lang['leads_source_add_edit_name'] = 'Источник';

$lang['lead_new_status']         = 'Новый статус';
$lang['lead_statuss']            = 'Статус';
$lang['lead_status']             = 'Статус';
$lang['lead_status_lowercase']   = 'статус';
$lang['leads_status_table_name'] = 'Статус';

$lang['leads_status_add_edit_name']  = 'Название статуса';
$lang['leads_status_add_edit_order'] = 'Порядок';

$lang['lead_statuses_not_found']      = 'Статусы не найдены';
$lang['leads_search']                 = 'Поиск лидов';

$lang['leads_table_total'] = 'Всего лидов: %s';

$lang['leads_dt_name']         = 'Имя';
$lang['leads_dt_email']        = 'Эл. почта';
$lang['leads_dt_phonenumber']  = 'Телефон';
$lang['leads_dt_assigned']     = 'Прикреплен к';
$lang['leads_dt_status']       = 'Статус';
$lang['leads_dt_last_contact'] = 'Последний контакт';

$lang['lead_add_edit_name']                 = 'Имя';
$lang['lead_add_edit_email']                = 'Электронная почта';
$lang['lead_add_edit_phonenumber']          = 'Телефон';
$lang['lead_add_edit_source']               = 'Источник';
$lang['lead_add_edit_status']               = 'Статус';
$lang['lead_add_edit_assigned']             = 'Прикреплен к';
$lang['lead_add_edit_datecontacted']        = 'Дата контакта';
$lang['lead_add_edit_contacted_today']      = 'Связались сегодня';
$lang['lead_add_edit_activity']             = 'Журнал операций';
$lang['lead_add_edit_notes']                = 'Примечания';
$lang['lead_add_edit_add_note']             = 'Добавить примечание';
$lang['lead_not_contacted']                 = 'Я не связывался с контактом';
$lang['lead_add_edit_contacted_this_lead']  = 'Я связался с контактом';
$lang['lead_confirmation_canban_contacted'] = 'Have you got in touch with this lead?';

# Misc
$lang['access_denied']              = 'Доступ запрещен';
$lang['prev']                       = 'назад';
$lang['next']                       = 'далее';

# Datatables
$lang['dt_paginate_first']          = 'В начало';
$lang['dt_paginate_last']           = 'В конец';
$lang['dt_paginate_next']           = 'Далее';
$lang['dt_paginate_previous']       = 'Назад';
$lang['dt_empty_table']             = 'Ничего не нашли';
$lang['dt_search']                  = 'Поиск:';
$lang['dt_zero_records']            = 'Нет подходящих записей';
$lang['dt_loading_records']         = 'Загружаем...';
$lang['dt_length_menu']             = 'Показать _MENU_ записей';
$lang['dt_info_filtered']           = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']              = 'Показано 0 до 0 из 0 ';
$lang['dt_info']                    = 'Показано _START_ до _END_ из _TOTAL_ ';
$lang['dt_empty_table']             = 'Ничего не нашли';
$lang['dt_sort_ascending']          = 'активируйте, чтобы сортировать по возрастанию';
$lang['dt_sort_descending']         = 'активируйте, чтобы сортировать по убыванию';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s отправлено уведомление о просроченном платеже';

# Weekdays
$lang['wd_monday']    = 'Понедельник';
$lang['wd_tuesday']   = 'Вторник';
$lang['wd_thursday']  = 'Четверг';
$lang['wd_wednesday'] = 'Среда';
$lang['wd_friday']    = 'Пятница';
$lang['wd_saturday']  = 'Суббота';
$lang['wd_sunday']    = 'Воскресение';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Консоль';
$lang['als_clients']   = 'Клиенты';
$lang['als_leads']     = 'Лиды';

$lang['als_contracts'] = 'Договоры';

$lang['als_all_tickets'] = 'Все тикеты';
$lang['als_sales']       = 'Продажи';

$lang['als_staff'] = 'Сотрудники';
$lang['als_tasks'] = 'Задачи';
$lang['als_kb']    = 'База знаний';

$lang['als_surveys']               = 'Опросы';
$lang['als_media']                 = 'Файлы';
$lang['als_reports']               = 'Отчеты';
$lang['als_reports_sales_submenu'] = 'Продажи';
$lang['als_reports_leads_submenu'] = 'Лиды';
$lang['als_kb_articles_submenu']   = 'БЗ записи';
$lang['als_utilities']             = 'Утилиты';
$lang['als_announcements_submenu'] = 'Объявления';
$lang['als_mail_lists_submenu']    = 'Список рассылок';
$lang['als_calendar_submenu']      = 'Календарь';
$lang['als_activity_log_submenu']  = 'Журнал операций';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Тикеты';
$lang['acs_ticket_priority_submenu']           = 'Приоритет тикета';
$lang['acs_ticket_statuses_submenu']           = 'Статус тикета';
$lang['acs_ticket_predefined_replies_submenu'] = 'Готовые ответы';
$lang['acs_ticket_services_submenu']           = 'Услуги';
$lang['acs_departments']                       = 'Отделы';
$lang['acs_leads']                             = 'Лиды';
$lang['acs_leads_sources_submenu']             = 'Источники';
$lang['acs_leads_statuses_submenu']            = 'статусы';
$lang['acs_sales_taxes_submenu']               = 'Налоговые ставки';
$lang['acs_sales_currencies_submenu']          = 'Валюта';
$lang['acs_sales_payment_modes_submenu']       = 'Способы оплаты';
$lang['acs_email_templates']                   = 'Шаблоны эл. писем';
$lang['acs_roles']                             = 'Роли';
$lang['acs_settings']                          = 'Настройки';

# Tickets
$lang['new_ticket']                                         = 'Открыть тикет';
$lang['tickets']                                            = 'Тикеты';
$lang['ticket']                                             = 'Тикет';
$lang['ticket_lowercase']                                   = 'тикет';
$lang['support_tickets']                                    = 'Поддержка тикетов';
$lang['support_ticket']                                     = 'Поддержка тикета';
$lang['ticket_settings_to']                                 = 'От';
$lang['ticket_settings_email']                              = 'Эл. почты';
$lang['ticket_settings_departments']                        = 'Выберите отдел';
$lang['ticket_settings_service']                            = 'Услуга';
$lang['ticket_settings_priority']                           = 'Приоритет';
$lang['ticket_settings_subject']                            = 'Тема';
$lang['ticket_settings_assign_to']                          = 'Назначить тикет (по умолчанию это текущий пользователь)';
$lang['ticket_settings_assign_to_you']                      = 'Вы';
$lang['ticket_settings_select_client']                      = 'Выберите клиента';
$lang['ticket_add_body']                                    = 'Сообщение';
$lang['ticket_add_attachments']                             = 'Вложения';
$lang['ticket_no_reply_yet']                                = 'Нет ответа';
$lang['new_ticket_added_successfully']                        = 'Тикет #%s успешно добавлен';
$lang['replied_to_ticket_successfully']                       = 'Ответ на тикет #%s добавлен';
$lang['ticket_settings_updated_successfully']                = 'Настройки тикета обновлены';
$lang['ticket_settings_updated_successfully_and_reassigned'] = 'Настройки тикета обновлены - переведен в отдел %s';
$lang['ticket_dt_subject']                                  = 'Тема';
$lang['ticket_dt_department']                               = 'Отдел';
$lang['ticket_dt_service']                                  = 'Услуга';
$lang['ticket_dt_submitter']                                = 'Клиент';
$lang['ticket_dt_status']                                   = 'Статус';
$lang['ticket_dt_priority']                                 = 'Приоритет';
$lang['ticket_dt_last_reply']                               = 'Последний ответ';

$lang['ticket_single_add_reply']                  = 'Ответить';
$lang['ticket_single_add_note']                   = 'Добавить примечание';
$lang['ticket_single_other_user_tickets']         = 'Другие тикеты';
$lang['ticket_single_settings']                   = 'Настройки';
$lang['ticket_single_priority']                   = 'Приоритет: %s';
$lang['ticket_single_last_reply']                 = 'Последний ответ: %s';
$lang['ticket_single_change_status_top']          = 'Выберите статус';
$lang['ticket_single_ticket_note_by']             = 'Примечание от %s';
$lang['ticket_single_note_added']                 = 'Примечание добавлено: %s';
$lang['ticket_single_change_status']              = 'Выберите статус';
$lang['ticket_single_assign_to_me_on_update']     = 'Назначить этот тикет мне автоматически';
$lang['ticket_single_insert_predefined_reply']    = 'Вставить готовый ответ';
$lang['ticket_single_insert_knowledge_base_link'] = 'Вставить ссылку на базу знаний';
$lang['ticket_single_attachments']                = 'Вложения';
$lang['ticket_single_add_response']               = 'Добавить ответ';
$lang['ticket_single_note_heading']               = 'Примечание';
$lang['ticket_single_add_note']                   = 'Добавить примечание';
$lang['ticket_settings_none_assigned']            = 'Ничего';
$lang['ticket_status_changed_successfully']        = 'Статус тикета изменен';
$lang['ticket_status_changed_fail']               = 'Проблема изменения статуса';

$lang['ticket_staff_string']                    = 'Сотрудники';
$lang['ticket_client_string']                   = 'Клиент';
$lang['ticket_posted']                          = 'Добавлено: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Вставить готовый ответ';
$lang['ticket_kb_link_heading']                 = 'Вставить ссылку на базу знаний';
$lang['ticket_access_by_department_denied']     = 'У Вас нет доступа к этому тикету. Данный тикет относится к другому отделу.';

# Staff
$lang['new_staff']                       = 'Новый сотрудник';
$lang['staff_members']                   = 'Сотрудники';
$lang['staff_member']                    = 'Сотрудник';
$lang['staff_member_lowercase']          = 'Сотрудник';
$lang['staff_profile_updated']           = 'Ваш профиль был обновлен';
$lang['staff_old_password_incorrect']     = 'Ваш старый пароль неверен';
$lang['staff_password_changed']          = 'Ваш пароль был изменен';
$lang['staff_problem_changing_password'] = 'При изменении пароля возникли проблемы';
$lang['staff_profile_string']            = 'Профиль';

$lang['staff_cant_remove_main_admin']          = 'Не могу удалить главного администратора';
$lang['staff_cant_remove_yourself_from_admin'] = 'Вы не можете удалить себя в роли администратора';

$lang['staff_dt_name']       = 'Имя и Фамилия';
$lang['staff_dt_email']      = 'Эл. почта';
$lang['staff_dt_last_Login'] = 'Последний вход';
$lang['staff_dt_active']     = 'Активный';

$lang['staff_add_edit_firstname']             = 'Имя';
$lang['staff_add_edit_lastname']              = 'Фамилия';
$lang['staff_add_edit_email']                 = 'Эл. почта';
$lang['staff_add_edit_phonenumber']           = 'Телефон';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Member departments';
$lang['staff_add_edit_role']                  = 'Роль';
$lang['staff_add_edit_permissions']           = 'Права сотрудника';
$lang['staff_add_edit_administrator']         = 'Администратор';
$lang['staff_add_edit_password']              = 'Пароль';
$lang['staff_add_edit_password_note']         = 'Примечание: если вы измените это поле, пароль пользователя будет изменен.';
$lang['staff_add_edit_password_last_changed'] = 'Последнее изменение пароля';
$lang['staff_add_edit_notes']                 = 'Примечания';
$lang['staff_add_edit_note_description']      = 'Описание примечания';

$lang['staff_notes_table_description_heading'] = 'Примечание';
$lang['staff_notes_table_addedfrom_heading']   = 'Добавил(а)';
$lang['staff_notes_table_dateadded_heading']   = 'Дата публикации';

$lang['staff_admin_profile']         = 'Это профиль администратора';
$lang['staff_profile_notifications'] = 'Уведомления';
$lang['staff_profile_departments']   = 'Отделы';

$lang['staff_edit_profile_image']                     = 'Фото';
$lang['staff_edit_profile_your_departments']          = 'Отделы';
$lang['staff_edit_profile_change_your_password']      = 'Изменить свой пароль';
$lang['staff_edit_profile_change_old_password']       = 'Старый пароль';
$lang['staff_edit_profile_change_new_password']       = 'Новый пароль';
$lang['staff_edit_profile_change_repeat_new_password'] = 'Повторите новый пароль';

# Surveys
$lang['new_survey']                    = 'Новый опрос';
$lang['surveys']                       = 'Опросы';
$lang['survey']                        = 'Опрос';
$lang['survey_lowercase']              = 'опрос';
$lang['survey_no_mail_lists_selected'] = 'Рассылка не выбрана';
$lang['survey_send_success_note']      = 'Все опросы в рассылках(%s) будут отправлены через CRON';
$lang['survey_result']                 = 'Результат опроса: %s';
$lang['question_string']               = 'Вопрос';
$lang['question_field_string']         = 'Поле';

$lang['survey_list_view_tooltip']         = 'Посмотреть опрос';
$lang['survey_list_view_results_tooltip'] = 'Посмотреть результаты';

$lang['survey_add_edit_subject']                   = 'Тема опроса';
$lang['survey_add_edit_email_description']         = 'Описание опроса (Email описание)';
$lang['survey_include_survey_link']                = 'Включить ссылку на опрос в описание';
$lang['survey_available_mail_lists_custom_fields'] = 'Действующие поля для Email рассылки';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Пользовательские поля могут быть использованы для редактирования электронной почты.';
$lang['survey_add_edit_short_description_view']    = 'Краткое описание опроса (Просмотр описания)';
$lang['survey_add_edit_from']                      = 'От (отображается в электронной почте)';
$lang['survey_add_edit_redirect_url']              = 'Редирект опроса URL';
$lang['survey_add_edit_red_url_note']              = 'Когда пользователь закончит опрос, он будет перенаправлены (оставьте пустым, если перенаправление будет на этот сайт )';
$lang['survey_add_edit_disabled']                  = 'Отключить';
$lang['survey_add_edit_only_for_logged_in']        = 'Только для зарегистрированных участников (сотрудников,клиентов)';
$lang['send_survey_string']                        = 'Отправить опрос';
$lang['survey_send_mail_list_clients']             = 'Клиенты';
$lang['survey_send_mail_list_staff']               = 'Сотрудники';
$lang['survey_send_mail_lists_string']             = 'Рассылки';
$lang['survey_send_mail_lists_note_logged_in']     = 'Примечание: если вы отправляете опрос в списки рассылки, "только для зарегистрированных участников" должны быть отключены';
$lang['survey_send_string']                        = 'Отправить';

$lang['survey_send_to_total']  = 'Отправить %s писем';
$lang['survey_send_till_now']  = 'До настоящего времени';
$lang['survey_send_finished']  = 'Опрос отправлен: %s';
$lang['survey_added_to_queue'] = 'Этот опрос будет добавлен в очередь на хрон %s';

$lang['survey_questions_string']          = 'Вопросы';
$lang['survey_insert_field']              = 'Вставить поле';
$lang['survey_field_checkbox']            = 'Чекбокс';
$lang['survey_field_radio']               = 'Радио';
$lang['survey_field_input']               = 'Поле ввода';
$lang['survey_field_textarea']            = 'Текстовая область';
$lang['survey_question_required']         = 'Обязательно';
$lang['survey_question_only_for_preview'] = 'Только для просмотра';
$lang['survey_create_first']              = 'Вам нужно сначала создать опрос, чтобы вставить вопросы.';


$lang['survey_dt_name']               = 'Название';
$lang['survey_dt_total_questions']    = 'Всего вопросов';
$lang['survey_dt_total_participants'] = 'Всего участников';
$lang['survey_dt_date_created']       = 'Дата создания';
$lang['survey_dt_active']             = 'Активность';

$lang['survey_text_questions_results'] = 'Результат вопросов';
$lang['survey_view_all_answers']       = 'Посмотреть все ответы';

# Staff Tasks
$lang['new_task']       = 'Новая задача';
$lang['tasks']          = 'Задачи';
$lang['task']           = 'Задача';
$lang['task_lowercase'] = 'задача';
$lang['comment_string'] = 'Комментарий';

$lang['task_marked_as_complete'] = 'Задача выполнена';
$lang['task_follower_removed']   = 'Task follower removed successfully';
$lang['task_assignee_removed']   = 'Task assignee removed successfully';

$lang['task_no_assignees'] = 'No assignee\'s for this task';
$lang['task_no_followers'] = 'No followers for this task';

$lang['task_list_all']            = 'Все';
$lang['task_list_not_assigned']   = 'Not Assigned';
$lang['task_list_duedate_passed'] = 'Due Date Passed';
$lang['tasks_dt_name']            = 'Name';

$lang['task_single_priority']               = 'Priority';
$lang['task_single_start_date']             = 'Start Date';
$lang['task_single_due_date']               = 'Due Date';
$lang['task_single_finished']               = 'Finished';
$lang['task_single_mark_as_complete']       = 'Mark as complete';
$lang['task_single_edit']                   = 'Edit';
$lang['task_single_delete']                 = 'Delete';
$lang['task_single_assignees']              = 'Assignee\'s';
$lang['task_single_assignees_select_title'] = 'Assign task to';
$lang['task_single_followers']              = 'Followers';
$lang['task_single_followers_select_title'] = 'Add Followers';
$lang['task_single_insert_media_link']      = 'Insert Media Link';
$lang['task_single_add_new_comment']        = 'Add Comment';

$lang['task_add_edit_subject']     = 'Subject';
$lang['task_add_edit_priority']    = 'Priority';
$lang['task_priority_low']         = 'Low';
$lang['task_priority_medium']      = 'Medium';
$lang['task_priority_high']        = 'High';
$lang['task_priority_urgent']      = 'Urgent';
$lang['task_add_edit_start_date']  = 'Start Date';
$lang['task_add_edit_due_date']    = 'Due Date';
$lang['task_add_edit_description'] = 'Task Description';

# Taxes
$lang['new_tax']       = 'Новый налог';
$lang['taxes']         = 'Налоги';
$lang['tax']           = 'Налог';
$lang['tax_lowercase'] = 'налог';
$lang['tax_dt_name']   = 'Название налога';
$lang['tax_dt_rate']   = 'Ставка (процент)';

$lang['tax_add_edit_name'] = 'Название налога';
$lang['tax_add_edit_rate'] = 'Ставка (процент)';
$lang['tax_edit_title']    = 'Изменить налог';
$lang['tax_add_title']     = 'Добавить налог';

# Ticket Statuses
$lang['new_ticket_status']       = 'Новый статус тикета';
$lang['ticket_statuses']         = 'Статусы тикетов';
$lang['ticket_status']           = 'Статус тикета';
$lang['ticket_status_lowercase'] = 'Статус тикета';

$lang['ticket_statuses_dt_name']      = 'Название статуса';
$lang['no_ticket_statuses_found']     = 'Статусы не найдены';
$lang['ticket_statuses_table_total']  = 'Всего %s';
$lang['ticket_status_add_edit_name']  = 'Название статуса';
$lang['ticket_status_add_edit_color'] = 'Цвет';
$lang['ticket_status_add_edit_order'] = 'Позиция статуса';

# Todos
$lang['new_todo']                  = 'Новое задание';
$lang['my_todos']                  = 'Мой личный список заданий';
$lang['todo']                      = 'Личная задание';
$lang['todo_lowercase']            = 'личная задание';
$lang['todo_status_changed']       = 'Статус задания изменен';
$lang['todo_add_title']            = 'Добавить личное задание';
$lang['add_new_todo_description']  = 'Описание';
$lang['no_finished_todos_found']   = 'Нет выполненных заданий';
$lang['no_unfinished_todos_found'] = 'Нет личных заданий';
$lang['unfinished_todos_title']    = 'Незаконченные задания';
$lang['finished_todos_title']      = 'Последние выполненные задания';

# Authentication
$lang['password_changed_email_subject']             = 'Ваш пароль был изменен';
$lang['password_reset_email_subject']               = 'Сброс пароля на %s';
# Utilities
$lang['utility_activity_log']                       = 'Журнал операций';
$lang['utility_activity_log_filter_by_date']        = 'Фильтр по дате';
$lang['utility_activity_log_dt_description']        = 'Описание';
$lang['utility_activity_log_dt_date']               = 'Дата';
$lang['utility_activity_log_dt_staff']              = 'Сотрудник';
$lang['utility_calendar_new_event_title']           = 'Добавить новое событие';
$lang['utility_calendar_new_event_start_date']      = 'Дата начала';
$lang['utility_calendar_new_event_end_date']        = 'Дата окончания';
$lang['utility_calendar_new_event_make_public']     = 'Для всех';
$lang['utility_calendar_event_added_successfully']   = 'Новое событие успешно добавлено';
$lang['utility_calendar_event_deleted_successfully'] = 'Событие удалено';
$lang['utility_calendar_new_event_placeholder']     = 'Заголовок события';


# Navigation
$lang['nav_notifications']          = 'Уведомления';
$lang['nav_my_profile']             = 'Мой профиль';
$lang['nav_edit_profile']           = 'Изменить профиль';
$lang['nav_logout']                 = 'Выйти';
$lang['nav_no_notifications']       = 'Нет уведомлений';
$lang['nav_view_all_notifications'] = 'Посмотреть все уведомления';
$lang['nav_customizer_tooltip']     = 'Настройка параметров';
$lang['nav_notifications_tooltip']  = 'Посмотреть уведомления';

## Clients
$lang['clients_required_field'] = 'Это поле обязательно для заполнения';

# Footer
$lang['clients_copyright'] = 'Все права защищены. %s';

# Announcements
$lang['clients_announcement_from']  = 'От: ';
$lang['clients_announcement_added'] = 'Добавил(а): ';

# Contracts
$lang['clients_contracts']               = 'Договоры';
$lang['clients_contracts_dt_subject']    = 'Тема';
$lang['clients_contracts_dt_start_date'] = 'Дата начала';
$lang['clients_contracts_dt_end_date']   = 'Дата окончания';

# Home
$lang['clients_quick_invoice_info']                = 'Краткая информация о счетах';
$lang['clients_home_currency_select_tooltip']      = 'Вы должны выбрать валюту, т.к. у вас есть счета в разной валюте';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Скачать';

$lang['clients_my_invoices']        = 'Счета на оплату';
$lang['clients_invoice_dt_number']  = 'Счет #';
$lang['clients_invoice_dt_date']    = 'Дата';
$lang['clients_invoice_dt_duedate'] = 'Дата оплаты';
$lang['clients_invoice_dt_amount']  = 'Сумма';
$lang['clients_invoice_dt_status']  = 'Статус';

# Profile
$lang['clients_profile_heading'] = 'Профиль';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Имя';
$lang['clients_lastname']  = 'Фамилия';
$lang['clients_email']     = 'Электронная почта';
$lang['clients_company']   = 'Компания';
$lang['clients_vat']       = 'НДС';
$lang['clients_phone']     = 'Телефон';
$lang['clients_country']   = 'Страна';
$lang['clients_city']      = 'Город';
$lang['clients_address']   = 'Адрес';
$lang['clients_zip']       = 'Индекс';
$lang['clients_state']     = 'Район';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Пароль';
$lang['clients_register_password_repeat'] = 'Повторите пароль';
$lang['clients_edit_profile_update_btn']  = 'Обновить';

$lang['clients_edit_profile_change_password_heading'] = 'Изменить пароль';
$lang['clients_edit_profile_old_password']            = 'Старый пароль';
$lang['clients_edit_profile_new_password']            = 'Новый пароль';
$lang['clients_edit_profile_new_password_repeat']     = 'Повторите новый пароль';
$lang['clients_edit_profile_change_password_btn']     = 'Изменить';
$lang['clients_profile_last_changed_password']        = 'Последняя смена пароля %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'База знаний';
$lang['clients_knowledge_base_articles_not_found'] = 'Нет записей';
$lang['clients_knowledge_base_find_useful']        = 'Вы нашли эту статью полезной?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Да';
$lang['clients_knowledge_base_find_useful_no']     = 'Нет';
$lang['clients_article_only_1_vote_today']         = 'Вы можете голосовать раз в 24 часа';
$lang['clients_article_voted_thanks_for_feedback'] = 'Спасибо за ваш отзыв!';

# Tickets
$lang['clients_ticket_open_subject']                = 'Открыть тикет';
$lang['clients_ticket_open_departments']            = 'Отдел';
$lang['clients_tickets_heading']                    = 'Поддержка тикетов';
$lang['clients_ticket_open_service']                = 'Услуга';
$lang['clients_ticket_open_priority']               = 'Приоритет';
$lang['clients_latest_tickets']                     = 'Последние тикеты';
$lang['clients_ticket_open_body']                   = 'Сообщение';
$lang['clients_ticket_attachments']                 = 'Вложения';
$lang['clients_ticket_posted']                      = 'Добавил(а): %s';
$lang['clients_single_ticket_string']               = 'Тикет';
$lang['clients_single_ticket_replied']              = 'Ответил(а): %s';
$lang['clients_single_ticket_information_heading'] = 'Информация';

$lang['clients_tickets_dt_number']     = 'Тикет #';
$lang['clients_tickets_dt_subject']    = 'Тема';
$lang['clients_tickets_dt_department'] = 'Отдел';
$lang['clients_tickets_dt_service']    = 'Услуга';
$lang['clients_tickets_dt_status']     = 'Статус';
$lang['clients_tickets_dt_last_reply'] = 'Последний ответ';

$lang['clients_ticket_single_department']        = 'Отдел: %s';
$lang['clients_ticket_single_submitted']          = 'Отправ.: %s';
$lang['clients_ticket_single_status']            = 'Статус:';
$lang['clients_ticket_single_priority']          = 'Приоритет: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Ответить';
$lang['clients_ticket_single_add_reply_heading'] = 'Ответить на тикет';

# Login
$lang['clients_login_heading_no_register'] = 'Авторизация';
$lang['clients_login_heading_register']    = 'Пожалуйста, войдите или зарегистрируйтесь';
$lang['clients_login_email']               = 'Электронная почта';
$lang['clients_login_password']            = 'Пароль';
$lang['clients_login_remember']            = 'Запомнить меня';
$lang['clients_login_login_string']        = 'Войти';

# Register
$lang['clients_register_string']  = 'Регистрация';
$lang['clients_register_heading'] = 'Регистрация';

# Navigation
$lang['clients_nav_login']     = 'Войти';
$lang['clients_nav_register']  = 'Регистрация';
$lang['clients_nav_invoices']  = 'Счета на оплату';
$lang['clients_nav_contracts'] = 'Договоры';
$lang['clients_nav_kb']        = 'База знаний';
$lang['clients_nav_profile']   = 'Профиль';
$lang['clients_nav_logout']    = 'Выйти';

# Datatables
$lang['clients_dt_paginate_first']    = 'В начало';
$lang['clients_dt_paginate_last']     = 'В конец';
$lang['clients_dt_paginate_next']     = 'Далее';
$lang['clients_dt_paginate_previous'] = 'Назад';
$lang['clients_dt_empty_table']       = 'Ничего не нашли';
$lang['clients_dt_search']            = 'Поиск:';
$lang['clients_dt_zero_records']      = 'Нет подходящих записей';
$lang['clients_dt_loading_records']   = 'Загружаем...';
$lang['clients_dt_length_menu']       = 'Показать _MENU_ записей';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Показано 0 до 0 из 0 ';
$lang['clients_dt_info']              = 'Показано _START_ до _END_ из _TOTAL_ ';
$lang['clients_dt_empty_table']       = 'Ничего не нашли';
$lang['clients_dt_sort_ascending']    = 'Сортировать по возрастанию';
$lang['clients_dt_sort_descending']   = 'Сортировать по убыванию';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Квитанция об оплате';
$lang['payment_for_string']                            = 'Оплата';
$lang['payment_date']                                  = 'Дата оплаты:';
$lang['payment_view_mode']                             = 'Способ оплаты:';
$lang['payment_total_amount']                          = 'Общая сумма';
$lang['payment_table_invoice_number']                  = 'Номер счета';
$lang['payment_table_invoice_date']                    = 'Дата счета';
$lang['payment_table_invoice_amount_total']            = 'Сумма счета';
$lang['payment_table_payment_amount_total']            = 'Сумма платежа';
$lang['payments_table_transaction_id']                 = 'Транзакция ID: %s';
$lang['payment_getaway_token_not_found']               = 'Не найдено';
$lang['online_payment_recorded_success']               = 'Оплата зарегистрирована';
$lang['online_payment_recorded_success_fail_database'] = 'Оплата прошла успешно, но не удалось вставить платеж в базу данных, обратитесь к администратору';

# Leads
$lang['lead_convert_to_client']                   = 'Конвертировать в клиента';
$lang['lead_convert_to_email']                    = 'Эл. почта';
$lang['lead_convert_to_client_firstname']         = 'Имя';
$lang['lead_convert_to_client_lastname']          = 'Фамилия';
$lang['lead_email_already_exists']                = 'Эл. почта уже существует в базе';
$lang['lead_to_client_base_converted_success']    = 'Контакт успешно преобразован в клиентаy';
$lang['lead_have_client_profile']                 = 'У этого контакта есть профиль клиента.';
$lang['lead_converted_edit_client_profile']       = 'Изменить профиль';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Посмотреть счет как клиент';
$lang['invoice_add_edit_recurring']                                           = 'Повторить счет?';
$lang['invoice_add_edit_recurring_no']                                        = 'Нет';
$lang['invoice_add_edit_recurring_month']                                     = 'Каждый %s месяц';
$lang['invoice_add_edit_recurring_months']                                    = 'каждые %s месяцев';
$lang['invoices_list_all']                                                    = 'Все';
$lang['invoices_list_not_have_payment']                                       = 'Счет без оплаты';
$lang['invoices_list_recurring']                                               = 'Повторяющийся счет';
$lang['invoices_list_made_payment_by']                                        = 'Произведена оплата по %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Создать новую накладную с текущими счетом, только если счет со статусом оплачен?';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Если в этом поле установлено значение да и повторяющиеся счета не со статусом оплачен, новый счет не будет создан.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Автоматическая отправка обновленного счета заказчику';
$lang['view_invoice_pdf_link_pay']                                            = 'Оплатить счет';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Банковские счета / Описание';
$lang['payment_mode_add_edit_description_tooltip'] = 'Здесь можно указать банковские реквизиты. Будет отображаться на HTML-счетах';
$lang['payment_modes_dt_description']              = 'Банковские счета / Описание';
$lang['payment_modes_add_edit_announcement']       = 'Примечание: режимы оплаты, перечисленные ниже, являются офлайн режимах. Режимы онлайн-оплаты можно настроить в Настройки -> настройки -> платежные системы';
$lang['payment_mode_add_edit_active']              = 'Активно';
$lang['payment_modes_dt_active']                   = 'Активно';

# Contracts
$lang['contract_not_found'] = 'Договор не найден. Может быть удален, проверьте журнал операций';

# Settings
$lang['setting_bar_heading']                 = 'Настройка';
$lang['settings_group_online_payment_modes'] = 'Системы оплаты';
$lang['settings_paymentmethod_mode_label']   = 'Название';
$lang['settings_paymentmethod_active']       = 'Активность';
$lang['settings_paymentmethod_currencies']   = 'Валюты (разделенные запятыми)';
$lang['settings_paymentmethod_testing_mode'] = 'Включить режим тестирования';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

# Quick Actions
$lang['qa_create_invoice']  = 'Добавить счет на оплату';
$lang['qa_create_task']     = 'Добавить задачу';
$lang['qa_create_client']   = 'Добавить клиента';
$lang['qa_create_contract'] = 'Добавить договор';
$lang['qa_create_kba']      = 'Добавить запись в БЗ';
$lang['qa_create_survey']   = 'Добавить опрос';
$lang['qa_create_ticket']   = 'Открыть тикет';
$lang['qa_create_staff']    = 'Добавить сотрудника';

## Clients
$lang['client_phonenumber'] = 'Телефон';

# Main Clients
$lang['clients_register']                          = 'Регистрация';
$lang['clients_profile_updated']                   = 'Ваш профиль был обновлен';
$lang['clients_successfully_registered']           = 'Спасибо за регистрацию';
$lang['clients_account_created_but_not_logged_in'] = 'Ваш аккаунт был создан. Пожалуйста, попробуйте войти';
# Tickets
$lang['clients_tickets_heading']                   = 'Тикеты поддержки';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Оплата счета';
$lang['payment_total']       = 'Итого: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Онлайн оплата';
$lang['invoice_html_online_payment_button_text'] = 'Оплатить сейчас';
$lang['invoice_html_payment_modes_not_selected'] = 'Пожалуйста, выберите способ оплаты';
$lang['invoice_html_amount_blank']               = 'Поле общей суммы не может быть пустым или нулевым';
$lang['invoice_html_offline_payment']            = 'Оффлайн оплаты';
$lang['invoice_html_amount']                     = 'Сумма';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Видимость';
$lang['dt_button_reload']             = 'Обновить';
$lang['dt_button_excel']              = 'Эксель';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Печать';
$lang['is_not_active_export']         = 'Нет';
$lang['is_active_export']             = 'Да';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Дополнительные опции';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Разрешенные способы оплаты этого счета';
$lang['invoice_add_edit_recurring_invoices_from_invoice'] = 'Создать счет из повторяющегося счета';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Способы оплаты не найдены.';
$lang['invoice_html_total_pay']                          = 'Итого: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Название шаблона';
# General
$lang['discount_type']                      = 'Тип скидки';
$lang['discount_type_after_tax']            = 'После';
$lang['discount_type_before_tax']           = 'До налога';
$lang['terms_and_conditions']               = 'Условия';
$lang['reference_no']                       = 'Reference #';
$lang['no_discount']                        = 'Нет скидки';
$lang['view_stats_tooltip']                 = 'Краткая статистика';
# Clients
$lang['zip_from_date']                      = 'Дата:';
$lang['zip_to_date']                        = 'До сегодняшнего дня:';
$lang['client_zip_payments']                = 'ZIP Payments';
$lang['client_zip_invoices']                = 'ZIP Invoices';
$lang['client_zip_estimates']               = 'ZIP Estimates';
$lang['client_zip_status']                  = 'Статус';
$lang['client_zip_status_all']              = 'Все';
$lang['client_zip_payment_modes']           = 'Оплата от';
$lang['client_zip_no_data_found']           = 'Ничего не нашли';

# Payments
$lang['payment_mode']         = 'Способ оплаты';
$lang['payment_view_heading'] = 'Оплата';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Разрешить клиенту изменить сумму оплаты (для онлайн платежей)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Сколько писем, отправляемых в час';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Этот параметр используется при отправке опросов. Опрос крон будет отправлена х писем в час. Некоторые хостинг-провайдеры имеют ограничение на отправку писем в час.';
$lang['settings_delete_only_on_last_invoice']                       = 'Delete invoice allowed only on last invoice';
$lang['settings_sales_estimate_prefix']                             = 'Префикс сметы';
$lang['settings_sales_next_estimate_number']                        = 'Следующий номер сметы';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Установите в этом поле значение 1, Если вы хотите начать с начала';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrement estimate number on delete';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Do you want to decrement the estimate number when the last estimate is deleted? eq. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented.';
$lang['settings_sales_estimate_number_format']                      = 'Формат нумерации смет';
$lang['settings_sales_estimate_number_format_year_based']           = 'Год';
$lang['settings_sales_estimate_number_format_number_based']         = 'Номер (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Удаление сметы разрешено только в последнем счете на оплату';
$lang['settings_cron_invoice_heading']                              = 'Счет на оплату';
$lang['settings_send_test_email_heading']                           = 'Отправить тестовый Email';
$lang['settings_send_test_email_subheading']                        = 'Отправить тестовое сообщение, чтобы убедиться, что ваши настройки SMTP настроены правильно.';
$lang['settings_send_test_email_string']                            = 'Эл. почта';
$lang['settings_smtp_settings_heading']                             = 'SMTP настройки';
$lang['settings_smtp_settings_subheading']                          = 'Основные настройки Email';

$lang['settings_sales_heading_general']                             = 'Основные';
$lang['settings_sales_heading_invoice']                             = 'Счет на оплату';
$lang['settings_sales_heading_estimates']                           = 'Сметы';
$lang['settings_sales_heading_company']                             = 'Компания';
$lang['settings_sales_cron_invoice_heading']                        = 'Счет на оплату';

# Tasks
$lang['tasks_dt_datestart'] = 'Дата начала';
$lang['tasks_dt_priority']  = 'Приоритет';

# Invoice General
$lang['invoice_discount'] = 'Скидка';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Панель админ. (Справа на лево)';
$lang['settings_rtl_support_client']                                  = 'RTL Панель клиентов (Справа на лево)';
$lang['acs_language_editor']                                          = 'Редактор языков';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Автоматически преобразовать смету в счет на оплату, после того, как клиент утвердит ее.';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Исключить сметы со статусом "черновик" от клиентов';

# Months
$lang['January']   = 'Январь';
$lang['February']  = 'Февраль';
$lang['March']     = 'Март';
$lang['April']     = 'Апрель';
$lang['May']       = 'Май';
$lang['June']      = 'Июнь';
$lang['July']      = 'Июль';
$lang['August']    = 'Август';
$lang['September'] = 'Сентябрь';
$lang['October']   = 'Октябрь';
$lang['November']  = 'Ноябрь';
$lang['December']  = 'Декабрь';

# Time ago function translate
$lang['time_ago_just_now']  = 'только что';
$lang['time_ago_minute']    = 'минуту назад';
$lang['time_ago_minutes']   = '%s минут назад';
$lang['time_ago_hour']      = 'час назад';
$lang['time_ago_hours']     = '%s часов назад';
$lang['time_ago_yesterday'] = 'вчера';
$lang['time_ago_days']      = '%s дней назад';
$lang['time_ago_week']      = 'неделю назад';
$lang['time_ago_weeks']     = '%s недели назад';
$lang['time_ago_month']     = 'месяц назад';
$lang['time_ago_months']    = '%s месяцев назад';
$lang['time_ago_year']      = 'год назад';
$lang['time_ago_years']     = '%s лет назад';


# Estimates
$lang['estimates']                          = 'Сметы';
$lang['estimate']                           = 'Смета';
$lang['estimate_lowercase']                 = 'Смета';
$lang['create_new_estimate']                = 'Добавить смету';
$lang['view_estimate']                      = 'Посмотреть смету';
$lang['estimate_sent_to_client_success']    = 'Смета отправлена клиенту';
$lang['estimate_sent_to_client_fail']       = 'Проблемы при отправке сметы';
$lang['estimate_reminder_send_problem']     = 'Проблема при отправке напоминания';
$lang['estimate_details']                   = 'Детали сметы';
$lang['estimate_view']                      = 'Посмотреть смету';
$lang['estimate_select_customer']           = 'Клиент';
$lang['estimate_add_edit_number']           = 'Номер сметы';
$lang['estimate_add_edit_date']             = 'Дата сметы';
$lang['estimate_add_edit_expirydate']       = 'Срок действия';
$lang['estimate_add_edit_currency']         = 'Валюта';
$lang['estimate_add_edit_client_note']      = 'Примечание клиента';
$lang['estimate_add_edit_admin_note']       = 'Примечание администратора';
$lang['estimate_add_edit_new_item']         = 'Новая позиция';
$lang['estimate_add_edit_search_item']      = 'Поиск';
$lang['estimates_toggle_table_tooltip']     = 'Таблица';
$lang['estimate_add_edit_advanced_options'] = 'Дополнительные опции';
$lang['estimate_vat']                       = 'НДС';
$lang['estimate_to']                        = 'To';
$lang['estimates_list_all']                 = 'Все';

$lang['estimate_invoiced_date']                  = 'Смета выставлена на %s';
$lang['edit_estimate_tooltip']                   = 'Изменить смету';
$lang['delete_estimate_tooltip']                 = 'Удалить смету';
$lang['estimate_sent_to_email_tooltip']          = 'Отправить письмо на почту';
$lang['estimate_already_send_to_client_tooltip'] = 'Эта смета уже отправлена клиенту %s';
$lang['send_overdue_notice_tooltip']             = 'Отправить уведомление о просрочке';
$lang['estimate_view_activity_tooltip']          = 'Журнал операций';

$lang['estimate_send_to_client_modal_heading']    = 'Отправить смету клиенту';
$lang['estimate_send_to_client_attach_pdf']       = 'Приложить смету в формате PDF';
$lang['estimate_send_to_client_preview_template'] = 'Предварительный просмотр сообщения';

$lang['estimate_dt_table_heading_number']     = 'Смета #';
$lang['estimate_dt_table_heading_date']       = 'Дата';
$lang['estimate_dt_table_heading_client']     = 'Клиент';
$lang['estimate_dt_table_heading_expirydate'] = 'Действует до';
$lang['estimate_dt_table_heading_amount']     = 'Сумма';
$lang['estimate_dt_table_heading_status']     = 'Статус';

$lang['estimate_email_link_text']    = 'Посмотреть смету';
$lang['estimate_convert_to_invoice'] = 'Преобразовать в счет на оплату';
# Home
$lang['home_unfinished_tasks']       = 'Незавершенные задачи';

# Clients
$lang['client_estimates_tab'] = 'Сметы';
$lang['client_payments_tab']  = 'Платежи';


# Estimate General
$lang['estimate_pdf_heading']            = 'СМЕТА';
$lang['estimate_table_item_heading']     = 'Позиция';
$lang['estimate_table_quantity_heading'] = 'Кол-во';
$lang['estimate_table_rate_heading']     = 'Стоимость';
$lang['estimate_table_tax_heading']      = 'Налог';
$lang['estimate_table_amount_heading']   = 'Сумма';
$lang['estimate_subtotal']               = 'Подытог';
$lang['estimate_adjustment']             = 'Корректировка';
$lang['estimate_discount']               = 'Скидка';
$lang['estimate_total']                  = 'Итого';
$lang['estimate_to']                     = 'Для';
$lang['estimate_data_date']              = 'Дата сметы';
$lang['estimate_data_expiry_date']       = 'Действует до';
$lang['estimate_note']                   = 'Примечание:';
$lang['estimate_status_draft']           = 'Черновик';
$lang['estimate_status_sent']            = 'Отправить';
$lang['estimate_status_declined']        = 'Отклонено';
$lang['estimate_status_accepted']        = 'Принято';
$lang['estimate_status_expired']         = 'Просрочено';
$lang['estimate_note']                   = 'Примечание:';

# Quick create
$lang['qa_create_estimate'] = 'Добавить смету';
$lang['qa_create_lead']     = 'Добавить лид';


## Clients
$lang['clients_estimate_dt_number']             = 'Смета #';
$lang['clients_estimate_dt_date']               = 'Дата';
$lang['clients_estimate_dt_duedate']            = 'Действует до';
$lang['clients_estimate_dt_amount']             = 'Сумма';
$lang['clients_estimate_dt_status']             = 'Статус';
$lang['clients_nav_estimates']                  = 'Сметы';
$lang['clients_decline_estimate']               = 'Отклонить';
$lang['clients_accept_estimate']                = 'Принять';
$lang['clients_my_estimates']                   = 'Сметы';
$lang['clients_estimate_invoiced_successfully']  = 'Спасибо, что приняли смету. Пожалуйста, ознакомьтесь с созданным счетом';
$lang['clients_estimate_accepted_not_invoiced'] = 'Спасибо, что приняли смету';
$lang['clients_estimate_declined']              = 'Смета отклонена. Вы можете принять смету до окончания срока действия';
$lang['clients_estimate_failed_action']         = 'Не удалось принять решение по этой смете';
$lang['client_add_edit_profile']                = 'Профиль';

# Custom Fields
$lang['custom_field']                          = 'Custom field';
$lang['custom_field_lowercase']                = 'custom field';
$lang['custom_fields']                         = 'Custom Fields';
$lang['custom_fields_lowercase']               = 'custom fields';
$lang['new_custom_field']                      = 'New Custom Field';
$lang['custom_field_name']                     = 'Field Name';
$lang['custom_field_add_edit_type']            = 'Type';
$lang['custom_field_add_edit_belongs_top']     = 'Field Belongs to';
$lang['custom_field_add_edit_options']         = 'Options';
$lang['custom_field_add_edit_options_tooltip'] = 'Only use for Select, Checkbox types. Populate the field by separating the options by coma. eq. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Order';

$lang['custom_field_dt_field_to']       = 'Belongs to';
$lang['custom_field_dt_field_name']     = 'Name';
$lang['custom_field_dt_field_type']     = 'Type';
$lang['custom_field_add_edit_active']   = 'Active';
$lang['custom_field_add_edit_disabled'] = 'Disabled';

# Ticket replies
$lang['ticket_reply']           = 'Ответ на тикет';
$lang['ticket_reply_lowercase'] = 'Ответ на тикет';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Custom Fields';

# Contracts
$lang['contract_types']          = 'Типы договоров';
$lang['contract_type']           = 'Тип договора';
$lang['new_contract_type']       = 'Новый тип договора';
$lang['contract_type_lowercase'] = 'договор';
$lang['contract_type_name']      = 'Название';

$lang['contract_types_list_name'] = 'Тип договора';

# Customizer Menu
$lang['acs_contracts']      = 'Договоры';
$lang['acs_contract_types'] = 'Тип договора';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Полное описание';
# Customers
$lang['client_delete_invoices_warning']    = 'Вы не можете удалить этого клиента, т.к. у него есть открытые счета или сметы.';
$lang['clients_list_phone']                = 'Телефон';
$lang['client_expenses_tab']               = 'Расходы';
$lang['customers_summary']                 = 'Клиенты';
$lang['customers_summary_active']          = 'Активные контакты';
$lang['customers_summary_inactive']        = 'Неактивные контакты';
$lang['customers_summary_logged_in_today'] = 'Контакты, заходившие сегодня';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Электронная почта';
$lang['admin_auth_forgot_password_heading']           = 'Забыли пароль';
$lang['admin_auth_login_heading']                     = 'Авторизация';
$lang['admin_auth_login_email']                       = 'Электронная почта';
$lang['admin_auth_login_password']                    = 'Пароль';
$lang['admin_auth_login_remember_me']                 = 'Запомнить меня';
$lang['admin_auth_login_button']                      = 'Войти';
$lang['admin_auth_login_fp']                          = 'Забыли пароль?';
$lang['admin_auth_reset_password_heading']            = 'Сброс пароля';
$lang['admin_auth_reset_password']                    = 'Пароль';
$lang['admin_auth_reset_password_repeat']             = 'Повторите пароль';
$lang['admin_auth_invalid_email_or_password']         = 'Неверный адрес электронной почты или пароль';
$lang['admin_auth_inactive_account']                  = 'Профиль не активен';
# Calender
$lang['calendar_estimate']                            = 'Смета';
$lang['calendar_invoice']                             = 'Счет на оплату';
$lang['calendar_contract']                            = 'Договор';
$lang['calendar_customer_reminder']                     = 'Напоминание Клиенту';
$lang['calendar_event']                               = 'Событие';
$lang['calendar_task']                                = 'Задача';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Удалить лид';
$lang['lead_attachments']                             = 'Вложения';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Финансы';
# Settings

$lang['settings_show_sale_agent_on_invoices']         = 'Показать менеджера в счете на оплату';
$lang['settings_show_sale_agent_on_estimates']        = 'показать менеджера в смете';
$lang['settings_predefined_predefined_term']          = 'Стандартные условия';
$lang['settings_predefined_clientnote']               = 'Стандартное примечание клиента';
$lang['settings_custom_pdf_logo_image_url']           = 'Пользовательский логотип компании в PDF URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Вероятно, у вас будут проблемы с PNG картинки с прозрачностью, которые обрабатываются по-разному в зависимости от версии PHP-imagick или PHP-GD с используемой версией. Попробуйте обновить версии PHP-imagick и отключить PHP-ГД
. Если вы оставите это поле пустым будет использоваться загруженный логотип.';

# General
$lang['sale_agent_string']               = 'Ведущий менеджер';
$lang['amount_display_in_base_currency'] = 'Сумма показана в Вашей основной валюте - используется только в этом отчете, если Вы используете 1 валюту для платежей и расходов.';
# Leads
$lang['leads_summary']                                         = 'Все лиды';

# Contracts
$lang['contract_value']                 = 'Сумма договора';
$lang['contract_trash']                 = 'Корзина';
$lang['contracts_view_trash']           = 'Посмотреть корзину';
$lang['contracts_view_all']             = 'Все';
$lang['contracts_view_exclude_trashed'] = 'Исключать договоры в корзине';
$lang['contract_value_tooltip']         = 'Будет использоваться базовая валюта.';
$lang['contract_trash_tooltip']         = 'Если вы добавите договор в корзину, он не будут показан на клиентской стороне, не будет включен в графики и другие характеристики, а также по умолчанию не будет отображаться, когда вы будете просматривать все договоры.';
$lang['contract_summary_active']              = 'Активность';
$lang['contract_renew_heading']               = 'Продлить договор';
$lang['contract_summary_heading']             = 'Все договоры';
$lang['contract_summary_expired']             = 'Истек срок действия';
$lang['contract_summary_about_to_expire']     = 'Истекает срок действия';
$lang['contract_summary_recently_added']      = 'Недавно добавленные';
$lang['contract_summary_trash']               = 'Корзина';
$lang['contract_summary_by_type']             = 'Договоры по типу';
$lang['contract_summary_by_type_value']       = 'Сумма договоров по типу';
$lang['contract_renewed_successfully']         = 'Договор обновлен';
$lang['contract_renewed_fail']                = 'Проблема с обновлением договора. Обратитесь к администратору';
$lang['no_contract_renewals_found']           = 'Договор для продления не найден';
$lang['no_contract_renewals_history_heading'] = 'История продления договора';
$lang['contract_renewed_by']                  = '%s продлил(а) договор';
$lang['contract_renewal_deleted']             = 'Продление удалено';
$lang['contract_renewal_delete_fail']         = 'Не удалось удалить продление. Обратитесь к администратору';

$lang['contract_renewal_new_value'] = 'Новая сумма договора: %s';
$lang['contract_renewal_old_value'] = 'Старая сумма договора: %s';

$lang['contract_renewal_new_start_date'] = 'Новая дата начала: %s';
$lang['contract_renewal_old_start_date'] = 'Старая дата начала договора: %s';

$lang['contract_renewal_new_end_date'] = 'Новая дата окончания: %s';
$lang['contract_renewal_old_end_date'] = 'Старая дата окончания: %s';
$lang['contract_attachment']           = 'Вложение';
$lang['contract_attachment_lowercase'] = 'вложение';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Отслеживание целей';
$lang['als_expenses']           = 'Расходы';
$lang['als_reports_expenses']   = 'Расходы';
$lang['als_expenses_vs_income'] = 'Расходы vs Доходы';

# Invoices
$lang['invoice_attach_file']           = 'Прикрепить файл';
$lang['invoice_mark_as_sent']          = 'Отметить как отправлено';
$lang['invoice_marked_as_sent']        = 'Счет на оплату отмечен как "отправлено"';
$lang['invoice_marked_as_sent_failed'] = 'Не удалось отметить счет';

# Quick Actions
$lang['qa_new_goal']    = 'Новая цель';
$lang['qa_new_expense'] = 'Добавить расходы';

# Goals Tracking
$lang['goals']                                         = 'Цели';
$lang['goal']                                          = 'Цель';
$lang['goals_tracking']                                = 'Отслеживание целей';
$lang['new_goal']                                      = 'Новая цель';
$lang['goal_lowercase']                                = 'цель';
$lang['goal_start_date']                               = 'Дата начала';
$lang['goal_end_date']                                 = 'Дата окончания';
$lang['goal_subject']                                  = 'Тема';
$lang['goal_description']                              = 'Описание';
$lang['goal_type']                                     = 'Тип цели';
$lang['goal_achievement']                              = 'Достижение';
$lang['goal_contract_type']                            = 'Тип договора';
$lang['goal_notify_when_fail']                         = 'Сообщить сотрудникам, если цель не удалось достичь';
$lang['goal_notify_when_achieve']                      = 'Сообщить сотрудникам, если цель достигнута';
$lang['goal_progress']                                 = 'Прогресс';
$lang['goal_total']                                    = 'Итого: %s';
$lang['goal_result_heading']                           = 'Прогресс цели';
$lang['goal_income_shown_in_base_currency']            = 'Общая сумма дохода отображается в базовой валюте';
$lang['goal_notify_when_end_date_arrives']             = 'Сотрудники будут уведомлены, в дату окончания (Requires CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'Сотрудники уведомлены об успехе';
$lang['goal_staff_members_notified_about_failure']     = 'Сотрудники уведомлены о неудаче';
$lang['goal_notify_staff_manually']                     = 'Уведомить сотрудников вручную';
$lang['goal_notify_staff_notified_manually_success']    = 'Сотрудники уведомлены о результате цели';
$lang['goal_notify_staff_notified_manually_fail']       = 'Не удалось уведомить сотрудников об этом результате';

$lang['goal_achieved'] = 'Выполнено';
$lang['goal_failed']   = 'Не выполнено';
$lang['goal_close']    = 'Близко к цели';

$lang['goal_type_total_income']                                         = 'Достигните совокупного дохода';
$lang['goal_type_convert_leads']                                        = 'Конвертировать X Лидов';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Увеличить кол-во клиентов';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Не включая конвертирование лидов';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Увеличить кол-во клиентов';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Включая конвертирование лидов';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Is calculated from the date added to database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Is calculated from the contract start date';
$lang['goal_type_total_estimates_converted']                         = 'X Estimates Conversion ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Will be taken only estimates that will be converted to invoices';
$lang['goal_type_income_subtext']                                    = 'Income will be calculated in your base currency (not converted)';
# Payments
$lang['payment_transaction_id']                                      = 'Транзакция ID';
# Settings Menu
$lang['acs_expenses']                                                = 'Расходы';
$lang['acs_expense_categories']                                      = 'Категории расходов';
# Expeneses
$lang['expense_category']                                            = 'Категория расхода';
$lang['expense_category_lowercase']                                  = 'категория расхода';
$lang['new_expense']                                                 = 'Добавить расходы';
$lang['expense_add_edit_name']                                       = 'Название категории';
$lang['expense_add_edit_description']                                = 'Описание категории';
$lang['expense_categories']                                          = 'Категории расходов';
$lang['new_expense_category']                                        = 'Новая категория';
$lang['dt_expense_description']                                      = 'Описание';
$lang['expense']                                                     = 'Расход';
$lang['expenses']                                                    = 'Расходы';
$lang['expense_lowercase']                                           = 'расходы';
$lang['expense_add_edit_tax']                                        = 'Налог';
$lang['expense_add_edit_customer']                                   = 'Клиент';
$lang['expense_add_edit_currency']                                   = 'Валюта';
$lang['expense_add_edit_note']                                       = 'Примечание';
$lang['expense_add_edit_date']                                       = 'Дата расхода';
$lang['expense_add_edit_amount']                                     = 'Сумма';
$lang['expense_add_edit_billable']                                   = 'Оплачен';
$lang['expense_add_edit_attach_receipt']                             = 'Прикрепить квитанцию';
$lang['expense_add_edit_reference_no']                               = 'Reference #';
$lang['expense_receipt']                                             = 'Квитанция расхода';
$lang['expense_receipt_lowercase']                                   = 'квитанция расхода';
$lang['expense_dt_table_heading_category']                           = 'Категория';
$lang['expense_dt_table_heading_amount']                             = 'Сумма';
$lang['expense_dt_table_heading_date']                               = 'Дата';
$lang['expense_dt_table_heading_reference_no']                       = 'Reference #';
$lang['expense_dt_table_heading_customer']                           = 'Клиент';
$lang['expense_dt_table_heading_payment_mode']                       = 'Способ оплаты';
$lang['expense_converted_to_invoice']                                = 'Расход преобразован в счет на оплату';
$lang['expense_converted_to_invoice_fail']                           = 'Не удалось конвертировать этот счет, проверьте журнал ошибок.';
$lang['expense_copy_success']                                        = 'Расход копирован.';
$lang['expense_copy_fail']                                           = 'Не удалось скопировать расход. Пожалуйста, проверьте обязательные поля и попробуйте снова';
$lang['expenses_list_all']                                           = 'Все';
$lang['expenses_list_billable']                                      = 'Оплачен';
$lang['expenses_list_non_billable']                                  = 'Не оплачен';
$lang['expenses_list_invoiced']                                      = 'Выставлен';
$lang['expenses_list_unbilled']                                      = 'Не выставлен';
$lang['expenses_list_recurring']                                     = 'Повторяющийся';
$lang['expense_invoice_delete_not_allowed']                          = 'Вы не можете удалить этот расход. Уже выставлен счет.';
$lang['expense_convert_to_invoice']                                  = 'Преобразовать в счет на оплату';
$lang['expense_edit']                                                = 'Изменить расход';
$lang['expense_delete']                                              = 'Удалить';
$lang['expense_copy']                                                = 'Копировать';
$lang['expense_invoice_not_created']                                 = 'Счет на оплату не создан';
$lang['expense_billed']                                              = 'Оплачен';
$lang['expense_not_billed']                                          = 'Счет не оплачен';
$lang['expense_customer']                                            = 'Клиент';
$lang['expense_note']                                                = 'Примечание:';
$lang['expense_date']                                                = 'Дата:';
$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Налог:';
$lang['expense_amount']                                              = 'Сумма:';
$lang['expense_recurring_indicator']                                 = 'Повторяющийся';
$lang['expense_already_invoiced']                                    = 'Этот расход уже выставлен на оплату';
$lang['expense_recurring_auto_create_invoice']                       = 'Авто создание счета на оплату';
$lang['expense_recurring_send_custom_on_renew']                      = 'Отправить по эл. почте счет на оплату, если он повторяется ';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'If this option is checked the invoice for the customer will be auto created when the expense will be renewed.';
$lang['report_expenses_full']                                        = 'Полный отчет';
$lang['expenses_yearly_by_categories']                               = 'Расходы за год по категориям';
$lang['total_expenses_for']                                          = 'Всего расходов на'; // year
$lang['expenses_report_for']                                         = 'Расходы на'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Обязательное';
$lang['custom_field_show_on_pdf']                                    = 'Показать в PDF';
$lang['custom_field_leads']                                          = 'Лиды';
$lang['custom_field_customers']                                      = 'Клиенты';
$lang['custom_field_staff']                                          = 'Сотрудники';
$lang['custom_field_contracts']                                      = 'Договоры';
$lang['custom_field_tasks']                                          = 'Задачи';
$lang['custom_field_expenses']                                       = 'Расходы';
$lang['custom_field_invoice']                                        = 'Счет на оплату';
$lang['custom_field_estimate']                                       = 'Смета';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Примечание (невидимое для клиентов)';


# Business News
$lang['business_news'] = 'Новости';

# Navigation
$lang['nav_todo_items']               = 'Личные задания';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Тип договора';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Без налога';
$lang['numbers_not_formatted_while_editing'] = 'The rate in the input field is not formatted while edit/add item and should remain not formated do not try to format it manually in here.';
# Contracts
$lang['contracts_view_expired']             = 'Истек срок действия';
$lang['contracts_view_without_dateend']     = 'Договор без ограничения по времени';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Договоры';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Общие настройки';
$lang['invoice_table_item_description']          = 'Описание';
$lang['invoice_recurring_indicator']             = 'Повторяющийся';

# Estimates
$lang['estimate_convert_to_invoice_successfully'] = 'Смета преобразована в счет на оплату';
$lang['estimate_table_item_description']         = 'Описание';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'You cant delete the base currency. You need to assign new base currency the delete this.';
$lang['invoice_copy']              = 'Копировать счет';
$lang['invoice_copy_success']      = 'Счет на оплату копирован';
$lang['invoice_copy_fail']         = 'Failed to copy invoice';
$lang['invoice_due_after_help']    = 'Set zero to avoid calculation';

$lang['show_shipping_on_invoice'] = 'Показать детали доставки в счете';

# Estimates
$lang['show_shipping_on_estimate']         = 'Показать детали доставки в смете';
$lang['is_invoiced_estimate_delete_error'] = 'Смета выставлена в счет на оплату. Вы не можете ее удалить.';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Детали доставки';
$lang['customer_profile_details'] = 'Сведения о клиенте';
$lang['billing_shipping']         = 'Оплата и доставка';
$lang['billing_address']          = 'Адрес оплаты';
$lang['shipping_address']         = 'Адрес доставки';

$lang['billing_street']  = 'Улица';
$lang['billing_city']    = 'Город';
$lang['billing_state']   = 'Район';
$lang['billing_zip']     = 'Почтовый индекс';
$lang['billing_country'] = 'Страна';

$lang['shipping_street']                    = 'Улица';
$lang['shipping_city']                      = 'Город';
$lang['shipping_state']                     = 'Район';
$lang['shipping_zip']                       = 'Почтовый индекс';
$lang['shipping_country']                   = 'Страна';
$lang['get_shipping_from_customer_profile'] = 'Узнать подробности доставки из профиля клиента';

# Customer
$lang['customer_file_from']                                    = 'Показано из %s';
$lang['customer_default_currency']                             = 'Валюта по умолчанию';
$lang['customer_no_attachments_found']                         = 'Нет вложений';
$lang['customer_update_address_info_on_invoices']              = 'Обновить информацию об оплате/доставке для предыдущих счетов на оплату';
$lang['customer_update_address_info_on_invoices_help']         = 'Если вы отметите это поле доставки и оплаты, информация будет обновлена для всех счетов и смет. Примечание: счета со статусом "оплачен" не будут затронуты.';
$lang['setup_google_api_key_customer_map']                     = 'Setup google api key in order to view to customer map';
$lang['customer_attachments_file']                             = 'Файл';
$lang['client_send_set_password_email']                        = 'Отправить пароль по эл. почте';
$lang['customer_billing_same_as_profile']                      = 'Та же информация о клиенте';
$lang['customer_billing_copy']                                 = 'Копировать адрес оплаты';
$lang['customer_map']                                          = 'Карта';
$lang['set_password_email_sent_to_client']                     = 'Email to set password is successfully sent to contact';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profile updated and email to set password is successfully sent to contact';
$lang['customer_attachments']                                  = 'Файлы';
$lang['customer_longitude']                                    = 'Долгота (Google карты)';
$lang['customer_latitude']                                     = 'Широта (Google карты)';

# Authentication
$lang['admin_auth_set_password']          = 'Пароль';
$lang['admin_auth_set_password_repeat']   = 'Повторите пароль';
$lang['admin_auth_set_password_heading']  = 'Set Password';
$lang['password_set_email_subject']       = 'Set new password on %s';
# General
$lang['apply']                            = 'Применить';
$lang['department_calendar_id']           = 'Google Calendar ID';
$lang['kan_ban_string']                   = 'Канбан';
$lang['localization_default_language']    = 'Default Language';
$lang['system_default_string']            = 'System Default';
$lang['advanced_options']                 = 'Дополнительные опции';
# Expenses
$lang['expense_list_invoice']             = 'Счет на оплату';
$lang['expense_list_billed']              = 'Оплачен';
$lang['expense_list_unbilled']            = 'Счет не выставлен';
# Leads
$lang['lead_merge_custom_field']          = 'Merge as custom field';
$lang['lead_merge_custom_field_existing'] = 'Merge with database field';
$lang['lead_dont_merge_custom_field']     = 'Do not merge';
$lang['no_lead_notes_found']              = 'No lead notes found';
$lang['leads_view_list']                  = 'Список';
$lang['lost_leads']                       = 'Новые лиды';
$lang['junk_leads']                       = 'Спам';
$lang['lead_mark_as_lost']                = 'Mark as lost';
$lang['lead_unmark_as_lost']              = 'Unmark Lead as lost';
$lang['lead_marked_as_lost']              = 'Lead marked as lost successfully';
$lang['lead_unmarked_as_lost']            = 'Lead unmarked as lost successfully';
$lang['leads_status_color']               = 'Color';

$lang['lead_mark_as_junk']     = 'Mark as junk';
$lang['lead_unmark_as_junk']   = 'Unmark Lead as junk';
$lang['lead_marked_as_junk']   = 'Lead marked as junk successfully';
$lang['lead_unmarked_as_junk'] = 'Lead unmarked as junk successfully';

$lang['lead_not_found']                                                      = 'Контакт не найден';
$lang['lead_lost']                                                           = 'Новые';
$lang['lead_junk']                                                           = 'Спам';
$lang['leads_not_assigned']                                                  = 'Not Assigned';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Скрыть для клиента';
$lang['contract_edit_overview']                                              = 'Обзор договора';
$lang['contract_attachments']                                                = 'Вложения';
# Tasks
$lang['task_view_make_public']                                               = 'Общая задача';
$lang['task_is_private']                                                     = 'Частная задача';
$lang['task_finished']                                                       = 'Завершено';
$lang['task_single_related']                                                 = 'Связь';
$lang['task_unmark_as_complete']                                             = 'Снять отметку о выполнении';
$lang['task_unmarked_as_complete']                                           = 'Задача не отмечена как выполнена';
$lang['task_relation']                                                       = 'Связь';
$lang['task_public']                                                         = 'Для всех';
$lang['task_public_help']                                                    = 'Если поставить отметку, то задача будет видна всем сотрудникам. В противном случае, она будет видна только тем, кто имеет отношение к данной задаче.';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'If this options is set to yes and eq. the system default language is English and client have setup language french the pdf documents will be outputted in the client language';
$lang['settings_cron_surveys']                                               = 'Surveys';
$lang['settings_default_tax']                                                = 'Default Tax';
$lang['setup_calendar_by_departments']                                       = 'Setup calendar by Departments';
$lang['settings_calendar']                                                   = 'Calendar';
$lang['settings_sales_invoice_due_after']                                    = 'Invoice due after (days)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'This is the main company calendar. All events from this calendar will be shown. If you want to specify a calendar based on departments you can add in the department Google Calendar ID.';

$lang['show_on_calendar']                  = 'Показать на календаре';
$lang['show_invoices_on_calendar']         = 'Счета на оплату';
$lang['show_estimates_on_calendar']        = 'Сметы';
$lang['show_contracts_on_calendar']        = 'Договоры';
$lang['show_tasks_on_calendar']            = 'Задачи';
$lang['show_customer_reminders_on_calendar'] = 'Напоминания клиенту';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copy custom fields to customer profile';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';
$lang['lead_profile']                                                = 'Профиль';
$lang['lead_is_client']                                              = 'Клиент';
$lang['leads_kan_ban_notes_title']                                   = 'Примечания';
$lang['leads_email_integration_folder_no_encryption']                = 'No Encryption';
$lang['leads_email_integration']                                     = 'Email интеграция';
$lang['leads_email_active']                                          = 'Active';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Эл. почта (Логин)';
$lang['leads_email_integration_password']                            = 'Пароль';
$lang['leads_email_integration_default_source']                      = 'Источник по умолчанию';
$lang['leads_email_integration_check_every']                         = 'Проверять каждые (минуты)';
$lang['leads_email_integration_default_assigned']                    = 'Responsible for new lead';
$lang['leads_email_encryption']                                      = 'Encryption';
$lang['leads_email_integration_updated']                             = 'Email Integration Updated';
$lang['leads_email_integration_default_status']                      = 'Default Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Only check non opened emails';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email to opened after check. This is used to prevent checking all the emails again and again. Its not recommended to uncheck this option if you have a lot emails and you have setup a lot forwarding to the email you setup for leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Connection is good';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connection is not OK';
$lang['lead_email_activity']                                         = 'Email Activity';
$lang['leads_email_integration_notify_roles']                        = 'Roles to Notify';
$lang['leads_email_integration_notify_staff']                        = 'Staff Members to Notify';
$lang['lead_public']                                                 = 'Public';
# Knowledge Base

$lang['kb_group_color']                = 'Color';
$lang['kb_group_order']                = 'Order';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Массовый экспорт в pdf';
$lang['bulk_export_pdf_payments']      = 'Платежи';
$lang['bulk_export_pdf_estimates']     = 'Сметы';
$lang['bulk_export_pdf_invoices']      = 'Счета на оплату';
$lang['bulk_pdf_export_button']        = 'Экспорт';
$lang['bulk_pdf_export_select_type']   = 'Выберите тип';
$lang['no_data_found_bulk_pdf_export'] = 'Нет данных для экспорта';
$lang['bulk_export_status_all']        = 'Все';
$lang['bulk_export_status']            = 'Статус';
$lang['bulk_export_zip_payment_modes'] = 'Платежи по';
$lang['bulk_export_include_tag']       = 'Включить Тег';
$lang['bulk_export_include_tag_help']  = 'eq. Original or Copy. The tag will be outputted in the PDF. Recommended to use only 1 tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Готовые ответы не найдены';
## Clients area
$lang['clients_contract_attachments']  = 'Вложения';
# Backup
$lang['backup_type_full']              = 'Full Backup';
$lang['backup_type_db']                = 'Database Backup';

$lang['auto_backup_options_updated']     = 'Auto backup options updated';
$lang['auto_backup_every']               = 'Create backup every X days';
$lang['auto_backup_enabled']             = 'Enabled (Requires Cron)';
$lang['auto_backup']                     = 'Auto backup';
$lang['backup_delete']                   = 'Backup Deleted';
$lang['create_backup']                   = 'Create Backup';
$lang['backup_success']                  = 'Backup is made successfully';
$lang['utility_backup']                  = 'Database Backup';
$lang['utility_create_new_backup_db']    = 'Create Database Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Backup size';
$lang['utility_backup_table_backupdate'] = 'Date';
$lang['utility_db_backup_note']          = 'Note: Due to the limited execution time and memory available to PHP, backing up very large databases may not be possible. If your database is very large you might need to backup directly from your SQL server via the command line, or have your server admin do it for you if you do not have root privileges.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Предложения';
$lang['clients_nav_support']   = 'Поддержка';
# General
$lang['more']                  = 'Еще';
$lang['add_item']              = 'Добавить позицию';
$lang['goto_admin_area']       = 'В панель управление';
$lang['click_here_to_edit']    = 'Нажмите здесь, чтобы изменить';
$lang['delete']                = 'Удалить %s';
$lang['welcome_top']           = 'Привет %s';

# Customers
$lang['customer_permissions']         = 'Разрешить доступ к';
$lang['customer_permission_invoice']  = 'Счета на оплату';
$lang['customer_permission_estimate'] = 'Сметы';
$lang['customer_permission_proposal'] = 'Предложения';
$lang['customer_permission_contract'] = 'Договоры';
$lang['customer_permission_support']  = 'Поддержка';


#Tasks
$lang['task_related_to'] = 'Задача связана с';

# Send file
$lang['custom_file_fail_send']    = 'Не удалось отправить файл';
$lang['custom_file_success_send'] = 'Файл успешно отправлен %s';
$lang['send_file_subject']        = 'Тема письма';
$lang['send_file_email']          = 'Эл. почта';
$lang['send_file_message']        = 'Сообщение';
$lang['send_file']                = 'Отправить файл';
$lang['add_checklist_item']       = 'Checklist Item';
$lang['task_checklist_items']     = 'Checklist Items';

# Import
$lang['default_pass_clients_import'] = 'Default password for all contacts';
$lang['simulate_import']             = 'Simulate Import';
$lang['import_upload_failed']        = 'Upload Failed';
$lang['import_total_imported']       = 'Total Imported: %s';
$lang['import_leads']                = 'Import Leads';
$lang['import_customers']            = 'Import Customers';
$lang['choose_csv_file']             = 'Choose CSV File';
$lang['import']                      = 'Import';
$lang['lead_import_status']          = 'Status';
$lang['lead_import_source']          = 'Source';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Предложения';

# Invoices
$lang['delete_invoice'] = 'Удалить';

# Calendar
$lang['calendar_lead_reminder'] = 'Напоминание контакта';

$lang['items']      = 'Позиции';
$lang['support']    = 'Поддержка';
$lang['new_ticket'] = 'Новый тикет';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Добавить напоминание клиенту';
$lang['lead_set_reminder_title']        = 'Добавить напоминание контакту';
$lang['set_reminder_tooltip']           = 'Эта опция позволяет вам никогда ничего не забывать о своих клиентах.';
$lang['client_reminders_tab']           = 'Напоминания';
$lang['leads_reminders_tab']            = 'Напоминания';

# Tickets
$lang['delete_ticket_reply']  = 'Удалить ответ';
$lang['ticket_priority_edit'] = 'Изменить приоритет';
$lang['ticket_priority_add']  = 'Добавить приоритет';
$lang['ticket_status_edit']   = 'Изменить статус тикета';
$lang['ticket_service_edit']  = 'Изменить услугу тикета';
$lang['edit_department']      = 'Изменить отдел';

# Expenses
$lang['edit_expense_category']                                    = 'Изменить категорию расхода';
# Settings
$lang['customer_default_country']                                 = 'Страна по умолчанию';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Потребовать от клиента войти в систему для просмотра сметы';
$lang['set_reminder']                                             = 'Установить напоминание';
$lang['set_reminder_date']                                        = 'Дата уведомления';
$lang['reminder_description']                                     = 'Описание';
$lang['reminder_notify_me_by_email']                              = 'Отправить также по электронной почте это напоминание';
$lang['reminder_added_successfully']                               = 'Напоминание успешно добавлено. Вы будете уведомлены.';
$lang['reminder_description']                                     = 'Описание';
$lang['reminder_date']                                            = 'Дата';
$lang['reminder_staff']                                           = 'Напомнить';
$lang['reminder_is_notified']                                     = 'Напомнить?';
$lang['reminder_is_notified_boolean_no']                          = 'Нет';
$lang['reminder_is_notified_boolean_yes']                         = 'Да';
$lang['reminder_set_to']                                          = 'Установить напоминание';
$lang['reminder_deleted']                                         = 'Напоминание успешно удалено';
$lang['reminder_failed_to_delete']                                = 'Ошибка при удалении напоминания';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Показать в счете/смете статус в формате PDF';
$lang['email_piping_default_priority']                            = 'Default priority on piped ticket';
$lang['show_lead_reminders_on_calendar']                          = 'Напоминание контактов';
$lang['tickets_piping']                                           = 'Email Piping';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registered Users';

# Estimates
$lang['view_estimate_as_client']         = 'Посмотреть смету как клиент';
$lang['estimate_mark_as']                = 'Отметить как %s';
$lang['estimate_status_changed_success'] = 'Статус сметы изменен';
$lang['estimate_status_changed_fail']    = 'Не удалось изменить статус сметы';
$lang['estimate_email_link_text']        = 'Посмотреть смету';

# Proposals
$lang['proposal_to']                            = 'Компания / ФИО';
$lang['proposal_date']                          = 'Дата';
$lang['proposal_address']                       = 'Адрес';
$lang['proposal_phone']                         = 'Телефон';
$lang['proposal_email']                         = 'Эл. почта';
$lang['proposal_date_created']                  = 'Сформировано';
$lang['proposal_open_till']                     = 'Открыто до';
$lang['proposal_status_open']                   = 'Открыто';
$lang['proposal_status_accepted']               = 'Принято';
$lang['proposal_status_declined']               = 'Отклонено';
$lang['proposal_status_sent']                   = 'Отправлено';
$lang['proposal_expired']                       = 'Истекло';
$lang['proposal_subject']                       = 'Тема';
$lang['proposal_total']                         = 'Итого';
$lang['proposal_status']                        = 'Статус';
$lang['proposals_list_all']                     = 'Все';
$lang['proposals_leads_related']                = 'Привязанные контакты';
$lang['proposals_customers_related']            = 'Привязанные клиенты';
$lang['proposal_related']                       = 'Для';
$lang['proposal_for_lead']                      = 'Контакта';
$lang['proposal_for_customer']                  = 'Клиента';
$lang['proposal']                               = 'Предложение';
$lang['proposal_lowercase']                     = 'предложение';
$lang['proposals']                              = 'Предложения';
$lang['proposals_lowercase']                    = 'предложения';
$lang['new_proposal']                           = 'Новое предложение';
$lang['proposal_currency']                      = 'Валюта';
$lang['proposal_allow_comments']                = 'Разрешить комментарии';
$lang['proposal_allow_comments_help']           = 'Если вы отметите эту опцию, клиенты смогут комментировать это предложение.';

$lang['proposal_edit']                          = 'Изменить';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Отправить по электронной почте';
$lang['proposal_send_to_email_title']           = 'Отправить предложение по электронной почте';
$lang['proposal_attach_pdf']                    = 'Прикрепить PDF';
$lang['proposal_preview_template']              = 'Предварительный просмотр';
$lang['proposal_view']                          = 'Посмотреть предложение';
$lang['proposal_copy']                          = 'Копировать';
$lang['proposal_delete']                        = 'Удалить';
$lang['proposal_to']                            = 'Для';
$lang['proposal_add_comment']                   = 'Добавить комментарий';
$lang['proposal_sent_to_email_success']         = 'Предложение отправлено по эл. почте';
$lang['proposal_sent_to_email_fail']            = 'Ошибка при отправке предложения';
$lang['proposal_copy_fail']                     = 'Ошибка при копировании';
$lang['proposal_copy_success']                  = 'Предложение копировано';
$lang['proposal_status_changed_success']        = 'Статус предложения изменен';
$lang['proposal_status_changed_fail']           = 'Ошибка при смене статуса';
$lang['proposal_assigned']                      = 'Закреплено за';
$lang['proposal_comments']                      = 'Комментарии';
$lang['proposal_convert']                       = 'Конвертировать';
$lang['proposal_convert_estimate']              = 'В смету';
$lang['proposal_convert_invoice']               = 'В счет на оплату';
$lang['proposal_convert_to_estimate']           = 'Конвертировать в смету';
$lang['proposal_convert_to_invoice']            = 'Конвертировать в счет на оплату';
$lang['proposal_convert_to_lead_disabled_help'] = 'Вы должны конвертировать контакт в клиента, чтобы создать %s';
$lang['proposal_convert_not_related_help']      = 'Предложение должно быть связано с клиентом, чтобы конвертировать %s';
$lang['proposal_converted_to_estimate_success'] = 'Предложение конвертировано в смету';
$lang['proposal_converted_to_invoice_success']  = 'Предложение конвертировано в счет на оплату';
$lang['proposal_converted_to_estimate_fail']    = 'Ошибка конвертации в смету';
$lang['proposal_converted_to_invoice_fail']     = 'Ошибка конвертации в счет на оплату';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Итого: %s';
$lang['proposal_accept_info']  = 'Принять';
$lang['proposal_decline_info'] = 'Отклонить';
$lang['proposal_pdf_info']     = 'Скачать в PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Сбросить';
$lang['customer_reset_password_heading']  = 'Сброс пароля';
$lang['customer_forgot_password_heading'] = 'Восстановление доступа';
$lang['customer_forgot_password']         = 'Забыли пароль?';
$lang['customer_reset_password']          = 'Пароль';
$lang['customer_reset_password_repeat']   = 'Повторите пароль';
$lang['customer_forgot_password_email']   = 'Электронная почта';
$lang['customer_forgot_password_submit']  = 'Отправить';
$lang['customer_ticket_subject']          = 'Тема';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Предложения';

# Tasks
$lang['add_task_attachments']                 = 'Вложение';
$lang['task_view_attachments']                = 'Вложения';
$lang['task_view_description']                = 'Описание';

# Customer Groups
$lang['customer_group_add_heading']  = 'Добавить новую группу клиентов';
$lang['customer_group_edit_heading'] = 'Изменить группу клиентов';
$lang['new_customer_group']          = 'Новая группа клиентов';
$lang['customer_group_name']         = 'Название';
$lang['customer_groups']             = 'Группы';
$lang['customer_group']              = 'Группа клиента';
$lang['customer_group_lowercase']    = 'группа клиента';

$lang['customer_have_invoices_by']       = 'Счета на оплату по статусу %s';
$lang['customer_have_estimates_by']      = 'Сметы по статусу %s';
$lang['customer_have_contracts_by_type'] = 'Договоры по типу %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Таблица';
$lang['custom_field_show_on_client_portal']      = 'Show on client portal';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Visibility';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputted in the staff language. Otherwise if the string do not exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Active Menu Items';
$lang['inactive_menu_items']                = 'Inactive Menu Items';
$lang['utilities_menu_permission']          = 'Permission';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Name';
$lang['utilities_menu_save']                = 'Save Menu';

# Knowledge Base
$lang['view_articles_list']     = 'Посмотреть статьи';
$lang['view_articles_list_all'] = 'Все статьи';
$lang['als_add_article']        = 'Добавить статью';
$lang['als_all_articles']       = 'Статьи';
$lang['als_kb_groups']          = 'Группы';

# Customizer Menu
$lang['menu_builder']            = 'Настройка меню';
$lang['main_menu']               = 'Главное меню';
$lang['setup_menu']              = 'Настройка меню';
$lang['utilities_menu_url_help'] = '%s автоматически добавляется к URL';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Спам фильтры';
$lang['spam_filter']                  = 'Спам фильтр';
$lang['new_spam_filter']              = 'Новый спам фильтр';
$lang['spam_filter_blocked_senders']  = 'Заблокированные отправители';
$lang['spam_filter_blocked_subjects'] = 'Заблокированные темы';
$lang['spam_filter_blocked_phrases']  = 'Заблокированные ключевые слова';
$lang['spam_filter_content']          = 'Контент';
$lang['spamfilter_edit_heading']      = 'Изменить фильтр';
$lang['spamfilter_add_heading']       = 'Добавить спам фильтр';
$lang['spamfilter_type']              = 'Тип';
$lang['spamfilter_type_subject']      = 'Тема';
$lang['spamfilter_type_sender']       = 'Отправитель';
$lang['spamfilter_type_phrase']       = 'Ключевое слово';

# Tickets
$lang['block_sender']               = 'Блокировать отправителя';
$lang['sender_blocked']             = 'Отправитель блокирован';
$lang['sender_blocked_successfully'] = 'Отправитель блокирован';
$lang['ticket_date_created']        = 'Дата создания';

#KB
$lang['edit_kb_group']             = 'Изменить группу';
# Leads
$lang['edit_source']               = 'Изменить источник';
$lang['edit_status']               = 'Изменить статус';
# Contacts
$lang['contract_type_edit']        = 'Изменить статус договора';
# Reports
$lang['report_by_customer_groups'] = 'Общая сумма по группам клиентов';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';
$lang['ticket_pipe_name']          = 'From Name';
$lang['ticket_pipe_email_to']      = 'To';
$lang['ticket_pipe_email']         = 'From Email';
$lang['ticket_pipe_subject']       = 'Subject';
$lang['ticket_pipe_message']       = 'Message';
$lang['ticket_pipe_date']          = 'Date';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Последняя активность';
$lang['home_my_tasks']              = 'Мои задачи';
$lang['home_latest_activity']       = 'Последняя активность';
$lang['home_my_todo_items']         = 'Личный задания';
$lang['home_widget_view_all']       = 'Посмотреть все';
$lang['home_stats_full_report']     = 'Полный отчет';

# Validation

$lang['form_validation_required']    = ' {field} обязательное поле.';
$lang['form_validation_valid_email'] = ' {field} поле должно содержать корректный адрес электронной почты.';
$lang['form_validation_matches']     = ' {field} поле не соответствует параметрам {param} .';
$lang['form_validation_is_unique']   = ' {field} поле должно содержать уникальное значение.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Сегодня в календаре событий - %s ...';
$lang['not_event_public'] = 'Общественное мероприятие начинается сегодня - %s ...';
$lang['not_contract_expiry_reminder'] = 'Сегодня истечение срока действия договора - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed'] = 'Всего возобновлено: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Счет создан:';
$lang['not_invoice_renewed'] = 'Счет обновлен:';
$lang['not_expense_renewed'] = 'Расход обновлен:';
$lang['not_invoice_sent_to_customer'] = 'Клиенту отправлен счет на оплату: %s';
$lang['not_invoice_sent_yes'] = 'Да';
$lang['not_invoice_sent_not'] = 'Нет';
$lang['not_action_taken_from_recurring_invoice'] = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for'] = 'Новое напоминание  %s';
$lang['not_received_one_or_more_messages_lead'] = 'Получено новое сообщение от контакта';
$lang['not_received_lead_imported_email_integration'] = 'Контакты импортированы по Email интеграции';
$lang['not_lead_imported_attachment'] = 'Imported attachment from email';
$lang['not_estimate_status_change'] = 'Imported attachment from email';
$lang['not_estimate_status_updated'] = 'Статус сметы обновлен: От: %s до %s';
$lang['not_goal_message_success'] = 'Поздравляем! Мы выполнили поставленную цель.<br /> Тип цели: %s
<br />Поставленная цель: %s
<br />Итог достижения: %s
<br />Дата начала: %s
<br />Дата окончания: %s';
$lang['not_assigned_lead_to_you'] = 'контакт %s закреплен за вами';
$lang['not_lead_activity_assigned_to'] = '%s закреплен за %s';
$lang['not_lead_activity_attachment_deleted'] = 'Файл удален';
$lang['not_lead_activity_status_updated'] = '%s обновлен статус контакта, от %s до %s';
$lang['not_lead_activity_contacted'] = '%s связался с контактом %s';
$lang['not_lead_activity_created'] = '%s создал(а) контакт';
$lang['not_lead_activity_marked_lost'] = 'Отметил(а) как новый';
$lang['not_lead_activity_unmarked_lost'] = 'Снял(а) отметку "новый"';
$lang['not_lead_activity_marked_junk'] = 'Отметил(а) как спам';
$lang['not_lead_activity_unmarked_junk'] = 'Снял(а) отметку "спам"';
$lang['not_lead_activity_added_attachment'] = 'Новое вложение';
$lang['not_lead_activity_converted_email'] = 'Эл. почта контакта изменена. Старая эл. почта контакта: %s и добавлена новая %s';
$lang['not_lead_activity_converted'] = '%s Конвертировал(а) контакт в клиента';
$lang['not_liked_your_post'] = '%s понравилась ваша запись %s ...';
$lang['not_commented_your_post'] = '%s прокомментировал(а) вашу запись %s ...';
$lang['not_liked_your_comment'] = '%s понравился ваш комментарий %s ...';
$lang['not_proposal_assigned_to_you'] = 'Предложение прикреплено к вам - %s ...';
$lang['not_proposal_comment_from_client'] = 'Новый комментарий клиента на предложение %s ...';
$lang['not_proposal_proposal_accepted'] = 'Предложение принято';
$lang['not_proposal_proposal_declined'] = 'Предложение отклонено';
$lang['not_task_added_you_as_follower'] = 'добавил(а) вас как участника в задаче %s ...';
$lang['not_task_added_someone_as_follower'] = 'добавил(а) %s как участника в задаче %s ...';
$lang['not_task_added_himself_as_follower'] = 'добавил(а) себя как участник задачи %s ...';
$lang['not_task_assigned_to_you'] = 'поставил(а) вам задачу %s ...';
$lang['not_task_assigned_someone'] = 'поставил(а) %s задачу %s ...';
$lang['not_task_will_do_user'] = 'выполнит задачу %s ...';
$lang['not_task_new_attachment'] = 'Новое вложение добавлено';
$lang['not_task_marked_as_complete'] = 'отметил(а) задачу как "завершенная" %s';
$lang['not_task_unmarked_as_complete'] = 'снял(а) отметку о завершении задачи %s';
$lang['not_ticket_assigned_to_you'] = 'Тикет прикреплен к вам - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Тикет повторно назначен вам - %s ...';
$lang['not_estimate_customer_accepted'] = 'Поздравляем! Клиент принял смету с номером %s';
$lang['not_estimate_customer_declined'] = 'Клиент отклонил смету под номером %s';
$lang['estimate_activity_converted'] = 'конвертировал(а) смету в счет на оплату.<br /> %s';
$lang['estimate_activity_created'] = 'Создал(а) смету';
$lang['invoice_estimate_activity_removed_item'] = 'удалил(а) позицию <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Номер сметы изменен с %s на %s';
$lang['invoice_activity_number_changed'] = 'Номер счета изменен с %s на %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'обновлено краткое описание позиции с %s на %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'обновлено полное описание позиции с <b>%s</b> на <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'обновлена стоимость позиции с %s на %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'обновлено кол-во в позиции <b>%s</b> с %s на %s';
$lang['invoice_estimate_activity_added_item'] = 'добавлена новая позиция <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'смета отправлена клиенту';
$lang['estimate_activity_client_accepted_and_converted'] = 'Клиент принял смету. Смета конвертирована в счет на оплату %s';
$lang['estimate_activity_client_accepted'] = 'Клиент принял смету';
$lang['estimate_activity_client_declined'] = 'Клиент отклонил смету';
$lang['estimate_activity_marked'] = 'отметил(а) смету как %s';
$lang['invoice_activity_status_updated'] = 'Статус счета изменен с %s на %s';
$lang['invoice_activity_created'] = 'создал(а) счет на оплату';
$lang['invoice_activity_from_expense'] = 'converted to invoice from expense';
$lang['invoice_activity_recurring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recurring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'счет отправлен клиенту';
$lang['invoice_activity_marked_as_sent'] = 'счет отмечен как "отправлен клиенту"';
$lang['invoice_activity_payment_deleted'] = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Добавлен файл';

# Navigation
$lang['top_search_placeholder'] = 'Поиск...';

# Staff
$lang['staff_profile_inactive_account'] = 'Профиль сотрудника не активен';

# Estimates
$lang['copy_estimate'] = 'Копировать смету';
$lang['estimate_copied_successfully'] = 'Смета успешно копирована';
$lang['estimate_copied_fail'] = 'Ошибка при копировании';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Задача закреплена за мной';
$lang['tasks_view_follower_by_user'] = 'Tasks i\'m following';
$lang['no_tasks_found'] = 'Задачи не найдены';

# Leads
$lang['leads_dt_datecreated'] = 'Добавлен';
$lang['leads_sort_by'] = 'Сортировать по';
$lang['leads_sort_by_datecreated'] = 'Дата создания';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposals
$lang['proposal_items_name'] = 'Позиция';
$lang['proposal_items_description'] = 'Описание';
$lang['proposal_items_qty'] = 'Кол-во';
$lang['proposal_items_rate'] = 'Стоимость';
$lang['proposal_items_tax'] = 'Налог';
$lang['proposal_items_amount'] = 'Сумма';

# Authentication
$lang['check_email_for_resetting_password'] = 'Проверьте вашу электронную почту для дальнейших инструкций по восстановлению пароля';
$lang['inactive_account'] = 'Неактивный профиль';
$lang['error_setting_new_password_key'] = 'Ошибка при установке нового пароля';
$lang['password_reset_message'] = 'Ваш пароль был сброшен. Пожалуйста, войдите!';
$lang['password_reset_message_fail'] = 'Ошибка при сбросе пароля. Попробуйте снова.';
$lang['password_reset_key_expired'] = 'Пароль недействителен';
$lang['admin_auth_reset_pass_repeat'] = 'Повторите пароль';
$lang['auth_reset_pass_email_not_found'] = 'Эл. почта не найдена';
$lang['auth_reset_password_submit'] = 'Сброс пароля';

# Settings
$lang['settings_amount_to_words'] = 'Amount to words';
$lang['settings_amount_to_words_desc'] = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled'] = 'Enable';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item'] = 'Show TAX per item';

# Reports
$lang['report_sales_months_three_months'] = 'Последние 3 месяца';
$lang['report_invoice_number'] = 'Счет на оплату #';
$lang['report_invoice_customer'] = 'Клиент';
$lang['report_invoice_date'] = 'Дата';
$lang['report_invoice_duedate'] = 'Оплата до';
$lang['report_invoice_amount'] = 'Сумма';
$lang['report_invoice_amount_with_tax'] = 'Сумма с учетом налога';
$lang['report_invoice_amount_open'] = 'Открытая сумма';
$lang['report_invoice_status'] = 'Статус';
$lang['report_invoice_total_amount_with_tax'] = 'Общая сумма с учетом налога';
$lang['report_invoice_total_amount_without_tax'] = 'Общая сумма без учета налога';
$lang['report_invoice_total_taxes'] = 'Налоги';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Статистика по статусам проектов';
$lang['home_invoice_overview'] = 'Обзор счетов';
$lang['home_estimate_overview'] = 'Обзор смет';
$lang['home_proposal_overview'] = 'Обзор предложений';
$lang['home_lead_overview'] = 'Обзор контактов';

$lang['home_my_projects'] = 'Мои проекты';
$lang['home_announcements'] = 'Объявления';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limit leads kan ban rows per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Проекты';
$lang['settings_media_max_file_size_upload'] = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement'] = 'Отклонить объявление';
$lang['dismiss_announcement'] = 'Отклонить объявление';
$lang['announcement_from'] = 'От:';
$lang['announcement_date'] = 'Дата публикации: %s';
$lang['announcement_not_found'] = 'Объявления не найдены';
$lang['announcements_recent'] = 'Последние объявления';

# General
$lang['zip_invoices'] = 'Zip Invoices';
$lang['zip_estimates'] = 'Zip Estimates';
$lang['zip_payments'] = 'Zip Payments';
$lang['setup_help'] = 'Help';
$lang['clients_list_company'] = 'Компания';
$lang['dt_button_export'] = 'Экспорт';

$lang['dt_entries'] = 'entries';
$lang['invoice_total_paid'] = 'Общая сумма выплат';
$lang['invoice_amount_due'] = 'Сумма к оплате';
$lang['report_invoice_discount'] = 'Скидки';

# Calendar
$lang['calendar_project'] = 'Проект';

# Leads
$lang['leads_import_assignee'] = 'Закреплены за';
$lang['customer_from_lead'] = 'Customer from %s';
$lang['lead_kan_ban_attachments'] = 'Вложения: %s';
$lang['leads_sort_by_lastcontact'] = 'Последний контакт';

# Tasks
$lang['task_comment_added'] = 'Комментарий добавлен';
$lang['task_duedate'] = 'Выполнить до';
$lang['task_view_comments'] = 'Комментарии';
$lang['task_comment_updated'] = 'Комментарий обновлен';
$lang['task_visible_to_client'] = 'Видимый клиенту';
$lang['task_hourly_rate'] = 'Почасовая ставка';
$lang['hours'] = 'Часы';
$lang['seconds'] = 'Секунды';
$lang['minutes'] = 'Минуты';
$lang['task_start_timer'] = 'Запуск таймера';
$lang['task_stop_timer'] = 'Остановить таймер';
$lang['task_billable_help'] = 'Если вы установите флажок "оплачиваемое задание", то при создании счета на оплату, будет указана соответствующая позиция';
$lang['task_billable'] = 'Оплачиваемое задание';
$lang['task_billable_yes'] = 'Да';
$lang['task_billable_no'] = 'Нет';
$lang['task_billed'] = 'Billed';
$lang['task_billed_yes'] = 'Billed';
$lang['task_billed_no'] = 'Not Billed';
$lang['task_user_logged_time'] = 'Ваше время работы:';
$lang['task_total_logged_time'] = 'Общее время работы:';
$lang['task_is_billed'] = 'На эту задачу выставлен счет на оплату с номером %s';
$lang['task_statistics'] = 'Статистика';
$lang['task_milestone'] = 'Этап';

# Tickets
$lang['ticket_message_updated_successfully'] = 'Сообщение обновлено';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Задачи проектов не включены в этот список.';
$lang['show_quantity_as'] = 'Показать количество:';
$lang['quantity_as_qty'] = 'Кол-во';
$lang['quantity_as_hours'] = 'Часы';
$lang['invoice_table_hours_heading'] = 'Часы';
$lang['bill_tasks'] = 'Задачи';
$lang['invoice_estimate_sent_to_email'] = 'Email to';

# Estimates
$lang['estimate_table_hours_heading'] = 'Часы';

# General
$lang['is_customer_indicator'] = 'Клиент';
$lang['print']            = 'Печать';
$lang['customer_permission_projects']            = 'Проекты';
$lang['no_timers_found']            = 'Нет запущенных таймеров';
$lang['timers_started_confirm_logout']            = 'Таймер не остановлен!<br /><br />Вы уверены, что хотите выйти без остановки таймера?';
$lang['confirm_logout']            = 'Выйти';
$lang['timer_top_started']            = 'Запущен %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Вы не можете изменить тип счета. У этого проекта есть задачи.';
$lang['project_customer_permission_warning'] = 'В системе указано, что контакт не имеете разрешение на проекты. Контакт не сможет увидеть проект. Рассмотрите возможность добавить разрешение в профиле контакта.';
$lang['project_invoice_timesheet_start_time'] = 'Время начала: %s';
$lang['project_invoice_timesheet_end_time'] = 'Время окончания: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Время работы: %s';
$lang['project_view_as_client'] = 'Посмотреть проект как клиент';
$lang['project_mark_all_tasks_as_completed'] = 'Отметьте все задачи, как "выполнено" и остановите все таймеры (Без уведомления участников проекта)';
$lang['project_not_started_status_tasks_timers_found'] = 'Task timers found for this project but the project is with status Not Started. Recommended to change the project status to In Progress';
$lang['project_status'] = 'Статус';
$lang['project_status_1'] = 'Не начат';
$lang['project_status_2'] = 'В процессе';
$lang['project_status_3'] = 'В ожидании';
$lang['project_status_4'] = 'Завершено';

$lang['project_file_uploaded_by_customer'] = 'Клиент';
$lang['project_file_dateadded'] = 'Дата загрузки';
$lang['project_file_filename'] = 'Название файла';
$lang['project_file__filetype'] = 'Тип файла';
$lang['project_file_visible_to_customer'] = 'Видимый клиенту';
$lang['project_file_uploaded_by'] = 'Загружен';
$lang['edit_project'] = 'Изменить проект';
$lang['copy_project'] = 'Копировать проект';
$lang['delete_project'] = 'Удалить проект';
$lang['project_task_assigned_to_user'] = 'Задача закреплена за вами';
$lang['seconds'] = 'Секунды';
$lang['hours'] = 'Часы';
$lang['minutes'] = 'Минуты';
$lang['project']                 = 'Проект';
$lang['project_lowercase']       = 'проект';
$lang['projects']                = 'Проекты';
$lang['projects_lowercase']      = 'проекты';
$lang['project_settings']      = 'Настройки проекта';
$lang['project_invoiced_successfully']             = 'Счет на оплату за проект выставлен клиенту';
$lang['new_project']             = 'Добавить проект';
$lang['project_files']            = 'Файлы';
$lang['project_activity']            = 'Активность';
$lang['project_name']            = 'Название проекта';
$lang['project_description']            = 'Описание проекта';
$lang['project_customer']            = 'Клиент';
$lang['project_start_date']            = 'Дата начала';
$lang['project_datecreated']            = 'Дата создания';
$lang['project_deadline']            = 'Выполнить до';
$lang['project_billing_type']            = 'Тип оплаты';
$lang['project_billing_type_fixed_cost']            = 'Фиксированная ставка';
$lang['project_billing_type_project_hours']            = 'Почасовая за проект';
$lang['project_billing_type_project_task_hours']            = 'Почасовая за задачи';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'На основе почасовой ставки за задачи';
$lang['project_rate_per_hour']            = 'Стоимость часа';
$lang['project_total_cost']            = 'Общая сумма';
$lang['project_members']            = 'Участники проекта';
$lang['project_member_removed']     = 'Участник проекта успешно удален';
$lang['project_overview']           = 'Обзор проекта';
$lang['project_gant']            = 'Планирование';
$lang['project_milestones']            = 'Этапы';
$lang['project_milestone_order']            = 'Order';
$lang['project_milestone_duedate_passed']            = 'Due date passed';
$lang['record_timesheet']            = 'Timesheet';
$lang['new_milestone']            = 'Новый этап';
$lang['edit_milestone']            = 'Изменить этап';
$lang['milestone_name']            = 'Название';
$lang['milestone_due_date']            = 'Выполнить до';
$lang['project_milestone']            = 'Этап';
$lang['project_notes']            = 'Заметки';
$lang['project_timesheets']            = 'Табели';
$lang['project_timesheet']            = 'Табель';
$lang['milestone_total_logged_time']            = 'Рабочее время';
$lang['project_overview_total_logged_hours']            = 'Общее рабочее время';
$lang['milestones_uncategorized']            = 'Без категории';
$lang['milestone_no_tasks_found']            = 'Задачи не найдены';
$lang['project_copied_successfully']            = 'Данные проекта копированы';
$lang['failed_to_copy_project']            = 'Ошибка при копировании проекта';
$lang['copy_project_task_include_check_list_items']            = 'Копировать список позиций';
$lang['copy_project_task_include_assignees']            = 'Copy the same assignee\'s';
$lang['copy_project_task_include_followers']            = 'Copy the same followers';

$lang['project_days_left']            = 'Осталось дней';
$lang['project_open_tasks']            = 'Открытых задач';
$lang['timesheet_stop_timer']            = 'Остановить таймер';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Не удалось добавить табель. Время окончания меньше времени начала';
$lang['project_timesheet_user']            = 'Участник';
$lang['project_timesheet_start_time']            = 'Время начала';
$lang['project_timesheet_end_time']            = 'Время окончания';
$lang['project_timesheet_time_spend']            = 'Затраченное время';
$lang['project_timesheet_task']            = 'Задача';
$lang['project_invoices']                = 'Счета на оплату';
$lang['total_logged_hours_by_staff']            = 'Общее рабочее время';
$lang['invoice_project']            = 'Счет на оплату проекта';
$lang['invoice_project_info']            = 'Информация о счете проекта';
$lang['invoice_project_data_single_line']            = 'Общий счет на оплату';
$lang['invoice_project_data_task_per_item']            = 'Счет по позициям задач';
$lang['invoice_project_data_timesheets_individually']            = 'Каждый табель индивидуально';
$lang['invoice_project_item_name_data']            = 'Название позиции';
$lang['invoice_project_description_data']            = 'Описание';
$lang['invoice_project_projectname_taskname']            = 'Название проекта + Название задачи';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Все задачи + общее время на задачу';
$lang['invoice_project_project_name_data']            = 'Название проекта';
$lang['invoice_project_timesheet_individually_data']            = 'Время начала работы + время окончания + общее время работы';
$lang['invoice_project_total_logged_time_data']            = 'Общее рабочее время';

$lang['project_allow_client_to'] = 'Разрешить клиенту %s';
$lang['project_setting_view_task_attachments'] = 'видеть вложения в задачах';
$lang['project_setting_view_task_checklist_items'] = 'видеть список задач';
$lang['project_setting_upload_files'] = 'загружать файлы';
$lang['project_setting_view_task_comments'] = 'видеть комментарии к задаче';
$lang['project_setting_upload_on_tasks'] = 'добавлять вложения в задачах';
$lang['project_setting_view_task_total_logged_time'] = 'видеть общее время работы над задачей';
$lang['project_setting_open_discussions'] = 'добавлять обсуждения';
$lang['project_setting_comment_on_tasks'] = 'комментировать задачи проекта';
$lang['project_setting_view_tasks'] = 'видеть задачи';
$lang['project_setting_view_milestones'] = 'видеть этапы';
$lang['project_setting_view_gantt'] = 'видеть планирование';
$lang['project_setting_view_timesheets'] = 'видеть табели';
$lang['project_setting_view_activity_log'] = 'видеть журнал операций';
$lang['project_setting_view_team_members'] = 'видеть участников проекта';

$lang['project_discussion_visible_to_customer_yes']                 = 'Видимо для всех';
$lang['project_discussion_visible_to_customer_no']                 = 'Не видимо';

$lang['project_discussion_posted_on']                 = 'Опубликовано %s';
$lang['project_discussion_posted_by']                 = 'Добавил(а) %s';
$lang['project_discussion_failed_to_delete']                 = 'Ошибка при удалении';
$lang['project_discussion_deleted']                 = 'Обсуждение удалено';
$lang['project_discussion_no_activity']                 = 'Нет активности';
$lang['project_discussion']                 = 'Обсуждение';
$lang['project_discussions']                 = 'Обсуждения';
$lang['edit_discussion'] = 'Добавить обсуждение';
$lang['new_project_discussion'] = 'Добавить обсуждение';
$lang['project_discussion_subject'] = 'Тема';
$lang['project_discussion_description'] = 'Описание';
$lang['project_discussion_show_to_customer'] = 'Видимо для клиента';
$lang['project_discussion_total_comments'] = 'Всего комментариев';
$lang['project_discussion_last_activity'] = 'Последняя активность';
$lang['discussion_add_comment'] = 'Добавить комментарий';
$lang['discussion_newest'] = 'Новые';
$lang['discussion_oldest'] = 'Старые';
$lang['discussion_attachments'] = 'Вложения';
$lang['discussion_send'] = 'Отправить';
$lang['discussion_reply'] = 'Ответ';
$lang['discussion_edit'] = 'Изменить';
$lang['discussion_edited'] = 'Изменено';
$lang['discussion_you'] = 'Вы';
$lang['discussion_save'] = 'Сохранить';
$lang['discussion_delete'] = 'Удалить';
$lang['discussion_view_all_replies'] = 'Показать все ответы';
$lang['discussion_hide_replies'] = 'Скрыть ответы';
$lang['discussion_no_comments'] = 'Нет комментариев';
$lang['discussion_no_attachments'] = 'Нет вложений';
$lang['discussion_attachments_drop'] = 'Перенесите файл в эту область или нажмите, чтобы загрузить файл';
$lang['project_note'] = 'Примечание';
$lang['project_note_private'] = 'Частные примечания';
$lang['project_save_note'] = 'Сохранить примечание';

# Project Activity
$lang['project_activity_created'] = 'Создано проект';
$lang['project_activity_updated'] = 'Обновлено проект';
$lang['project_activity_removed_team_member'] = 'Удален участник';
$lang['project_activity_added_team_member'] = 'Добавлен новый участник';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Все задачи отмечены как выполнены';
$lang['project_activity_recorded_timesheet'] = 'Записан табель';
$lang['project_activity_task_name'] = 'Задача:';
$lang['project_activity_deleted_discussion'] = 'Удалено обсуждение';
$lang['project_activity_created_discussion'] = 'Создано обсуждение';
$lang['project_activity_updated_discussion'] = 'Обновлено обсуждение';
$lang['project_activity_commented_on_discussion'] = 'Прокомментировал(а) обсуждение';
$lang['project_activity_deleted_discussion_comment'] = 'Удалил(а) комментарий в обсуждении';
$lang['project_activity_deleted_milestone'] = 'Удален этап';
$lang['project_activity_updated_milestone'] = 'Обновлен этап';
$lang['project_activity_created_milestone'] = 'Создан новый этап';
$lang['project_activity_invoiced_project'] = 'Счет на оплату проекта';
$lang['project_activity_task_marked_complete'] = 'Задание выполнено';
$lang['project_activity_task_unmarked_complete'] = 'Отметка о выполнении задания';
$lang['project_activity_task_deleted'] = 'Задание удалено';
$lang['project_activity_new_task_comment'] = 'Комментарий к заданию';
$lang['project_activity_new_task_attachment'] = 'Загружен файл к заданию';
$lang['project_activity_new_task_assignee'] = 'Добавлен новый участник задания';
$lang['project_activity_task_assignee_removed'] = 'Удален участник задания';
$lang['project_activity_task_timesheet_deleted'] = 'Удален табель';
$lang['project_activity_uploaded_file'] = 'В проект загружен файл';
$lang['project_activity_status_updated'] = 'Статус проекта обновлен';
$lang['project_activity_visible_to_customer'] = 'Видимо для клиента';
$lang['project_activity_project_file_removed'] = 'Файл удален из проекта';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'Новый файл загружен';
$lang['not_customer_created_new_project_discussion'] = 'Новое обсуждение проекта создано';
$lang['not_customer_commented_on_project_discussion'] = 'Новый комментарий к обсуждению проекта';

# Customers area
$lang['clients_my_estimates'] = 'Сметы';
$lang['client_no_reply'] = 'Нет ответа';
$lang['clients_nav_projects'] = 'Проекты';
$lang['clients_my_projects'] = 'Проекты';
$lang['client_profile_image'] = 'Фото';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Отмененные счета на оплату исключены из отчета';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfully'] = 'Счет на оплату отменен';
$lang['invoice_unmarked_as_cancelled'] = 'Счет на оплату восстановлен';

$lang['tasks_reminder_notification_before'] = 'Напомнить о сроке сдачи за (Дней)';
$lang['not_task_deadline_reminder'] = 'Напоминание о сроке сдачи';
$lang['dt_length_menu_all'] = 'Все';
$lang['task_not_finished'] = 'Не выполнено';
$lang['task_billed_cant_start_timer'] = 'Задача оплачена. Нельзя включить таймер';
$lang['invoice_task_billable_timers_found'] = 'Найдены включенные таймеры';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'Таймеры для этой задачи не найдены';
$lang['invoice_project_tasks_not_started'] = 'Не начато | Дата начала: %s';
$lang['invoice_project_see_billed_tasks'] = 'Посмотрите задачи, которые будут указаны в счете на оплату';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Все выбранные задачи будут отмечены как завершенные';
$lang['invoice_project_nothing_to_bill'] = 'Задач для оплаты нет. Добавьте вручную позиции в счете на оплату.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Нельзя добавить задачу с будущей датой';
$lang['invoice_project_stop_all_timers'] = 'Остановить все таймеры';
$lang['invoice_project_stop_billable_timers_only'] = 'Остановка только оплачиваемые таймеры';
$lang['project_tasks_total_timers_stopped'] = 'Всего остановлено %s таймеров';
$lang['project_invoice_timers_started'] = 'Найдены работающие таймеры на оплачиваемых заданиях, нельзя создать счет на оплату. Пожалуйста, остановите все таймеры и сформируйте счет.';
$lang['task_start_timer_only_assignee'] = 'Вы должны быть участником этой задачи, чтобы запустить таймер!';
$lang['task_comments'] = 'Комментарии';
$lang['invoice_total_tax'] = 'Совокупный налог';
$lang['estimates_total_tax'] = 'Совокупный налог';
$lang['report_invoice_total_tax'] = 'Совокупный налог';
$lang['home_tickets'] = 'Тикеты';
$lang['home_project_activity'] = 'Последняя активность в проектах';
$lang['home_project_activity_not_found'] = 'Активности нет';
$lang['view_tracking'] = 'Отслеживание';
$lang['view_date'] = 'Дата';
$lang['view_ip'] = 'IP адрес';
$lang['article_total_views'] = 'Всего просмотров';
$lang['leads_source'] = 'Источник';
$lang['invoices_available_for_merging'] = 'Счета доступны для объединения';
$lang['invoices_merge_discount'] = 'Вам придется применить скидку от общей суммы %s вручную к этому счету';
$lang['invoice_merge_number_warning'] = 'Объединение счетов создаст пробелы в номерах счетов. Пожалуйста, не объединяйте счета, если Вы не хотите  пробелов в вашей истории счетов. У вас также есть возможность регулировки вручную номеров счетов, если вы хотите заполнить пробелы.';
$lang['invoice_mark_as'] = 'Отметить как %s';
$lang['invoice_unmark_as'] = 'Снять отметку %s';
$lang['invoice_status_cancelled'] = 'Отменено';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignee\'s about deadline before X days. The notification/email is sent only to the assignee\'s. If the difference between task start date and task due date is smaller then the reminders day no notification will be sent.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Выбрать все задачи';
$lang['lead_company'] = 'Компания';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Подтвердить';
$lang['task_assigned'] = 'Участники';
$lang['switch_to_pipeline'] = 'Переключиться на колонки';
$lang['switch_to_list_view'] = 'Переключиться на список';
$lang['estimates_pipeline'] = 'Сметы колонкой';
$lang['estimates_pipeline_sort'] = 'Сортировать по';
$lang['estimates_sort_expiry_date'] = 'Дата окончания срока';
$lang['estimates_sort_pipeline'] = 'Передано на производство';
$lang['estimates_sort_datecreated'] = 'Дата создания';
$lang['estimates_sort_estimate_date'] = 'Дата сметы';
$lang['estimate_set_reminder_title'] = 'Добавить напоминание';
$lang['invoice_set_reminder_title'] = 'Добавить напоминание';
$lang['estimate_reminders'] = 'Напоминания';
$lang['invoice_reminders'] = 'Напоминания';
$lang['estimate_notes'] = 'Примечания';
$lang['estimate_add_note'] = 'Добавить примечание';
$lang['dropdown_non_selected_tex'] = 'Ничего не выбрано';
$lang['auto_close_ticket_after'] = 'Авто закрытие тикета через (Часы)';
$lang['event_description'] = 'Описание';
$lang['delete_event'] = 'Удалить';
$lang['not_new_ticket_created'] = 'Новый тикет в вашем отделе - %s';
$lang['receive_notification_on_new_ticket'] = 'Получите уведомление о новом открытом тикете';
$lang['receive_notification_on_new_ticket_help'] = 'Все сотрудники, которые состоят в отделе тикета, получат уведомление, о том, что новый тикет открыт';
$lang['event_updated'] = 'Событие успешно обновлено';
$lang['customer_contacts'] = 'Контакты';
$lang['new_contact'] = 'Новый контакт';
$lang['contact'] = 'Контакт';
$lang['contact_lowercase'] = 'Контакт';
$lang['contact_primary'] = 'Первичный контакт';
$lang['contact_position'] = 'Позиция';
$lang['contact_active'] = 'Активность';
$lang['client_company_info'] = 'Информация о компании';
$lang['proposal_save'] = 'Сохранить предложение';
$lang['calendar'] = 'Календарь';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF шрифт';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Черновик';
$lang['custom_field_contacts'] = 'Контакты';
$lang['company_primary_email'] = 'Основная эл. почта';
$lang['client_register_contact_info'] = 'Основная контактная информация';
$lang['client_register_company_info'] = 'Информация о компании';
$lang['contact_permissions_info'] = 'Удостоверьтесь, что установили соответствующие разрешения для этого контакта';
$lang['default_leads_kanban_sort'] = 'Default leads kan ban sort';
$lang['default_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'Развернуть';
$lang['proposal_reminders'] = 'Напоминания';
$lang['proposal_set_reminder_title'] = 'Добавить напоминание';
$lang['settings_allowed_upload_file_types'] = 'Разрешенные типы файлов';
$lang['no_primary_contact'] = 'This customer does have primary contact. You need to setup primary contact login as customer. Its recommended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Телефон';
$lang['invoice_status_report_all'] = 'Все';
$lang['import_contact_field'] = 'Contact field';


$lang['file_uploaded_success'] = 'Нет никакой ошибки, файл успешно загружен';
$lang['file_exceeds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceeds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'Загружаемый файл был загружен частично';
$lang['file_not_uploaded'] = 'Файл не был загружен';
$lang['file_missing_temporary_folder'] = 'Отсутствует временная папка';
$lang['file_failed_to_write_to_disk'] = 'Не удалось записать файл на диск.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'Расширить';
$lang['view_pdf'] = 'Посмотреть PDF';
$lang['expense_repeat_every'] = 'Повторять каждые';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Режим канбан';
$lang['survey_no_questions'] = 'В этот опрос еще не добавлены вопросы.';
$lang['survey_submit'] = 'Отправить';
$lang['contract_content'] = 'Договор';
$lang['contract_save'] = 'Сохранить договор';
$lang['contract_send_to_email'] = 'Отправить на эл. почту';
$lang['contract_send_to_client_modal_heading'] = 'Отправить договор на эл. почту';
$lang['contract_send_to'] = 'Отправить';
$lang['contract_send_to_client_attach_pdf'] = 'Прикрепить PDF';
$lang['contract_send_to_client_preview_template'] = 'Предпросмотр эл. письма';
$lang['include_attachments_to_email'] = 'Включить вложения в эл. почте';
$lang['contract_sent_to_client_success'] = 'Договор был успешно отправлен клиенту';
$lang['contract_sent_to_client_fail'] = 'Не удалось отправить договор';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Неверный логин или пароль';
$lang['client_old_password_incorrect']     = 'Ваш старый пароль неверен';
$lang['client_password_changed']          = 'Ваш пароль был изменен';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Всего удалено лидов: %s';
$lang['total_clients_deleted'] = 'Всего удалено клиентов: %s';
$lang['confirm_action_prompt'] = 'Вы уверены, что хотите выполнить это действие?';
$lang['mass_delete'] = 'Массовое удаление';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Добавить/изменить участников';
$lang['project_overview_logged_hours'] = 'Рабочих часов:';
$lang['project_overview_billable_hours'] = 'Оплачиваемые часы:';
$lang['project_overview_billed_hours'] = 'Оплаченные часы:';
$lang['project_overview_unbilled_hours'] = 'Неоплаченные часы:';
$lang['calendar_first_day'] = 'Первый день';
$lang['permission_view'] = 'Просмотр';
$lang['permission_edit'] = 'Изменить';
$lang['permission_create'] = 'Добавить';
$lang['permission_delete'] = 'Удалить';
$lang['permission'] = 'Права';
$lang['permissions'] = 'Права';
$lang['proposals_pipeline'] = 'Передано на производство ';
$lang['proposals_pipeline_sort'] = 'Сортировать по';
$lang['proposals_sort_open_till'] = 'Открыто до';
$lang['proposals_sort_pipeline'] = 'Передано на производство';
$lang['proposals_sort_datecreated'] = 'Дата создания';
$lang['proposals_sort_proposal_date'] = 'Дата предложения';
$lang['is_not_staff_member'] = 'Не сотрудник';
$lang['lead_created'] = 'Сформировано';
$lang['access_tickets_to_none_staff_members'] = 'Разрешить доступ не сотрудникам';
$lang['project_expenses'] = 'Расходы';
$lang['expense_currency'] = 'Валюта';
$lang['currency_valid_code_help'] = 'MУбедитесь, что введен допустимый код валюты.';
$lang['week'] = 'Неделя';
$lang['weeks'] = 'Недель';
$lang['month'] = 'Месяц';
$lang['months'] = 'Месяцев';
$lang['year'] = 'Год';
$lang['years'] = 'Лет';
$lang['expense_report_category'] = 'Категория';
$lang['expense_paid_via'] = 'Оплата через %s';
$lang['item_as_expense'] = '[Расход]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Всего клиентов';
$lang['filter_by'] = 'Фильтр по';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Прикрепленный проект';
$lang['pin_project']= 'Прикрепить проект';
$lang['unpin_project']= 'Открепить проект';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'Ничего';
$lang['show_proposals_on_calendar']= 'Предложения';
$lang['invoice_project_see_billed_expenses']= 'Увидеть расходы, которые будут оплачиваться по этому счету';
$lang['project_overview_expenses'] = 'Суммарные расходы';
$lang['project_overview_expenses_billable'] = 'Оплачиваемые расходы';
$lang['project_overview_expenses_billed'] = 'Оплаченные расходы';
$lang['project_overview_expenses_unbilled'] = 'Неоплаченные расходы';
$lang['announcement_date_list'] = 'Дата';
$lang['project_setting_view_finance_overview'] = 'посмотреть финансовый обзор';
$lang['show_all_tasks_for_project_member'] = 'Позволяет всем сотрудникам видеть все задачи, связанные с проектами (включая нештатных)';
$lang['not_staff_added_as_project_member'] = 'Добавил вас в качестве участника проекта';
$lang['report_expenses_base_currency_select_explanation'] = 'Вы должны выбрать валюту, поскольку система используются различные валюты для расходов.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Добавлен расход';
$lang['save_customer_and_add_contact'] = 'Сохранить и добавить контакт';
$lang['tickets_chart_weekly_opening_stats'] = 'Еженедельная статистика';
$lang['related_knowledgebase_articles'] = 'Похожие статьи';
$lang['detailed_overview'] = 'Обзор задач';
$lang['tasks_total_checklists_finished'] = 'Кол-во выполненных пунктов';
$lang['tasks_total_added_attachments'] = 'Общее кол-во вложений';
$lang['tasks_total_comments'] = 'Всего комментариев';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Да';
$lang['task_not_finished_on_time_indicator'] = 'Нет';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Фильтр';
$lang['task_filter_detailed_all_months'] = 'Все месяцы';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Остановите все другие начатые таймеры, запуская новый таймер';
$lang['notification_when_customer_pay_invoice'] = 'Получать уведомления, при оплате счета клиентом';
$lang['not_invoice_payment_recorded'] = 'Новая оплата счета - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfully'] = 'Задача копирована';
$lang['failed_to_copy_task'] = 'Ошибка при копировании задачи';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s Цвет';
$lang['settings_calendar_colors_heading'] = 'Стиль';
$lang['reminder'] = 'Напоминание';
$lang['back_to_tasks_list'] = 'Вернуться к списку задач';
$lang['copy_task_confirm'] = 'Подтвердить';
$lang['changing_items_affect_warning'] = 'Изменение позиции повлияет на созданные счета/сметы/предложения.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Примечание';
$lang['leads_staff_report_converted'] = 'Всего конвертировано лидов';
$lang['leads_staff_report_created'] = 'Всего добавлено лидов';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Вернуться';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= ' -прогресс';
$lang['calculate_progress_through_tasks']= 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status']= 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Generate';
$lang['from_date']= 'From date';
$lang['to_date']= 'To date';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Do not allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'Email already exists';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'All staff members';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recurring_days'] = 'Day(s)';
$lang['expense_recurring_weeks'] = 'Week(s)';
$lang['expense_recurring_months'] = 'Month(s)';
$lang['expense_recurring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop'] = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file'] = 'Remove file';
$lang['you_can_not_upload_any_more_files'] = 'You can not upload any more files';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Default source';
$lang['clear_activity_log'] = 'Clear log';
$lang['default_contact_permissions'] = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Пожалуйста, подождите...';
$lang['projects_summary'] = 'Projects summary';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfully sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Default status';
$lang['item_description_placeholder'] = 'Description';
$lang['item_long_description_placeholder'] = 'Long description';
$lang['item_quantity_placeholder'] = 'Quantity';
$lang['item_rate_placeholder'] = 'Rate';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Приоритет';
$lang['ticket_status_db_2'] = 'В процессе';
$lang['ticket_status_db_1'] = 'Открыт';
$lang['ticket_status_db_3'] = 'Отвечен';
$lang['ticket_status_db_4'] = 'В ожидании';
$lang['ticket_status_db_5'] = 'Закрыт';
$lang['ticket_priority_db_1'] = 'Низкий';
$lang['ticket_priority_db_2'] = 'Средний';
$lang['ticket_priority_db_3'] = 'Высокий';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Отчет о счетах';
$lang['payment_modes_report'] = 'Способы оплаты (Транзакции)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Assign admin';
$lang['customer_admin_date_assigned'] = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size'] = 'File size must be less than %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories'] = 'Billable expenses by categories';
$lang['format_letter_size'] = 'A4 Landscape';
$lang['pdf_formats'] = 'Document formats';
$lang['swap_pdf_info'] = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['invoice_estimate_pdf_text_color'] = 'Invoice/Estimate text color';
$lang['expenses_filter_by_categories'] = 'By Categories';
$lang['task_copy'] = 'Copy';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Exclude Billable Expenses';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'Added attachment';
$lang['show_to_customer'] = 'Show to customer';
$lang['hide_from_customer'] = 'Hide from customer';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Expenses report';
$lang['expenses_report_tax'] = 'Tax';
$lang['expenses_report_total_tax'] = 'Total Tax';
$lang['expenses_detailed_report'] = 'Detailed Report';
$lang['expense_not_billable'] = 'Not Billable';
$lang['notification_settings'] = 'Notification settings';
$lang['staff_with_roles'] = 'Staff members with roles';
$lang['specific_staff_members'] = 'Specific Staff Members';
$lang['proposal_mark_as'] = 'Mark as %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Edit';
$lang['invoice_files'] = 'Invoice Files';
$lang['estimate_files'] = 'Estimate Files';
$lang['proposal_files'] = 'Proposal Files';
$lang['invoices_awaiting_payment'] = 'Счета в ожидании оплаты';
$lang['tasks_not_finished'] = 'Не завершенные задачи';
$lang['outstanding_invoices'] = 'Неоплаченные счета';
$lang['past_due_invoices'] = 'Просроченные счета';
$lang['paid_invoices'] = 'Оплаченные счета';
$lang['invoice_estimate_year'] = 'Year';
$lang['no_results_text_search_dropdown'] = 'No Results Matched';
$lang['task_stats_logged_hours'] = 'Logged Hours';
$lang['leads_converted_to_client'] = 'Конвертированные лиды';
$lang['task_assigned_from'] = 'This task is assigned to you by %s';
$lang['auto_check_for_new_notifications'] = 'Auto check for new notifications (Seconds - Set 0 to disable)';
$lang['recurring_ends_on'] = 'Ends On (Leave blank for never)';
$lang['new_note'] = 'New Note';
$lang['my_tickets_assigned'] = 'Tickets assigned to me';
$lang['filter_by_assigned'] = 'By Assigned Member';
$lang['staff_stats_total_logged_time'] = 'Total Logged Time';
$lang['staff_stats_last_month_total_logged_time'] = 'Last Month Logged Time';
$lang['staff_stats_this_month_total_logged_time'] = 'This Month Logged Time';
$lang['staff_stats_last_week_total_logged_time'] = 'Last Week Logged Time';
$lang['staff_stats_this_week_total_logged_time'] = 'This Week Logged Time';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readability.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Description';
$lang['description_visible_to_customer'] = 'Show description to customer';
$lang['upcoming_tasks'] = 'Upcoming Tasks';
$lang['paymentmethod_two_checkout_account_number'] = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number'] = 'Card Number';
$lang['payment_credit_card_expiration_date'] = 'Expiration Date';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Billing Name';
$lang['submit_payment'] = 'Submit Payment';
$lang['2checkout_notice_payment'] = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'Disallow customer to edit this field';
$lang['project_due_notice'] = 'This project is overdue by %s days';
$lang['not_lead_added_attachment'] = 'added new attachment to lead %s';
$lang['lead_note_date_added'] = 'Note added: %s';
$lang['recurring_custom'] = 'Custom';
// Dont translate these, only added for better readability already translated for the expenses custom recurring feature.
$lang['invoice_recurring_months'] = $lang['expense_recurring_months'];
$lang['invoice_recurring_years'] = $lang['expense_recurring_years'];
$lang['invoice_recurring_days'] = $lang['expense_recurring_days'];
$lang['invoice_recurring_weeks'] = $lang['expense_recurring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Direction';
$lang['notify_project_members_status_change'] = 'Notify project members that project status is changed';
$lang['not_project_status_updated'] = 'Project status updated from %s to %s';
$lang['ticket_not_found'] = 'Ticket not found';
$lang['project_not_found'] = 'Project not found';
$lang['export_project_data'] = 'Экспорт данных проекта';
$lang['total_project_members'] = 'Total Project Members';
$lang['total_project_files'] = 'Files attached';
$lang['total_project_discussions_created'] = 'Discussions created';
$lang['project_member'] = 'Member';
$lang['total_project_discussions_comments'] = 'Total discussion comments';
$lang['staff_total_task_assigned'] = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks'] = 'Comments on tasks';
$lang['project_members_overview'] = 'Project members overview';
$lang['project_milestones_overview'] = 'Milestones overview';
$lang['total_tasks_in_milestones'] = 'Total tasks assigned';
$lang['total_task_members_assigned'] = 'Total members assigned';
$lang['total_task_members_followers'] = 'Total followers';
$lang['total_milestones'] = 'Всего этапов';
$lang['total_project_worked_days'] = 'Total days worked';
$lang['finance_overview'] = 'Finance Overview';
$lang['project_custom_fields'] = 'Custom fields';
$lang['total_tickets_related_to_project'] = 'Total tickets linked to project';
$lang['projects_total_invoices_created'] = 'Total invoices created';
$lang['total_invoiced_amount'] = 'Total invoices created';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Do not send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file'] = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment'] = 'File discussion comment deleted';
$lang['file_not_found'] = 'File not found';
$lang['email_template_discussion_info'] = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'In customer profile only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice'] = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice'] = 'Do not fill shipping address information if you wont use shipping address on customer invoices';
$lang['timesheets_overview'] = 'Timesheets overview';
$lang['invoice_status_draft'] = 'Черновик';
$lang['save_as_draft'] = 'Сохранить как черновик';
$lang['convert_and_save_as_draft'] = 'Convert and save as draft';
$lang['convert'] = 'Convert';
$lang['exclude_invoices_draft_from_client_area'] = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info'] = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info'] = 'Task Info';
$lang['recurring_tasks'] = 'Recurring';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recurring_months'] = $lang['expense_recurring_months'];
$lang['task_recurring_years'] = $lang['expense_recurring_years'];
$lang['task_recurring_days'] = $lang['expense_recurring_days'];
$lang['task_recurring_weeks'] = $lang['expense_recurring_weeks'];
$lang['todays_tasks'] = 'Today\'s tasks';
$lang['payment_mode_invoices_only'] = 'Invoices Only';
$lang['payment_mode_expenses_only'] = 'Expenses Only';
$lang['task_no_checklist_items_found'] = 'Checklist items not found for this task';
$lang['task_no_description'] = 'No description for this task';
$lang['expenses_reminders'] = 'Reminders';
$lang['expense_set_reminder_title'] = 'Set expense reminder';
$lang['calendar_expense_reminder'] = 'Expense Reminder';
$lang['recurring_task'] = 'Recurring Task';
$lang['disable_email_from_being_sent'] = 'Disable this email from being sent';
$lang['not_sent_indicator'] =  'Не отправлено';
$lang['proposal_status_revised'] =  'Исправлено';
$lang['customer_currency_change_notice'] =  'If the customer use other currency then the base currency make sure you select the appropriate currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content'] =  'Click here to add content';
$lang['related_to_project'] =  ' %s для %sа: %s';
$lang['back_to_lead'] =  'Back to lead';
$lang['add_task_timer_started_warning'] =  'Stop current started timer for this task to be able to add new timer manually.';
$lang['sending_email_contact_permissions_warning'] =  'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';

# Version 1.2.6
$lang['currently_supported_currencies'] = 'Currently supported currencies';
$lang['authorize_notice'] = 'SSL is required if you\'re using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.';
$lang['settings_paymentmethod_developer_mode'] = 'Developer Mode';
$lang['payment_cardholder_name'] = 'Cardholder\'s Name';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Key';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret Key';
$lang['leads_report_converted_notice'] =  'Only leads that belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method'] = 'Payment Method';
$lang['payment_method_info'] = 'Some payment gateways support different/multiple payment methods like Credit Card, PayPal, Bank.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Key';
$lang['project_invoice_select_all_expenses'] = 'Select all expenses';
$lang['role_update_staff_permissions'] = 'Update all staff members permissions that are using this role';
$lang['customer_active'] = 'Active';
$lang['note_updated_successfully'] = 'Note updated successfully';
$lang['update_note'] = 'Update note';
$lang['update_comment'] = 'Update comment';
$lang['comment_updated_successfully'] = 'Comment updated successfully';
$lang['staff_send_welcome_email'] = 'Send welcome email';
$lang['proposal_warning_email_change'] = 'Email changed for %s. This %s is linked to proposal/s. Do you want to update all proposals emails linked to %s?';
$lang['update_proposal_email_yes'] = 'Yes update all linked emails.';
$lang['update_proposal_email_no'] = 'No, i will update manually.';
$lang['proposals_emails_updated'] = 'All proposals emails linked to this %s updated to %s';
$lang['custom_field_company'] = 'Company';
$lang['actions'] = 'Действия';
$lang['project_mark_as'] = 'Mark as %s';
$lang['todo_edit_title'] = 'Edit todo item';
$lang['additional_action_required'] = 'Additional action required!';
$lang['project_mark_tasks_finished_confirm'] = 'Confirm';
$lang['project_marked_as_success'] = 'Project marked as %s successfully';
$lang['project_marked_as_failed'] = 'Failed to mark project as %s';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Auto assign as admin to customer after convert';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that do not have permission for customers VIEW';
$lang['auto_close_tickets_disable'] = 'Set 0 to disable';
$lang['task_checklist_item_completed_by'] = 'Completed by %s';
$lang['staff_email_signature_help'] = 'If empty default email signature from settings will be used';
$lang['customer_sales'] = 'Sales';
$lang['default_task_priority'] = 'Default Priority';
$lang['project_send_created_email'] = 'Send project created email';
$lang['survey_send_to_lists'] = 'Survey send lists';
$lang['survey_send_notice'] = 'Emails will be send via CRON JOB per hour.';
$lang['view_permission_auto_checked'] = 'VIEW permission auto checked. You need to select VIEW permission if you want to use the EDIT, CREATE and DELETE properly. EDIT, CREATE, DELETE cant be used without VIEW because VIEW is global permission and the user wont be able to open the data and perform the actions.';
$lang['custom_field_company_info'] = 'Edit custom fields for company in Setup->Settings->Company';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'Show invoice payments (transactions) on PDF';
$lang['bulk_actions'] = 'Массовые действия';
$lang['additional_filters'] = 'Дополнительные фильтры';
$lang['expenses_available_to_bill'] = 'Expenses available to bill';
$lang['bulk_action_customers_groups_warning'] = 'If you do not select any group all groups assigned to the selected customers will be removed.';
$lang['customer_attachments_show_in_customers_area'] = 'Show to customers area';
$lang['customer_attachments_show_notice'] = 'Only files uploaded from customer profile have ability to show/hide in customers area.';
$lang['customer_profile_files'] = 'Files';
$lang['no_files_found'] = 'No Files Found';
$lang['survey_customers_all'] = 'All Customers';
$lang['custom_field_column'] = 'Grid (Bootstrap Column eq. 12) - Max is 12';
$lang['task_status'] = 'Status';
$lang['task_status_1'] = 'Not Started';
$lang['task_status_2'] = 'Awaiting Feedback';
$lang['task_status_3'] = 'Testing';
$lang['task_status_4'] = 'In Progress';
$lang['task_status_5'] = 'Complete';
$lang['task_mark_as'] = 'Mark as %s';
$lang['task_marked_as_success'] = 'Task marked as %s successfully';
$lang['task_drag_drop_notice'] = 'Drag & Drop is used only to easily change %s. The order wont be applied for this area.';
$lang['search_tasks'] = 'Search Tasks';
$lang['tasks_kanban_limit'] = 'Limit tasks kan ban rows per status';
$lang['show_on_invoice_on_pdf'] = 'Show %s on Invoice PDF';
$lang['show_pay_link_to_invoice_pdf'] = 'Show Pay Invoice link to PDF (Not applied if invoice status is Cancelled)';
$lang['no_leads_found'] = 'No Leads Found';
$lang['created_today'] = 'Created Today';
$lang['total_tasks_deleted'] = 'Total Tasks Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['total_tickets_delete'] = 'Total Tickets Deleted: %s';
$lang['format_letter_portrait'] = 'Letter Portrait';
$lang['format_letter_landscape'] = 'Letter Landscape';
$lang['period_datepicker'] = 'Период';
$lang['total_by_hourly_rate'] = 'Total By Hourly Rate';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'Back to Project';
$lang['view_kanban'] = 'View Kan Ban';
$lang['invoice_is_overdue'] = 'This invoice is overdue by %s days';

# Version 1.2.9
$lang['time_decimal'] = 'Time (decimal)';
$lang['time_h'] = 'Time (h)';
$lang['proposal_number_prefix'] = 'Proposal Number Prefix';
$lang['settings_number_padding_prefix'] = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['this_week_payments'] = 'This Week Payments';
$lang['last_week_payments'] = 'Last Week Payments';
$lang['not_published_new_post'] = 'published new post';
$lang['expense_name'] = 'Name';
$lang['expense_name_help'] = 'For personal usage';
$lang['adjustments'] = 'Adjustments';
$lang['tax_breakdown'] = 'Tax Breakdown';
$lang['payments_received'] = 'Полученные платежи';
$lang['not_lead_activity_created_proposal'] = 'Created new proposal - %s';
$lang['lead_title'] = 'Position';
$lang['lead_address'] = 'Address';
$lang['lead_city'] = 'City';
$lang['lead_state'] = 'State';
$lang['lead_country'] = 'Country';
$lang['lead_zip'] = 'Zip Code';
$lang['lead_is_public_yes'] = 'Yes';
$lang['lead_is_public_no'] = 'No';
$lang['lead_info'] = 'Lead Information';
$lang['lead_general_info'] = 'General Information';
$lang['lead_latest_activity'] = 'Latest Activity';
$lang['item_description_new_lines_notice'] = 'New lines are not supported for item description. Use the item long description instead.';
$lang['estimates_report'] = 'Отчет по сметам';
$lang['confirm'] = 'Confirm';
$lang['delete_staff'] = 'Delete Staff Member';
$lang['delete_staff_info'] = 'Some data for this staff member needs to be transfered to another user. Please select user where you want to transfer the data.';
$lang['estimate_items'] = 'Estimate Items';
$lang['no_proposals_found'] = 'No Proposals Found';
$lang['no_estimates_found'] = 'No Estimates Found';
$lang['pipeline_limit_status'] = 'Pipeline limit per status';
$lang['settings_update'] = 'System Update';
$lang['purchase_key'] = 'Purchase Key';
$lang['update_now'] = 'Update Now';
$lang['update_available'] = 'An update is available';
$lang['latest_version'] = 'Latest Version';
$lang['your_version'] = 'Your Version';
$lang['using_latest_version'] = 'You are using the latest version';
$lang['mark_as_active'] = 'Mark as active';
$lang['customer_inactive_message'] = 'This is inactive customer profile and some features may be disabled';
$lang['active_customers'] = 'Active Customers';
$lang['inactive_active_customers'] = 'Inactive Customers';
$lang['include_proposal_items_merge_field_help'] = 'Include proposal items with merge field anywhere in proposal content as %s';
$lang['all_data_synced_successfully'] = 'All data synced successfully';
$lang['sync_now'] = 'Sync Now';
$lang['sync_data'] = 'Sync Data';
$lang['sync_proposals_up_to_date'] = 'All proposals are up to date, nothing to sync';
$lang['proposal_sync_1_info'] = 'All proposal data is stored separately for each proposal after creation. Updating the %s info wont affect previous created proposals for this %s.';
$lang['proposal_sync_2_info'] = 'If you recently updated your %s info you can sync all new data to associated proposals. Here is a list of fields you can sync.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Include additional details to item long description taken from this expense.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Calendar Events Limit (Month and Week View)';
$lang['show_page_number_on_pdf'] = 'Show page number on PDF';
$lang['customer_active_inactive_help'] = 'Wont be shown in dropdowns when creating new records';
$lang['item_groups'] = 'Groups';
$lang['item_group'] = 'Item Group';
$lang['item_group_name'] = 'Group Name';
$lang['new_item_group'] = 'New Group';
$lang['show_setup_menu_item_only_on_hover'] = 'Show setup menu item only when hover with mouse on main sidebar area';
$lang['internal_article'] = 'Internal Article';
$lang['expenses_created_from_this_recurring_expense'] = 'Created expenses from this recurring expense';
$lang['convert_to_task'] = 'Convert To Task';
$lang['next_invoice_date'] = 'Next Invoice Date: %s';
$lang['next_expense_date'] = 'Next Expense Date: %s';
$lang['invoice_recurring_from'] = 'This invoice is created from recurring invoice with number: %s';
$lang['expense_recurring_from'] = 'This expense is created from the following recurring expense: %s';
$lang['child_invoices'] = 'Child Invoices';
$lang['child_expenses'] = 'Child Expenses';
$lang['no_announcements'] = 'No Announcements';
$lang['unit'] = 'Unit';
$lang['permission_view_own'] = 'View (Own)';
$lang['permission_global'] = 'Global';
$lang['permission_customers_based_on_admins'] = 'Based on customer admins';
$lang['permission_payments_based_on_invoices'] = 'Based on invoices VIEW (Own) permission';
$lang['permission_projects_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only projects where staff member is added as project member.';
$lang['permission_tasks_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only tasks where staff member is follower,assigned, task is public or in Setup->Settings->Tasks-> Allow all staff to see all tasks related to projects is set to YES when task is linked to project.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Selected by default on invoice';
$lang['paymentmethod_braintree_merchant_id'] = 'Merchant ID';
$lang['paymentmethod_braintree_private_key'] = 'Private Key';
$lang['paymentmethod_braintree_public_key'] = 'Public Key';
$lang['company_requires_vat_number_field'] = 'Company requires the usage of the VAT Number field';
$lang['no_company_view_profile'] = 'Person - View Profile';
$lang['company_is_required'] = 'Company field is required?';
$lang['estimate_invoiced'] = 'Invoiced';
$lang['file_date_uploaded'] = 'Date Uploaded';
$lang['allow_contact_to_delete_files'] = 'Allow contacts to delete own files uploaded from customers area';
$lang['file'] = 'File';
$lang['customer_contact_person_only_one_allowed'] = 'Only 1 contact is allowed when the company field is not filled. The system will cast this customer as person';
$lang['web_to_lead'] = 'Web to Lead';
$lang['web_to_lead_form'] = 'Web to Lead Form';
$lang['new_form'] = 'New Form';
$lang['form_name'] = 'Form Name';
$lang['cf_option_in_use'] = 'An option you removed is in use and cant be removed. The option is auto appended to the existing options.';
$lang['form_builder'] = 'Form Builder';
$lang['form_information'] = 'Form Informations & Setup';
$lang['form_builder_create_form_first'] = 'Create form first to be able to use the form builder.';
$lang['notify_assigned_user'] = 'Responsible person';
$lang['form_recaptcha'] = 'Use Google Recaptcha';
$lang['form_lang_validation'] = 'Language';
$lang['form_lang_validation_help'] = 'For Validation Messages';
$lang['form_btn_submit_text'] = 'Submit button text';
$lang['form_success_submit_msg'] = 'Message to show after form is succcesfuly submitted';
$lang['total_submissions'] = 'Total Submissions';
$lang['form_integration_code'] = 'Integration Code';
$lang['not_lead_imported_from_form'] = 'New Lead Imported from Web to Lead Form - %s';
$lang['not_lead_activity_log_attachment'] = 'Attachment Imported from form - %s';
$lang['form_integration_code_help'] = 'Copy & Paste the code anywhere in your site to show the form, additionaly you can adjust the width and height px to fit for your website.';
$lang['invoice_not_found'] = 'Invoice not found';
$lang['estimate_not_found'] = 'Estimate not found';
$lang['expense_not_found'] = 'Expense not found';
$lang['proposal_not_found'] = 'Proposal not found';
$lang['new_task_assigned_non_user'] = 'New task is assigned to you - %s';
$lang['no_child_found'] = 'No Child %s Found';
$lang['company_vat_number'] = 'VAT Number';
$lang['not_lead_assigned_from_form'] = 'New lead is assigned to you';
$lang['not_lead_activity_assigned_from_form'] = 'Lead assigned to %s';
$lang['form_allow_duplicate'] = 'Allow duplicate %s to be inserted into database?';
$lang['track_duplicate_by_field'] = 'Prevent duplicate on field';
$lang['and_track_duplicate_by_field'] = '+ field (leave blank to track duplicates only by 1 field)';
$lang['create_the_duplicate_form_data_as_task'] = 'Create duplicate %s data as task and assign to responsible staff member';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Used for further review on the submission and take the necessary action';
$lang['currently_selected'] = 'Currently Selected';
$lang['search_ajax_empty'] = 'Select and begin typing';
$lang['search_ajax_placeholder'] = 'Type to search...';
$lang['search_ajax_searching'] = 'Ищем...';
$lang['search_ajax_initialized'] = 'Start typing to search';
$lang['lead_description'] = 'Description';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = 'Invoice auto created from estimate with number %s';
$lang['hour_of_day_perform_auto_operations'] = 'Hour of day to perform automatic operations';
$lang['hour_of_day_perform_auto_operations_format'] = '24 hours format eq. 9 for 9am or 15 for 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Used for recurring invoices, overdue notices etc..';
$lang['use_minified_files'] = 'Use minified files version for css and js (only system files)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles'] = 'Поиск в базе знаний';
$lang['kb_search'] = 'Поиск';
$lang['have_a_question'] = 'Что ищете?';
$lang['card_expiration_year'] = 'Expiration Year';
$lang['card_expiration_month'] = 'Expiration Month';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Search Project Members...';
$lang['cf_translate_input_link_title'] = 'Title';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Click here to add link';
$lang['task_edit_delete_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username'] = 'IMAP Username';
$lang['department_username_help'] = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted'] = 'Total tickets deleted: %s';

# Version 1.5.1
$lang['ticket_linked_to_project'] = 'This ticket is linked to project: %s';
$lang['only_own_files_contacts'] = 'Contacts see only own files uploaded in customer area';
$lang['only_own_files_contacts_help'] = 'If you share the file manually from customer profile to other contacts they wil be able to see the file.';
$lang['share_file_with'] = 'Share File With';
$lang['file_share_visibility_notice'] = 'This file is not shared with contacts, toggle visibility again to reload';
$lang['share_file_with_show'] = 'This file is shared with: %s';
$lang['allow_primary_contact_to_view_edit_billing_and_shipping'] = 'Allow primary contact to view/edit billing & shipping details';
$lang['estimate_due_after'] = 'Estimate Due After (days)';


# Version 1.6.0
$lang['my_timesheets'] = 'My Timesheets';
$lang['today'] = 'Today';
$lang['open_in_dropbox'] = 'Open In Dropbox';
$lang['show_primary_contact'] = 'Показать полное имя первичного контакта в %s';
$lang['view_members_timesheets'] = 'View all timesheets';
$lang['priority'] = 'Priority';
$lang['fetch_from_google'] = 'Fetch from google';
$lang['customer_fetch_lat_lng_usage'] = 'Fill address, city and country before fetching to get best result.';
$lang['g_search_address_not_found'] = 'The address couldn\'t be found, please try again';
$lang['proposals_report'] = 'Отчет о предложениях';
$lang['staff_members_open_tickets_to_all_contacts_help'] = 'If staff member don\'t have permission for customers VIEW only will be able to create new tickets from admin area to customer contacts where is assigned as customer admin.';
$lang['staff_members_open_tickets_to_all_contacts'] = 'Allow staff members to open tickets to all contacts?';
$lang['charts_based_report'] = 'Charts Based Report';
$lang['delete_backups_older_then'] = 'Auto delete backups older then X days (set 0 to disable)';
$lang['responsible_admin'] = 'Responsible admin';
$lang['tags'] = 'Tags';
$lang['tag'] = 'Tag';
$lang['customer_map_notice'] = 'Add longitude and latitude in the customer profile to show the map here';
$lang['default_view'] = 'Default View';
$lang['day'] = 'Day';
$lang['agenda'] = 'Agenda';
$lang['timesheet_tags'] = 'Timesheet Tags';
$lang['show_more'] = 'Show more';
$lang['show_less'] = 'Show less';
$lang['project_completed_date'] = 'Completed Date';
$lang['language'] = 'Language';
$lang['this_week'] = 'This Week';
$lang['last_week'] = 'Last Week';
$lang['this_month'] = 'This Month';
$lang['last_month'] = 'Last Month';
$lang['no_description_project'] = 'No description for this project';
$lang['sales_string'] = 'Sales';
$lang['no_project_members'] = 'No members for this project';
$lang['search_by_tags'] = 'Используте # + имя тега для поиска по тегам';
$lang['project_status_5'] = 'Cancelled';

# Version 1.7.0
$lang['not_activity_new_reminder_created'] = 'set a new reminder for %s with date %s';
$lang['not_activity_new_task_created'] = 'Created new task - %s';
$lang['recurring_invoice_draft_notice'] = 'This invoice is with status draft, you need to mark this invoice as sent. Recurring invoices with status draft won\'t be recreated by cron job.';
$lang['recurring_recreate_hour_notice'] = '%s will be recreated on specific hour of the day based from the setting located at Setup->Settings-Cron Job';
$lang['invoice_project_include_timesheets_notes'] = 'Include each timesheet note in item description';
$lang['events'] = 'Events';
$lang['clear'] = 'Clear';
$lang['auto_mark_as_public'] = 'Auto mark as public';
$lang['time_format'] = 'Time Format';
$lang['time_format_24'] = '24 hours';
$lang['time_format_12'] = '12 hours';
$lang['delete_activity_log_older_then'] = 'Delete system activity log older then X months';
$lang['mark_as_read'] = 'Mark as Read';
$lang['mark_all_as_read'] = 'Mark all as read';
$lang['tax_1'] = 'Tax 1';
$lang['tax_2'] = 'Tax 2';
$lang['total_with_tax'] = 'Total with tax';
$lang['new_task_auto_assign_current_member'] = 'Auto assign task creator when new task is created';
$lang['new_task_auto_assign_current_member_help'] = 'Not applied if task is linked to project and the creator is not project member';
$lang['copy_project_tasks_status'] = 'Tasks Status';
$lang['tasks_summary'] = 'Tasks Summary';
$lang['show_gantt_by'] = 'Show Gantt View by';
$lang['vault'] = 'Vault';
$lang['new_vault_entry'] = 'New Vault Entry';
$lang['server_address'] = 'Server Address';
$lang['port'] = 'Port';
$lang['vault_username'] = 'Username';
$lang['vault_password'] = 'Password';
$lang['vault_description'] = 'Short Description';
$lang['vault_entry'] = 'Vault Entry';
$lang['no_port_provided'] = 'Not provided';
$lang['view_password'] = 'View Password';
$lang['security_reasons_re_enter_password'] = 'For security reasons please enter your password below';
$lang['password_change_fill_notice'] = 'Only fill password field if you want to change the password';
$lang['vault_password_user_not_correct'] = 'Your password is not correct, please try again';
$lang['no_vault_entries'] = 'Vault entries not found for this customer.';
$lang['vault_entry_created_from'] = 'This vault entry is created by %s';
$lang['vault_entry_last_update'] = 'Last updated by %s';
$lang['vault_entry_visible_to_all'] = 'Visible to all staff member who have access to this customer';
$lang['vault_entry_visible_creator'] = 'Visible only to me (administrator are not excluded)';
$lang['vault_entry_visible_administrators'] = 'Visible only to administrators';
$lang['my_reminders'] = 'My Reminders';
$lang['reminder_related'] = 'Related to';
$lang['event_notification'] = 'Notification';
$lang['days'] = 'Days';
$lang['reminder_notification_placeholder'] = 'Eq. 30 minutes before';
$lang['event_color'] = 'Event Color';
$lang['group_by_task'] = 'Group by Task';
$lang['save'] = 'Save';
$lang['disable_languages'] = 'Disable Languages';
