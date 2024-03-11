<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog".
 *
 * @property int $id
 * @property string $name
 * @property int $cost
 * @property string $material
 * @property string $purpose
 * @property string $color
 * @property string $imagePath
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cost', 'material', 'purpose', 'color', 'imagePath'], 'required'],
            [['cost'], 'integer'],
            [['name', 'material', 'purpose', 'color', 'imagePath'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cost' => 'Cost',
            'material' => 'Material',
            'purpose' => 'Purpose',
            'color' => 'Color',
            'imagePath' => 'Image Path',
        ];
    }
}
