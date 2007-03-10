<?php
/**
 * Inherited off of Metatext to support using metafield_id as collection key
 *
 * @package Omeka
 **/
require_once 'Metatext.php';
class ItemMetatext extends Metatext
{	
	public function setUp() {
		$this->hasOne("Item","ItemMetatext.item_id");
		$this->hasOne("Metafield", "ItemMetatext.metafield_id");
		$this->setAttribute(Doctrine::ATTR_COLL_KEY, 'metafield_id');
	}
} // END class ItemMetatext extends Metatext
?>