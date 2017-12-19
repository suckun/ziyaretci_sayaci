<?php

namespace kouosl\ziyaretci_sayaci\models;

use Yii;

/**
 * This is the model class for table "ip_sayaci".
 *
 * @property integer $id
 * @property string $tarih
 * @property integer $tiklama
 * @property string $ip
 */
class IpSayaci extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ip_sayaci';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tarih', 'tiklama', 'ip'], 'required'],
            [['id', 'tiklama'], 'integer'],
            [['tarih'], 'safe'],
            [['ip'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarih' => 'Tarih',
            'tiklama' => 'Tiklama',
            'ip' => 'Ip',
        ];
    }
}
