<?php

namespace app\models;

use yii\db\ActiveRecord;

class Book extends ActiveRecord{
    public static function tableName()
    {
        return 'book';
    }

    public function rules()
    {
        return [
            [['book_name', 'book_price'], 'required'],
            [['book_price'], 'integer'],
            [['book_name','book_author','book_press'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels(){
        return [
            'book_id' => '序号',
            'book_name' => '书名',
            'book_author' => '作者',
            'book_press' => '出版社',
            'book_price' => '图书价格(元)',
        ];
    }
}
