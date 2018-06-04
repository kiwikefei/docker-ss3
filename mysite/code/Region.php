<?php
class Region extends DataObject
{
    private static $db = [
        'Title'         => 'Varchar',
        'Description'   => 'Text'
    ];

    private static $has_one = [
        'Photo' => 'Image',
        'RegionsPage'   => 'RegionsPage',
    ];

    private static $summary_fields = [
//        'Photo'     => '',        // photos are gonna blow up the GridField
    //  'Photo.CMSThumbnail' => ''  // alternative approach
        'GridThumbnail' => '',
        'Title'     => 'Title of region',
        'Description'   => 'Short Desc'
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextAreaField::create('Description'),
            $uploader = UploadField::create('Photo')
        );
        $uploader->setFolderName('region-photos');
        $uploader->getValidator()->setAllowedExtensions(['jpeg', 'gif', 'png', 'jpg']);
        return $fields;
    }

    public function getGridThumbnail()
    {
        if($this->Photo()->exists()){
            return $this->Photo()->SetWidth(100);
        }
        return '(no image)';
    }
}