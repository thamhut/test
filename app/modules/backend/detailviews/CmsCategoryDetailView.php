<?php
        		
namespace App\Modules\Backend\DetailViews;

use OE\Widget\DetailView;
use App\Modules\Backend\Models\CmsCategory;

class CmsCategoryDetailView extends DetailView {

    public function init() {
		$this->setCaption($this->_('CmsCategory Detail'));
		$this->setColumns($this->getColumns());
	}

    public function getColumns() {
		return array(
	        	array(
					'name' => 'id',	
					'header' => $this->_('id'),
					'value' => 'id',
        			'sort' => false 		
				),
	        	array(
					'name' => 'id_parent',	
					'header' => $this->_('id_parent'),
					'value' => 'id_parent',
        			'sort' => false 		
				),
	        	array(
					'name' => 'title',	
					'header' => $this->_('title'),
					'value' => 'title',
        			'sort' => false 		
				),
	        	array(
					'name' => 'slug',	
					'header' => $this->_('slug'),
					'value' => 'slug',
        			'sort' => false 		
				),
	        	array(
					'name' => 'thumbnail',	
					'header' => $this->_('thumbnail'),
					'value' => 'thumbnail',
        			'sort' => false 		
				),
	        	array(
					'name' => 'quote',	
					'header' => $this->_('quote'),
					'value' => 'quote',
        			'sort' => false 		
				),
	        	array(
					'name' => 'decscription',	
					'header' => $this->_('decscription'),
					'value' => 'decscription',
        			'sort' => false 		
				),
	        	array(
					'name' => 'created_date',	
					'header' => $this->_('created_date'),
					'value' => 'created_date',
        			'sort' => false 		
				),
	        	array(
					'name' => 'updated_date',	
					'header' => $this->_('updated_date'),
					'value' => 'updated_date',
        			'sort' => false 		
				),
	        	array(
					'name' => 'meta_title',	
					'header' => $this->_('meta_title'),
					'value' => 'meta_title',
        			'sort' => false 		
				),
	        	array(
					'name' => 'meta_description',	
					'header' => $this->_('meta_description'),
					'value' => 'meta_description',
        			'sort' => false 		
				),
	        	array(
					'name' => 'meta_keyword',	
					'header' => $this->_('meta_keyword'),
					'value' => 'meta_keyword',
        			'sort' => false 		
				),
	        	array(
					'name' => 'status',	
					'header' => $this->_('status'),
					'value' => function($data) {
        				return CmsCategory::getStatusLabel($data->status);
        			},
        			'sort' => false 		
				),
		);
	}

}
