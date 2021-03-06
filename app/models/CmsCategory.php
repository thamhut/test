<?php
        		        		
namespace App\Models;

use Phalcon\Mvc\Model as ModelApp;

class CmsCategory extends ModelApp
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $id_parent;

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $slug;

    /**
     *
     * @var string
     */
    protected $thumbnail;

    /**
     *
     * @var string
     */
    protected $quote;

    /**
     *
     * @var string
     */
    protected $decscription;

    /**
     *
     * @var string
     */
    protected $created_date;

    /**
     *
     * @var string
     */
    protected $updated_date;

    /**
     *
     * @var string
     */
    protected $meta_title;

    /**
     *
     * @var string
     */
    protected $meta_description;

    /**
     *
     * @var string
     */
    protected $meta_keyword;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field id_parent
     *
     * @param integer $id_parent
     * @return $this
     */
    public function setIdParent($id_parent)
    {
        $this->id_parent = $id_parent;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field slug
     *
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Method to set the value of field thumbnail
     *
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Method to set the value of field quote
     *
     * @param string $quote
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Method to set the value of field decscription
     *
     * @param string $decscription
     * @return $this
     */
    public function setDecscription($decscription)
    {
        $this->decscription = $decscription;

        return $this;
    }

    /**
     * Method to set the value of field created_date
     *
     * @param string $created_date
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;

        return $this;
    }

    /**
     * Method to set the value of field updated_date
     *
     * @param string $updated_date
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->updated_date = $updated_date;

        return $this;
    }

    /**
     * Method to set the value of field meta_title
     *
     * @param string $meta_title
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->meta_title = $meta_title;

        return $this;
    }

    /**
     * Method to set the value of field meta_description
     *
     * @param string $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->meta_description = $meta_description;

        return $this;
    }

    /**
     * Method to set the value of field meta_keyword
     *
     * @param string $meta_keyword
     * @return $this
     */
    public function setMetaKeyword($meta_keyword)
    {
        $this->meta_keyword = $meta_keyword;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field id_parent
     *
     * @return integer
     */
    public function getIdParent()
    {
        return $this->id_parent;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Returns the value of field thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Returns the value of field quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Returns the value of field decscription
     *
     * @return string
     */
    public function getDecscription()
    {
        return $this->decscription;
    }

    /**
     * Returns the value of field created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * Returns the value of field updated_date
     *
     * @return string
     */
    public function getUpdatedDate()
    {
        return $this->updated_date;
    }

    /**
     * Returns the value of field meta_title
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    /**
     * Returns the value of field meta_description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    /**
     * Returns the value of field meta_keyword
     *
     * @return string
     */
    public function getMetaKeyword()
    {
        return $this->meta_keyword;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function getSource()
    {
        return 'cms_category';
    }

}
