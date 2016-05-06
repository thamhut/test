<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/20/2016
 * Time: 9:46 AM
 */

namespace App\Modules\Fontend\Controllers;


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
        $data['shop'] = Website::find();
        $data['product'] = $product = ProductClone::findFirst(array(
            array(
                'slug' => (string)$slug
            )
        ));
        if(empty($product)){
            die;
        }
        $product->view = (isset($product->view)?$product->view + 1 : 1);
        $product->save();
        $data['feature'] = ProductClone::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1));
        $data['feature_user'] = Product::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1));
        $data['category'] = CmsCategory::findFirst(array('id='.$product->idcate));
        $this->view->setVars($data);
    }

    public function userAction($slug=''){
        $data = array();
        $data['shop'] = Website::find();
        $data['product'] = $product = Product::findFirst(array(
            array(
                'slug' => (string)$slug
            )
        ));
        if(empty($product)){
            die;
        }
        $product->view = (isset($product->view)?$product->view + 1 : 1);
        $product->save();
        $data['feature_user'] = ProductClone::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1));
        $data['feature'] = Product::find(array('conditions' => array('idcate' => (int)$product->idcate),'sort'=>array('_id'=>-1),'limit'=>10, 'skip'=>1));
        $data['category'] = CmsCategory::findFirst(array('id='.$product->idcate));
        $this->view->setVars($data);
    }
}