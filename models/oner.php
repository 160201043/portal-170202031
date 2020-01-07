<?php
namespace kouosl\oneri\models;;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "modelon".
 *
 * @property int $id
 * @property int $userid
 * @property string $filmisim
 * @property string $tur1
 * @property string $tur2
 * @property int $puan
 * @property string $yorum
 */
class oner extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modelon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'userid', 'filmisim', 'tur1', 'tur2', 'puan', 'yorum'], 'required'],
            [['id', 'userid', 'puan'], 'integer'],
            [['yorum'], 'string'],
            [['filmisim'], 'string', 'max' => 80],
            [['tur1', 'tur2'], 'string', 'max' => 80],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userid' => 'Userid',
            'filmisim' => 'Filmisim',
            'tur1' => 'Tur1',
            'tur2' => 'Tur2',
            'puan' => 'Puan',
            'yorum' => 'Yorum',
        ];
    }
}