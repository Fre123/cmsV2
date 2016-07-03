<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;



use backend\models\AuthAssignment;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $cedula;
    public $id_dp;
    public $first_name;
    public $last_name;
    public $username;
    public $email;
    public $password;
    public $fecha;
    public $permissons;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['cedula', 'filter', 'filter' => 'trim'],
            ['cedula','required','message'=>'Debe ingresar la cedula'],
            ['cedula', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Esta cedula ya ha sido registrada'],
            ['id_dp','required','message'=>'Debe ingresar el departamento'],
            ['first_name', 'required','message'=>'Tiene que llenar este campo'],
            ['last_name', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->cedula = $this->cedula;
        $user->id_dp = $this->id_dp;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->save();
       
        //return $user->save() ? $user : null;
       

        //permite agregar permisos
        $permissionList = $_POST['SignupForm']['permissons'];
        //print_r($permissionList);
        //die();
        foreach($permissionList as $value){
            $newPermission = new AuthAssignment;
            $newPermission->user_id = $user->id;
            $newPermission->item_name = $value;
            $newPermission->save();

        }

         return $user;

        
     
    }
}
