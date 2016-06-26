<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Notificacion".
 *
 * @property integer $idNotificacion
 * @property string $email
 * @property string $descripcion
 * @property integer $idVehiculo
 *
 * @property Usuario $email0
 * @property Vehiculo $idVehiculo0
 */
class Notificacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Notificacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVehiculo'], 'integer'],
            [['email', 'descripcion'], 'string', 'max' => 45],
            [['email'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['email' => 'email']],
            [['idVehiculo'], 'exist', 'skipOnError' => true, 'targetClass' => Vehiculo::className(), 'targetAttribute' => ['idVehiculo' => 'idVehiculo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNotificacion' => 'Id Notificacion',
            'email' => 'Email',
            'descripcion' => 'Descripcion',
            'idVehiculo' => 'Id Vehiculo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmail0()
    {
        return $this->hasOne(Usuario::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVehiculo0()
    {
        return $this->hasOne(Vehiculo::className(), ['idVehiculo' => 'idVehiculo']);
    }
}
