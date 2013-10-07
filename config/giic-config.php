<?php
// GIIC CONFIG FILE
// ----------------

$appRoot = dirname(__FILE__) . '/../../../..';

// define table list (eg. you don't need MANY_MANY tables)
$tables = array(
    'p3_widget' => 'p3Widget',
    'p3_widget_translation' => 'p3WidgetTranslation'
);

// define CRUDs
$cruds  = $tables;

// init actions
$actions = array();

// generate slim CRUDs into application
foreach ($cruds AS $crud) {
    $actions[] = array(
        "codeModel" => "FullCrudCode",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'slim' => $appRoot.'/vendor/phundament/gii-template-collection/fullCrud/templates/slim',
        ),
        "model"    => array(
            "model"      => "vendor.phundament.p3Widgets.models." . ucfirst($crud),
            "controller" => 'p3widgets/'.$crud,
            'messageCatalog' => 'p3WidgetsModule.model',
            'providers' => array(
                'vendor.phundament.gii-template-collection.fullCrud.providers.GtcPartialViewProvider',
                'application.components.PhFieldProvider'
            ),
            "template"   => "slim"
        )
    );
}


return array(
    "actions" => $actions
);