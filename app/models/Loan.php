<?php

namespace system_library;

class Loan extends \Phalcon\Mvc\Model
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
    public $date_loan;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var integer
     */
    public $id_book;

    /**
     *
     * @var string
     */
    public $date_give_back;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_library");
        $this->setSource("loan");
        $this->belongsTo('id_book', 'system_library\Book', 'id', ['alias' => 'Book']);
        $this->belongsTo('id_user', 'system_library\Users', 'id', ['alias' => 'Users']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'loan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Loan[]|Loan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Loan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
