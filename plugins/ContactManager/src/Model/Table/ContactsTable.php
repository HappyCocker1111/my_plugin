<?php
// plugins/ContactManager/src/Model/Table/ContactsTable.php:
namespace ContactManager\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class ContactsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('ContactManager.AltName');
    }
}