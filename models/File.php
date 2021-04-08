<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property int $cat_id
 * @property int $name
 * @property string $path
 * @property int|null $active
 */
class File extends \yii\db\ActiveRecord
{
    public $file;
    const FILE_ACTIVE = ['1' => 'Активен', '0' => 'Не активен'];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'name'], 'required'],
            [['cat_id', 'name', 'active'], 'integer'],
            [['path'], 'string', 'max' => 500],
            [['file'], 'file'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'name' => 'Name',
            'path' => 'Path',
            'active' => 'Active',
        ];
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id'=>'cat_id']);
    }

    static public function byCategory($catid){
        return File::find()->where(["cat_id"=>$catid])->all();
    }

    public function beforeSave($insert)
    {
        if ($this->file) {
            $this->path = 'uploads/' . $this->file->baseName . '.' . $this->file->extension;
            $this->file->saveAs($this->path);
        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}