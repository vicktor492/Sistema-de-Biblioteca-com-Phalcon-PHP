<?php

namespace system_library;

class Book extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name_book;

    /**
     *
     * @var string
     */
    public $edition_book;

    /**
     *
     * @var integer
     */
    public $year_book;

    /**
     *
     * @var string
     */
    public $sipnose;

    /**
     *
     * @var integer
     */
    public $id_author;

    /**
     *
     * @var integer
     */
    public $id_gener;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_library");
        $this->setSource("book");
        $this->hasMany('id', 'system_library\Loan', 'id_book', ['alias' => 'Loan']);
        $this->belongsTo('id_author', 'system_library\Author', 'id', ['alias' => 'Author']);
        $this->belongsTo('id_gener', 'system_library\Gener', 'id', ['alias' => 'Gener']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'book';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Book[]|Book|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Book|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
