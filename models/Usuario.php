<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuario".
 *
 * @property string $email
 * @property string $nombre
 * @property string $password
 * @property double $valoracionDeUsuario
 * @property integer $tipo
 *
 * @property Notificacion[] $notificacions
 * @property Resenia[] $resenias
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['valoracionDeUsuario'], 'number'],
            [['tipo'], 'integer'],
            [['email'], 'string', 'max' => 30],
            [['nombre', 'password'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'nombre' => 'Nombre',
            'password' => 'Password',
            'valoracionDeUsuario' => 'Valoracion De Usuario',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotificacions()
    {
        return $this->hasMany(Notificacion::className(), ['email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResenias()
    {
        return $this->hasMany(Resenia::className(), ['emailUsuario' => 'email']);
    }
}
