<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_FROM_ADDR' => 'Dirección del Remitente:',
    'LBL_REPLY_ADDR' => 'Dirección "Responder a":',
    'LBL_REPLY_NAME' => 'Nombre de "Responder A":',

    'LBL_MODULE_NAME' => 'Campañas',
    'LBL_MODULE_TITLE' => 'Campañas: Inicio',
    'LBL_NEWSLETTER_TITLE' => 'Campaigns: Newsletters',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Campañas',
    'LBL_LIST_FORM_TITLE' => 'Lista de Campañas',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Lista de Boletines de noticias',
    'LBL_CAMPAIGN_NAME' => 'Nombre:',
    'LBL_CAMPAIGN' => 'Campaña:',
    'LBL_NAME' => 'Nombre:',
    'LBL_INVITEE' => 'Contactos',
    'LBL_LIST_CAMPAIGN_NAME' => 'Campaña',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TYPE' => 'Tipo',
    'LBL_LIST_START_DATE' => 'Fecha Inicio',
    'LBL_LIST_END_DATE' => 'Fecha Fin',
    'LBL_DATE_ENTERED' => 'Fecha de Creación',
    'LBL_DATE_MODIFIED' => 'Fecha de Modificación',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_CREATED' => 'Creado Por:',
    'LBL_TEAM' => 'Equipo:',
    'LBL_ASSIGNED_TO' => 'Asignado a:',
    'LBL_ASSIGNED_TO_ID' => 'Asignado a:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_CAMPAIGN_START_DATE' => 'Fecha de inicio:',
    'LBL_CAMPAIGN_END_DATE' => 'Fecha de Fin:',
    'LBL_CAMPAIGN_STATUS' => 'Estado:',
    'LBL_CAMPAIGN_BUDGET' => 'Presupuesto:',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Coste esperado:',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Coste actual:',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Ingresos esperados:',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'Impresiones:',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coste por Impresión:',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coste por clic a través:',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Oportunidades Ganadas:',
    'LBL_CAMPAIGN_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Objetivo:',
    'LBL_CAMPAIGN_CONTENT' => 'Descripción:',
    'LBL_CAMPAIGN_DAYS_REMAIN' => 'Days Remaining',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "Campaña  '{0}' está Inactiva. Debería cambiar el estado como Activa.",
    'LNK_NEW_CAMPAIGN' => 'Crear Campaña',
    'LNK_CAMPAIGN_LIST' => 'Ver Campañas',
    'LNK_IMPORT_CAMPAIGNS' => 'Importar Campañas',
    'LNK_NEW_PROSPECT' => 'Crear Público Objetivo',
    'LNK_PROSPECT_LIST' => 'Ver Público Objetivo',
    'LNK_NEW_PROSPECT_LIST' => 'Crear Lista de Público Objetivo',
    'LNK_PROSPECT_LIST_LIST' => 'Ver Listas de Público Objetivo',
    'LBL_MODIFIED_BY' => 'Modificado por:',
    'LBL_CREATED_BY' => 'Creado Por:',
    'LBL_TRACKER_TITLE' => 'Detalles de rastreo',
    'LBL_TRACKER_KEY' => 'Rastreador:',
    'LBL_TRACKER_URL' => 'URL de Seguimiento:',
    'LBL_TRACKER_TEXT' => 'Texto del enlace del rastreador:',
    'LBL_TRACKER_COUNT' => 'Recuento de seguimientos:',
    'LBL_REFER_URL' => 'URL de redireccionamiento de seguimiento:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campañas',
    'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Email Campaigns',
    'LBL_NEW_FORM_TITLE' => 'Nueva Campaña',
    'LBL_TRACKED_URLS' => 'URLs de Sequimiento',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'URLs de Seguimiento',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Lista de Público Objetivo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Marketing por Email',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Nueva Plantilla de Email',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Ver Plantillas de Email',
    'LBL_TRACK_BUTTON_TITLE' => 'Ver Estado',
    'LBL_TRACK_BUTTON_KEY' => 'T',
    'LBL_TRACK_BUTTON_LABEL' => 'Ver Estado',
    'LBL_QUEUE_BUTTON_TITLE' => 'Enviar Emails',
    'LBL_QUEUE_BUTTON_KEY' => 'U',
    'LBL_QUEUE_BUTTON_LABEL' => 'Enviar Emails',
    'LBL_TEST_BUTTON_TITLE' => 'Enviar Prueba',
    'LBL_TEST_BUTTON_KEY' => 'e',
    'LBL_TEST_BUTTON_LABEL' => 'Enviar Prueba',
    'LBL_COPY_AND_PASTE_CODE' => 'O copiar y pegar el siguiente código HTML en una página existente',
    'LBL_CHARSET_NOTICE' => 'NOTA: Por favor, asegúrese de que la página que contiene el formulario web-to-lead tiene las siguientes líneas en la sección <head>:',

    'LBL_TODETAIL_BUTTON_TITLE' => 'Ver Detalles',
    'LBL_TODETAIL_BUTTON_KEY' => 'T',
    'LBL_TODETAIL_BUTTON_LABEL' => 'Ver Detalles',

    'LBL_DEFAULT' => 'Todas las Listas de Público Objetivo',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Cola de Mensajes',
    'LBL_LOG_ENTRIES_TITLE' => 'Responses',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Mensaje Enviado/Intentado',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Mensajes Rebotados,Otras causas',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Mensajes Rebotados,Email no válido',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Enlace',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Mensaje Visto',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Descartados',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Clientes Portenciales Creados',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Clientes Potenciales',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contactos Creados',

    'LBL_BACK_TO_CAMPAIGNS' => 'Back to Campaigns',
    //error messages.
    'ERR_NO_EMAIL_MARKETING' => 'There must be at least one active Email Marketing message associated with the campaign.',
    'ERR_NO_TARGET_LISTS' => 'There must be at least one Target List associated with the campaign.',
    'ERR_NO_TEST_TARGET_LISTS' => 'There must be at least one Target List of type Test associated with the campaign.',
    'ERR_SENDING_NOW' => 'Los mensajes están siendo enviados, por favor inténtelo de nuevo más tarde.',
    'ERR_MESS_NOT_FOUND_FOR_LIST' => 'No Email Marketing message found for this target list',
    'ERR_MESS_DUPLICATE_FOR_LIST' => 'Multiple Email Marketing messages are defined for this target list',
    'ERR_FIX_MESSAGES' => 'Please correct the following errors before proceeding',

    'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
    'LBL_TRACK_ROI_BUTTON_LABEL' => 'Ver ROI',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Eliminar Entradas de Pruebas',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Eliminar Entradas de Pruebas',
    'LBL_TRACK_DELETE_CONFIRM' => 'Esta opción eliminará las entradas del registro creadas por el juego de pruebas. ¿Desea continuar?',
    'ERR_NO_MAILBOX' => "Los siguientes mensajes de marketing no tiene una cuenta de correo asociada.<BR>Por favor, corrija este problema antes de continuar.",
    'LBL_LIST_TO_ACTIVITY' => 'Ver Estado',
    'LBL_CURRENCY_ID' => 'Currency ID',
    'LBL_CURRENCY' => 'Moneda:',
    'LBL_ROLLOVER_VIEW' => 'Rollover a bar to view details.',
    'LBL_TARGETED' => 'Objetivos',
    'LBL_TOTAL_TARGETED' => 'Total Objetivos',
    'LBL_CAMPAIGN_FREQUENCY' => 'Frecuencia:',
    'LBL_NEWSLETTERS' => 'Ver Boletines de Noticias',
    'LBL_NEWSLETTER' => 'Boletín de Noticias',
    'LBL_SURVEY' => 'Encuesta',
    'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
    'LBL_MORE_DETAILS' => 'More Details',
    'LBL_CREATE_NEWSLETTER' => 'Nuevo Boletín de Noticias',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'Opciones del Correo Entrante',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => 'Configuración de correo electrónico entrante (info)',
    'LBL_INBOUND_EMAIL_CREATE' => 'Crear correo electrónico entrante',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => 'Crear buzón de entrada (info)',
    'LBL_STATUS_TEXT' => 'Estado:',
    'LBL_FROM_MAILBOX_NAME' => 'Nombre de la cuenta de gestión de rebotes (bounces):',
    'LBL_FROM_MAILBOX_TITLE' => 'Cuenta de correo electrónico para la gestión de rebotes (bounces):',
    'LBL_OUTBOUND_MAILBOX_NAME' => 'Cuenta de correo electrónico saliente:',
    'LBL_FROM_NAME' => 'Nombre del Remitente:',
    'LBL_START_DATE_TIME' => 'Programar hora y fecha:',
    'LBL_DATE_START' => 'Fecha de Inicio',
    'LBL_TIME_START' => 'Hora de Inicio',
    'LBL_TEMPLATE' => 'Plantilla de correo electrónico:',
    'LBL_TEMPLATE_FIELD' => 'Plantilla de correo electrónico:',
    'LBL_SUBJECT' => 'Asunto:',
    'LBL_WIDTH' => 'Ancho por defecto:',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Crear',
    'LBL_MESSAGE_FOR' => 'Enviar Este Mensaje A:',
    'LBL_FINISH' => 'Finalizar',
    'LBL_ALL_PROSPECT_LISTS' => 'Todas las Listas de Público Objetivo en la Campaña.',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
    'LBL_EMAIL_SETUP_WIZARD' => 'Configurar Email',
    'LBL_DIAGNOSTIC_WIZARD' => 'Ver Diagnósticos',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Boletines de Noticias Suscritos',
    'LBL_UNSUBSCRIBED_HEADER' => 'Boletines de Noticias Disponibles/Sin Suscripción',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Al mover el boletín de noticias a la lista de Boletines de Noticias Disponibles/Sin Suscripción añadirá el contacto a la Lista de Sin Suscripción para este boletín de noticias.  El contacto no será eliminado de la Lista de Suscripción o Lista de Público Objetivo original.',
    'LBL_FILTER_CHART_BY' => 'Filtrar Gráfico Por:',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Administrar Subscripciones',
    'LBL_MARK_AS_SENT' => 'Marcar Como Enviado',
    'LBL_DEFAULT_LIST_NOT_FOUND' => 'Target list of type default was not found',
    'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'No entries were found',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Las entradas han sido procesadas',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'Nombre de Seguimiento',
    'LBL_EDIT_TRACKER_URL' => 'URL de Seguimiento',
    'LBL_EDIT_OPT_OUT_' => '¿Enlace para rehusar?',
    'LBL_EDIT_OPT_OUT' => 'Enlace para rehusar:',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Lista de bajas:',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'Lista de Suscripción:',
    'LBL_TEST_LIST_NAME' => 'Lista de pruebas:',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'No suscripción',
    'LBL_SUBSCRIPTION_TYPE_NAME' => 'Suscripción',
    'LBL_TEST_TYPE_NAME' => 'Pruebas',
    'LBL_UNSUBSCRIPTION_LIST' => 'Lista de No suscripción',
    'LBL_SUBSCRIPTION_LIST' => 'Lista de Suscripción',
    'LBL_MRKT_NAME' => 'Nombre de Email Marketing',
    'LBL_MRKT_NAME_FIELD' => 'Nombre de Email Marketing:',
    'LBL_TEST_LIST' => 'Lista de Pruebas',
    'LBL_WIZARD_HEADER_MESSAGE' => 'Rellene los campos requerido para ayudar a identificar la campaña.',
    'LBL_WIZARD_BUDGET_MESSAGE' => 'Entrar en el presupuesto para calcular el retorno de la inversión (ROI)',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'Seleccione o cree una lista de público objetivo para utilizar con su campaña.  Esta lista se usará para enviar emails con sus mensajes de marketing.',
    'LBL_WIZARD_TARGET_MESSAGE2' => 'Crear nueva lista de público objetivo:',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'Defina aquí un URL de seguimiento para utilizar con esta campaña. Debe introducir tanto el nombre como el URL para crear el seguimiento.',
    'LBL_HOME_START_MESSAGE' => '¿Qué tipo de campaña te gustaría crear?',
    'LBL_WIZARD_MARKETING_MESSAGE' => 'Fill out the form below to create an email instance for your newsletter.  This will allow you to specify the information regarding when and how your newsletter should be distributed.',
    'LBL_WIZARD_SENDMAIL_MESSAGE' => 'This is the last step in the process.  Select whether you wish to send out a test email, schedule your newsletter for distribution, or save the changes and proceed to the summary page.',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Ya está en el último paso.',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Ya está en el primer paso.',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Encabezado de la Campaña',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Presupuesto de la Campaña',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'URLs de seguimiento de la Campaña',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Información de Suscripción',
    'LBL_WIZ_MARKETING_TITLE' => 'Email de Marketing',
    'LBL_WIZ_SENDMAIL_TITLE' => 'Seleccione registro de email a enviar (Email Marketing)',
    'LBL_WIZ_EMAILTPL_TITLE' => 'Seleccione la plantilla de correo electrónico',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Resumen',
    'LBL_NAVIGATION_MENU_GEN1' => 'Encabezado de la Campaña',
    'LBL_NAVIGATION_MENU_GEN2' => 'Presupuesto',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'Rastreadores',
    'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Enviar Email',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Subscripciones',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'Resumen',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'Enviar correo electrónico y ver Resumen',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo Suscripción para esta campaña.<br>  Esta lista de público objetivo se usará para enviar los emails de esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo No suscripción para esta campaña.  <br>Esta lista de público objetivo contendrá los nombres de las personas que han decidido no participar en su campaña y no deberían ser contactados por email. <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo Pruebas para esta campaña.  <br>Esta lista de público objetivo se usará para enviar emails de pruebas para esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
    'LBL_ADD_TRACKER' => 'Nuevo Seguimiento',
    'LBL_TRACKERS' => 'Rastreadores',
    'LBL_ADD_TARGET' => 'Añadir',
    'LBL_CREATE_TARGET' => 'Crear',
    'LBL_SELECT_TARGET' => 'Usar Lista de Público Objetivo existente',
    'LBL_REMOVE' => 'Quitar', // PR 5451
    'LBL_CONFIRM' => 'Inicio',
    'LBL_START' => 'Iniciar',
    'LBL_TOTAL_ENTRIES' => 'Entradas',
    'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Save work and proceed to Marketing Email',
    'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Save Options',
    'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Do you wish to save the information and exit?',
    'LBL_CONFIRM_SEND_SAVE' => 'Está a punto de terminar y proceder con la página de Envío de Email de Campaña.  ¿Desea guardar los cambios y continuar?',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'Boletín de noticias:',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editar boletín de noticias:',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editar Campaña:',
    'LBL_SEND_AS_TEST' => 'Enviar Marketing por Email como Pruebas',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Guardar',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Siguiente',
    'LBL_TARGET_LISTS' => 'Listas de Público Objetivo',
    'LBL_NO_SUBS_ENTRIES_WARNING' => 'No puede enviar un email de marketing hasta que su lista de suscriptores tenga al menos una entrada.  Puede rellenar su lista tras finalizar.',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'No puede enviar un email de marketing hasta que su lista de público objetivo tenga al menos una entrada.  Puede rellenar su lista tras finalizar.',
    'LBL_NO_TARGETS_WARNING' => 'No puede enviar un email de marketing hasta que su campaña tenga al menos una lista de público objetivo.',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'No tiene objetivos relacionados en sus listas de público objetivo seleccionadas para esta campaña.  Puede rellenar la lista después de terminar.',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'No ha seleccionado la lista de público objetivo para esta campaña.',
    'LBL_NONE' => 'ninguna creada',
    'LBL_CAMPAIGN_WIZARD' => 'Asistente de Campañas',
    'LBL_EMAIL' => 'Email',
    'LBL_OTHER_TYPE_CAMPAIGN' => 'Campaña no basada en email',
    'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Campaign Type',
    'LBL_TARGET_LIST' => 'Lista de Público Objetivo',
    'LBL_TARGET_TYPE' => 'Tipo de Lista de Público Objetivo:',
    'LBL_TARGET_NAME' => 'Nombre de Lista de Público Objetivo',
    'LBL_NUMBER_OF_TARGET' => 'Número de objetivo',
    'LBL_EMAILS_SCHEDULED' => 'Emails Planificados',
    'LBL_TEST_EMAILS_SENT' => 'Probar Emails Enviados',
    'LBL_USERS_CANNOT_OPTOUT' => 'Los Usuarios de Sistema no pueden optar por no recibir emails.',
    'LBL_ELECTED_TO_OPTOUT' => 'Ha elegido optar por no recibir emails.',
    'LBL_COPY_OF' => 'Copia de ',
    'LBL_SAVED_SEARCH' => 'Búsquedas y Diseños Guardados',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'Nombre del Remitente:',
    'LBL_WIZ_FROM_ADDRESS' => 'Dirección del Remitente:',
    'LBL_EMAILS_PER_RUN' => 'Número de emails enviados por lote:',
    'LBL_CUSTOM_LOCATION' => 'Definida por el Usuario',
    'LBL_DEFAULT_LOCATION' => 'Por Defecto',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Sólo se permiten valores enteros para el Número de emails enviados por lote',
    'LBL_LOCATION_TRACK' => 'Localización de los archivos de seguimiento de la campaña (como campaign_tracker.php):',
    'LBL_MAIL_SENDTYPE' => 'Agente de Transferencia de Correo (MTA):',
    'LBL_MAIL_SMTPAUTH_REQ' => '¿Utilizar Autenticación SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contraseña SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP',
    'LBL_MAIL_SMTPUSER' => 'Nombre de usuario SMTP',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Configuración de Email para Campañas',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor de site_url en Config.php',
    'LBL_NOTIFY_TITLE' => 'Opciones de Notificación por Email',
    'LBL_MASS_MAILING_TITLE' => 'Opciones de Envío de Correo Masivo',
    'LBL_SERVER_TYPE' => 'Protocolo del Servidor de Correo',
    'LBL_SERVER_URL' => 'Dirección del Servidor de Correo',
    'LBL_LOGIN' => 'Nombre de Usuario',
    'LBL_PORT' => 'Puerto del Servidor de Correo',
    'LBL_MAILBOX_NAME' => 'Nombre de Cuenta de Correo:',
    'LBL_PASSWORD' => 'Contraseña',
    'LBL_MAILBOX_DEFAULT' => 'BANDEJA DE ENTRADA',
    'LBL_MAILBOX' => 'Carpeta Monitorizada',
    'LBL_NAVIGATION_MENU_SETUP' => 'Configuración de Email',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nueva Cuenta de Correo',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Se han detectado cuentas de correo con gestión de rebote de correo.  No necesita crear una nueva, pero puede hacerlo a continuación si aun así lo desea.',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'No se ha detectado ninguna cuenta de correo con gestión de rebote de correo. Por favor, cree una nueva a continuación.',
    'LBL_CAMP_MESSAGE_COPY' => 'Guardar copias de los mensajes de la campaña:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de email enviado durante todas las campañas?  <bold>Se recomienda el valor por defecto de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual.',
    'LBL_YES' => 'Sí',
    'LBL_NO' => 'No',
    'LBL_DEFAULT_FROM_ADDR' => 'Default: ',
    'LBL_EMAIL_SETUP_DESC' => 'Rellene el siguiente formulario para modificar su configuración del sistema de forma que puedan enviarse los emails de la campaña.',
    'LBL_CREATE_MAILBOX' => 'Crear Nueva Cuenta de Correo',
    'LBL_SSL_DESC' => 'Si su servidor de correo soporta conexiones seguras de sockets (SSL), habilitar esta opción forzará conexiones SSL al importar el correo.',
    'LBL_SSL' => 'Usar SSL',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campaña puede no tener el comportamiento deseado y sus emails puede que no sean enviados por las siguientes razones:',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnósticos de Campaña',
    'LBL_DIAGNOSTIC' => 'Diagnostic',
    'LBL_MAILBOX_CHECK1_GOOD' => 'Cuentas de correo con gestión de rebote detectadas:',
    'LBL_MAILBOX_CHECK1_BAD' => 'No se han detectado cuentas de correo con gestión de rebote.',
    'LBL_MAILBOX_CHECK2_GOOD' => 'Las opciones de E-mail han sido configuradas:',
    'LBL_MAILBOX_CHECK2_BAD' => 'Por favor, configure la dirección de e-mail de su sistema. Las opciones no han sido configuradas o son inválidas. La dirección \\"De\\" no puede contener example.com.',
    'LBL_SCHEDULER_CHECK_GOOD' => 'Se han detectado Planificadores',
    'LBL_SCHEDULER_CHECK_BAD' => 'No se han detectado Planificadores',
    'LBL_SCHEDULER_CHECK1_BAD' => 'No se ha configurado el Planificador para procesar los Emails Rebotados de Campaña.',
    'LBL_SCHEDULER_CHECK2_BAD' => 'No se ha configurado el Planificador para procesar los Emails de Campaña.',
    'LBL_SCHEDULER_NAME' => 'Planificador',
    'LBL_SCHEDULER_STATUS' => 'Estado',
    'LBL_MARKETING_CHECK1_GOOD' => 'Email marketing components detected.',
    'LBL_MARKETING_CHECK1_BAD' => 'No Email marketing components detected, you will need to create one to mail out a campaign.',
    'LBL_MARKETING_CHECK2_GOOD' => 'Target lists detected.',
    'LBL_MARKETING_CHECK2_BAD' => 'No target lists detected, you will need to create one from desired campaign screen.',
    'LBL_EMAIL_SETUP_WIZ' => 'Lanzar Configuración de Email',
    'LBL_SCHEDULER_LINK' => 'ir a la pantalla de administración del planificador.',
    'LBL_TO_WIZARD' => 'launch',
    'LBL_TO_WIZARD_TITLE' => 'Lanzar Asistente',
    'LBL_EDIT_EXISTING' => 'Editar Campaña',
    'LBL_EDIT_TARGET_LIST' => 'Edit Target List',
    'LBL_SEND_EMAIL' => 'Enviar correo a una hora programada',
    'LBL_USE_EXISTING' => 'Use Existing',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Crear Nuevo Email de Marketing',
    'LBL_CHOOSE_NEXT_STEP' => 'Choose your next step',
    'LBL_NON_ADMIN_ERROR_MSG' => 'Por favor, notifíqueselo a su administrador del sistema para que corrija este problema',
    'LBL_EMAIL_COMPONENTS' => 'Componentes de Email',
    'LBL_SCHEDULER_COMPONENTS' => 'Componentes del Planificador',
    'LBL_RECHECK_BTN' => 'Comprobar de Nuevo',
    //web to lead wizard titles
    'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Create Lead Form: Select fields',
    'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Create Lead Form: Form properties',
    'LBL_DRAG_DROP_COLUMNS' => 'Drag and drop lead fields in column 1 & 2',
    'LBL_DEFINE_LEAD_HEADER' => 'Cabecera del Formulario:',
    'LBL_LEAD_DEFAULT_HEADER' => 'Formulario Web a cliente potencial para la Campaña',
    'LBL_DEFINE_LEAD_SUBMIT' => 'Etiqueta del Botón de Envío:',
    'LBL_DEFINE_LEAD_POST_URL' => 'URL de Envío (Post):',
    'LBL_EDIT_LEAD_POST_URL' => '¿Editar URL de Envío (Post)?',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL de Redirección:',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campaña Relacionada:',
    'LBL_DEFAULT_LEAD_SUBMIT' => 'Enviar',
    'LBL_WEB_TO_LEAD' => 'Crear formulario para registro de clientes potenciales',
    'LBL_LEAD_FOOTER' => 'Pie del Formulario:',
    'LBL_CAMPAIGN_NOT_SELECTED' => 'Select and associate a campaign:',
    'NTC_NO_LEGENDS' => 'Ninguno',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
    'LBL_SELECT_LEAD_FIELDS' => 'Please select from available fields',
    'LBL_DESCRIPTION_LEAD_FORM' => 'Descripción del Formulario:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Al enviar este formulario se creará un cliente potencial vinculado con la campaña',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Por favor, descargue su formulario Web a Cliente potencial',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Formulario para creación de clientes potenciales desde una web',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Por favor, indique todos los campos requeridos',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => 'No es una dirección de correo válida',
    'LBL_AVALAIBLE_FIELDS_HEADER' => 'Campos Disponibles',
    'LBL_LEAD_FORM_FIRST_HEADER' => 'Lead Form (First Column)',
    'LBL_LEAD_FORM_SECOND_HEADER' => 'Lead Form (Second Column)',
    'LBL_LEAD_MODULE' => 'Clientes Potenciales',
    'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Por favor, seleccione los campos requeridos:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retorno de Inversión de la Campaña',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Respuesta a la Campaña por Actividad del Destinatario',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Excluidos por Dirección de Correo o dominio',

    'LBL_AMOUNT_IN' => 'Cantidad en',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'Ingresos',
    'LBL_ROI_CHART_INVESTMENT' => 'Inversión',
    'LBL_ROI_CHART_BUDGET' => 'Presupuesto',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Ingresos Esperados',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'Campañas Principales',
    'LBL_TOP_CAMPAIGNS_NAME' => 'Nombre de Campaña',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'Ingresos',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Campañas con Mejor Rendimiento por Ingreso',
    'LBL_LEADS' => 'Clientes Potenciales',
    'LBL_CONTACTS' => 'Contactos',
    'LBL_ACCOUNTS' => 'Cuentas',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_CREATED_USER' => 'Usuario Creado',
    'LBL_MODIFIED_USER' => 'Usuario Modificado',
    'LBL_LOG_ENTRIES' => 'Entradas del Registro',
    'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Lista de Público Objetivo',
    'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Marketing por Email',
    'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Track Queue',
    'LBL_TARGETED_SUBPANEL_TITLE' => 'Objetivos',
    'LBL_VIEWED_SUBPANEL_TITLE' => 'Viewed',
    'LBL_LINK_SUBPANEL_TITLE' => 'Enlace',
    'LBL_LEAD_SUBPANEL_TITLE' => 'Cliente Potencial',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Contacto',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Email no Válido',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Error de Envío',
    'LBL_REMOVED_SUBPANEL_TITLE' => 'Removed',
    'LBL_BLOCKED_SUBPANEL_TITLE' => 'Blocked',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',

    'LBL_IMPORT_PROSPECTS' => 'Importar Prospectos',
    'LBL_LEAD_FORM_WIZARD' => 'Asistente de Formularios para Clientes Potenciales',
    'LBL_CAMPAIGN_INFORMATION' => 'Visión Global', // No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDIT_BUTTON' => 'Lanzar Asistente',
    'LBL_YEAR' => "Año",
    'LBL_MONTH' => "Mes",
    'LBL_DAY' => "Día",
    'LBL_EDIT_LAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
    'LBL_INVALID' => 'Invalido' /*for 508 compliance fix*/,
    'LBL_VALID' => 'Válido' /*for 508 compliance fix*/,
    'LBL_ALERT' => 'Alerta' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Lanzar Asistente' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Quitar' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Ver',
    'ERR_NO_OPTS_SAVED' => 'No se han guardado valores óptimos con su cuenta de correo entrante.',
    'ERR_REVIEW_EMAIL_SETTINGS' => 'Por favor, revise la configuración del correo entrante.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} clientes potenciales que fueron creadas a través de esta campaña han sido eliminados desde su creación.',
    'LBL_FROM_NAME_HELP' => 'Este será el nombre que verá el destinatario',
    'LBL_FROM_ADDR_HELP' => 'Esta será la dirección remitente que verá el destinatario',
    'LBL_REPLY_TO_NAME_HELP' => 'Este será el nombre al que el destinatario responderá',
    'LBL_REPLY_TO_ADDR_HELP' => 'Este será el correo electrónico al que el destinatario responderá',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ver cuentas de correo electrónico saliente',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => 'Guardar',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => 'Guardar',
    'LBL_SEARCH_TARGET_LIST' => 'Filtro de lista de público objetivo',
    'LBL_INSERT_URL_REF' => 'Insertar Referencia a URL',
    'LBL_INSERT_TRACKER_URL' => 'Insertar URL de Seguimiento:',
    'LBL_CREATE_TRACKER_BTN' => 'Nuevo Seguimiento',
    'LBL_INSERT_TRACKER_BTN' => 'Inserte el código de seguimiento (Tracker)',
    'LBL_EDIT_TRACKER_BTN' => 'Editar código de seguimiento (Tracker)',
    'LBL_CREATE_TRACKER_URL' => '-- Crear --',
    'LBL_INSERT' => 'Insertar',
    'LBL_INSERT_VARIABLE' => 'Insertar:',
    'LBL_INSERT_VARIABLE_BTN' => 'Insertar Variable',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => 'Insertar Variable',
    'LBL_EMAIL_VARIABLES' => 'Variables del correo electrónico',
    'LBL_SAVE' => 'Guardar',
    'ERR_REQUIRED_TRACKER_NAME' => 'El nombre para el seguimiento (Tracker) es necesario',
    'ERR_REQUIRED_TRACKER_URL' => 'La URL del seguimiento (Tracker) es necesaria',
    'LBL_UPDATE_TEMPLATE' => 'Actualizar plantilla',
    'LBL_ATTACHMENTS' => 'Adjuntos',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Falta campo requerido',
    'LBL_SUITE_DOCUMENT' => 'Documento',
    'LBL_EMAIL_ATTACHMENT' => 'Adjunto de Email',
    'LBL_PROCESS_BOUNCED_EMAILS' => 'Proceso de Emails rebotados (bounces)',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'Proceso de Emails de campaña',
    'LBL_SENDER_DETAILS' => 'Datos del remitente',
    'LBL_CHOOSE_TEMPLATES' => 'Elija plantillas',
    'LBL_CHOOSE_TARGETS' => 'Elegir objetivos',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'Condiciones y detalles de la campaña',
    'LBL_OPEN_IN_NEW_WINDOW' => 'Abrir en una nueva ventana...',
    'LBL_CREATE_MARKETING_RECORD' => 'Siguiente',
    'LBL_NO_TEMPLATE_SELECTED' => 'Plantilla de correo electrónico no seleccionada',
    'LBL_SELECT_TEMPLATE' => 'Plantillas',
    'LBL_WIZARD_ADD_TARGET' => 'Agrega una lista de público objetivo existente:',
    'LBL_CLICK_TO_ADD' => 'Haga clic en el(los) elemento(s) de plantilla para agregarlo(s).',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_EMPTY_SUBJECT' => 'El asunto del correo electrónico está en blanco. ¿Está seguro que desea continuar?',
    'LBL_OVERWRITE_QUESTION' => '¿Está seguro que desea sobrescribir la plantilla de correo electrónico?',
    'LBL_SELECT_EMAIL_TRACKER' => 'Por favor seleccione un tracker de correo electrónico.',
    'LBL_STEP_UNAVAILABLE' => 'Para continuar por favor haga clic en el botón siguiente.',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'Por favor escriba el nombre de la campaña y seleccione el estado',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => 'Cada campaña requiere listas de destino para suscripción, desuscripción y prueba.  Cuando no se especifica una lista, se creará una lista de destino vacía al guardar.',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'Seleccione sus listas de destino para esta campaña.',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'Por favor, seleccione una plantilla de correo electrónico o cree una nueva.',
    'LBL_STEP_INFO_MARKETING' => 'Seleccione las cuentas de correo electrónico.',
    'LBL_NO_SUBJECT' => 'La plantilla de correo electrónico seleccionado no tiene un asunto',
    'LBL_NO_HTML_BODY_CONTENTS' => 'La plantilla de correo electrónico seleccionada no tiene un cuerpo html',
    'LBL_RELATIVE_IMG_SRC_IN_TPL' => 'The selected email template contains relative image url', // PR 1646
    'LBL_REL_IMG_LINKS' => 'Site URL should be add to following relative image links:', // PR 1646
    'LBL_NO_SELECTED_TEMPLATE' => '¡No se eligió una plantilla!',
    'LBL_NO_BODY_CONTENTS' => 'La plantilla de correo electrónico seleccionada no tiene un cuerpo html',
    'LBL_ERROR_ON_MARKETING' => 'Falta(n) campo(s) obligatorio(s)',

    'LBL_NO_MARKETING_NAME' => 'Nombre Registro de Marketing vacio',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'Cuenta de correo entrante de Campaña no seleccionado',
    'LBL_NO_DATE_START' => 'Registro de Mercadotecnia no tiene fecha de inicio',
    'LBL_NO_FROM_NAME' => 'Nombre de enviador está vacio',
    'LBL_NO_FROM_ADDR_OR_INVALID' => 'La dirección del remitente está vacía o no es válida',
    'LBL_NEWSLETTER_TITLE' => ' Una campaña de boletín es un tipo de campaña de correo, que le permite enviar un mensaje a una lista única de objetivos meta.',
    'LBL_EMAIL_TITLE' => 'Una campaña de correo, es un tipo de campaña que le permite enviar un mensaje a múltiples listas de objetivos meta.',
    'LBL_NON_EMAIL_TITLE' => 'Una campaña sin correo es una campaña en donde no se envía un mensaje.',
    'LBL_TEMPLATE_SAVING' => 'Por favor espere, guardando la plantilla...',
    'LBL_TEMPLATE_SAVED' => 'Plantilla guarda correctamente.',
    'LBL_PLEASE_SELECT_OPTION' => 'Por favor, seleccione la opción que prefieras',
    'LBL_OPTION_SELECT_TEMPLATE' => 'Seleccionar una plantilla existente',
    'LBL_OPTION_CREATE_TEMPLATE' => 'Crear una plantilla nueva',
    'LBL_OPTION_COPY_TEMPLATE' => 'Copiar una plantilla existente',
    'LBL_SUMMARY' => 'Resumen',
    'LBL_CAMPAIGN_CHECKLIST' => 'Lista de chequeo de la Campaña',

    'LBL_EMAIL_MARKETING' => 'Marketing por Email',
    'LBL_QUEUE_ITEMS' => 'Elementos en la fila',
    'LBL_PROSPECT_LISTS' => 'Listas de Público Objetivo',
    'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => 'Respuestas a la encuesta',
    'LBL_CAMPAIGN_SURVEY' => "Encuesta",
);