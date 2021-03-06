<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/20/2016
 * Time: 9:46 AM
 */

namespace App\Modules\Fontend\Controllers;


use App\Helpers\String;
use App\Models\CmsCategory;
use App\Models\Product;
use App\Models\ProductClone;
use App\Models\Website;

class DetailController extends BaseController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->assets
            ->addCss('/public/skin/common/libs/bxslider/jquery.bxslider.css');
        $this->assets
            ->addJs('/public/skin/common/libs/bxslider/jquery.bxslider.js');
    }

    public function indexAction($slug=''){
        $data = array();
        $data['shop'] = Website::find(array('columns'=>'id,domain'));
        $data['product'] = $product = ProductClone::findFirst(array(
            array(
                'slug' => (string)$slug
            ),
            'columns'=>'title,image, oldprice,newprice,shopId, created_at, link,content'
        ));
        if(empty($product)){
            die;
        }
        $this->tag->SetTitle($this->_('Sale world | '.$product->title));
        $data['meta_title'] = $product->title;
        $data['meta_content'] = 'Detail:'.$product->title.' '.String::snippet(strip_tags($product->content), 50);
        $data['feature'] = ProductClone::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1, 'columns'=>'title,image, slug,shopId, created_at, link'));
        $data['feature_user'] = Product::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1, 'columns'=>'slug,image,title'));
        $data['feature_in_shop'] = ProductClone::find(array('conditions' => array('idcate' => (int)$product->idcate, 'shopId'=>(int)$product->shopId),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1, 'columns'=>'slug,image,title'));
        $data['category'] = CmsCategory::findFirst(array('id='.$product->idcate));
        $this->view->setVars($data);
    }

    public function userAction($slug=''){
        $data = array();
        $data['shop'] = Website::find(array('columns'=>'id,domain'));
        $data['product'] = $product = Product::findFirst(array(
            array(
                'slug' => (string)$slug
            ),
            'columns'=>'title,image, oldprice,newprice,shopId, created_at, link,content'
        ));
        if(empty($product)){
            die;
        }
        $this->tag->SetTitle($this->_('Sale world | '.$product->title));
        $data['meta_title'] = $product->title;
        $data['meta_content'] = 'Detail:'.$product->title.' '.String::snippet(strip_tags($product->content), 50);
        $data['feature_shop'] = ProductClone::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1, 'columns'=>'title,image, shopId, slug'));
        $data['feature_user'] = Product::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1, 'columns'=>'title,image, slug'));
        $data['category'] = CmsCategory::findFirst(array('id='.$product->idcate));
        $this->view->setVars($data);
    }
}