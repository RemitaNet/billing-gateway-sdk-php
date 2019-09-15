<?php


class ResponseData
{
    private $id; //String
    private $columnName; //String
    private $columnType; //String
    private $customFieldDropDown = array();  //array( undefined )
    private $columnLength; //String
    private $required; //boolean

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    /**
     * @return mixed
     */
    public function getColumnType()
    {
        return $this->columnType;
    }

    /**
     * @return array
     */
    public function getCustomFieldDropDown()
    {
        return $this->customFieldDropDown;
    }

    /**
     * @return mixed
     */
    public function getColumnLength()
    {
        return $this->columnLength;
    }

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }



}