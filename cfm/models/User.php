<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $email
 * @property string|null $first_name
 * @property string $last_name
 * @property int|null $middle_name
 * @property int $role
 * @property int $active
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'last_name'], 'required'],
            [['middle_name', 'role', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['email'], 'string', 'max' => 120],
            [['first_name'], 'string', 'max' => 18],
            [['last_name'], 'string', 'max' => 25],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'role' => 'Role',
            'active' => 'Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
