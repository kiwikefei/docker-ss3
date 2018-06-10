<?php

class MyAdmin extends ModelAdmin
{
    private static $managed_models = [
        'Product', 'Category'
    ];
    private static $url_segment = 'products';
    private static $menu_title = 'My Product Admin';
    public function getEditForm($id = null, $fields = null)
    {
        $listField = GridField::create(
            $this->sanitiseClassName($this->modelClass),
            false,
            $this->getList(),
            $fieldConfig = GridFieldConfig_RecordEditor::create()
                ->addComponent(new GridFieldImpersonateAction())
        );
        $form = CMSForm::create(
            $this,
            'EditForm',
            new FieldList($listField),
            new FieldList()
        )->setHTMLID('Form_EditForm');
        $form->setResponseNegotiator($this->getResponseNegotiator());
        $form->addExtraClass('cms-edit-form cms-panel-padded center');
        $form->setTemplate($this->getTemplatesWithSuffix('_EditForm'));
        $editFormAction = Controller::join_links($this->Link($this->sanitiseClassName($this->modelClass)), 'Impersonate');
        $form->setFormAction($editFormAction);
        $form->setAttribute('data-pjax-fragment', 'CurrentForm');
        return $form;
    }


}