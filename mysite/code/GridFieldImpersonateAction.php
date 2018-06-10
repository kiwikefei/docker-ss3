<?php

class GridFieldImpersonateAction implements GridField_ColumnProvider, GridField_ActionProvider
{

    public function augmentColumns($gridField, &$columns)
    {
        if(!in_array('Actions', $columns)) {
            $columns[] = 'Actions';
        }
    }

    public function getColumnAttributes($gridField, $record, $columnName)
    {
        return ['class' => 'col-buttons'];
    }


    public function getColumnMetadata($gridField, $columnName)
    {
        if($columnName == 'Actions') {
            return ['title' => ''];
        }
    }

    public function getColumnsHandled($gridField)
    {
            return ['Actions'];
    }
    public function getColumnContent($gridField, $record, $columnName)
    {
        if(!$record->canEdit()) return;
        $field = GridField_FormAction::create(
            $gridField,
            'CustomAction' . $record->ID,
            'Impersonate',
            'ImpersonateAction',
            [
                'RecordID'  => $record->ID
            ]
        );
        return $field->Field();
    }

    public function getActions($gridField)
    {
        return ['ImpersonateAction'];
    }

    public function handleAction(GridField $gridField, $actionName, $arguments, $data)
    {
        if($actionName == 'ImpersonateAction') {
            Controller::curr()->getRequest()->setStatusCode(200, 'Do Custom Action Done.');
        }
    }
}