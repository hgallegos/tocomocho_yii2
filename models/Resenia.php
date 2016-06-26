<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Resenia".
 *
 * @property integer $idComentario
 * @property string $contenido
 * @property string $fecha
 * @property string $emailUsuario
 * @property integer $idVehiculo
 * @property double $nCalidad
 * @property double $nEconomia
 * @property double $valoracion
 * @property double $rendimientoR
 *
 * @property Falla[] $fallas
 * @property Usuario $emailUsuario0
 * @property Vehiculo $idVehiculo0
 */
class Resenia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Resenia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contenido'], 'string'],
            [['fecha'], 'safe'],
            [['idVehiculo'], 'integer'],
            [['nCalidad', 'nEconomia', 'valoracion', 'rendimientoR'], 'number'],
            [['emailUsuario'], 'string', 'max' => 30],
            [['emailUsuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['emailUsuario' => 'email']],
            [['idVehiculo'], 'exist', 'skipOnError' => true, 'targetClass' => Vehiculo::className(), 'targetAttribute' => ['idVehiculo' => 'idVehiculo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idComentario' => 'Id Comentario',
            'contenido' => 'Contenido',
            'fecha' => 'Fecha',
            'emailUsuario' => 'Email Usuario',
            'idVehiculo' => 'Id Vehiculo',
            'nCalidad' => 'N Calidad',
            'nEconomia' => 'N Economia',
            'valoracion' => 'Valoracion',
            'rendimientoR' => 'Rendimiento R',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFallas()
    {
        return $this->hasMany(Falla::className(), ['idComentario' => 'idComentario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailUsuario0()
    {
        return $this->hasOne(Usuario::className(), ['email' => 'emailUsuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVehiculo0()
    {
        return $this->hasOne(Vehiculo::className(), ['idVehiculo' => 'idVehiculo']);
    }
}
