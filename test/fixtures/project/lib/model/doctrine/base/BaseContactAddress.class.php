<?php

/**
 * BaseContactAddress
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property boolean $is_primary
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property integer $contact_id
 * @property Contact $Contact
 * 
 * @method string         getName()       Returns the current record's "name" value
 * @method boolean        getIsPrimary()  Returns the current record's "is_primary" value
 * @method string         getCity()       Returns the current record's "city" value
 * @method string         getState()      Returns the current record's "state" value
 * @method string         getZip()        Returns the current record's "zip" value
 * @method integer        getContactId()  Returns the current record's "contact_id" value
 * @method Contact        getContact()    Returns the current record's "Contact" value
 * @method ContactAddress setName()       Sets the current record's "name" value
 * @method ContactAddress setIsPrimary()  Sets the current record's "is_primary" value
 * @method ContactAddress setCity()       Sets the current record's "city" value
 * @method ContactAddress setState()      Sets the current record's "state" value
 * @method ContactAddress setZip()        Sets the current record's "zip" value
 * @method ContactAddress setContactId()  Sets the current record's "contact_id" value
 * @method ContactAddress setContact()    Sets the current record's "Contact" value
 * 
 * @package    skeleton
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseContactAddress extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contact_address');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('is_primary', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('city', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('state', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('zip', 'string', 25, array(
             'type' => 'string',
             'length' => '25',
             ));
        $this->hasColumn('contact_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Contact', array(
             'local' => 'contact_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}