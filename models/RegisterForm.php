<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * RegisterForm is the model behind the register form.
 */
class RegisterForm extends Model
{
    public $username;
    public $password;
    public $name;
    public $email;
    public $nik;
    public $no_hp;
    public $alamat;
    public $agreeTerm;
    private $role_id = 3; //Regular User


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'name', 'nik', 'no_hp', 'alamat'], 'required'],
            [['email'], 'string', 'max' => 255],
            ['nik', 'unique', 'targetClass' => '\app\models\User', 'message' => 'NIK telah terdaftar.'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Username telah terdaftar.'],

        ];
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function register()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->password = md5($this->password);
            $user->name = $this->name;
            $user->email = $this->email;
            $user->nik = $this->nik;
            $user->no_hp = $this->no_hp;
            $user->alamat = $this->alamat;
            $user->role_id = $this->role_id;
            $user->photo_url = "default.png";
            if ($user->save()) {
                return true;
            } else {
                if ($user->errors) {
                    $this->addErrors($user->errors);
                }
                return false;
            }
        }
        return false;
    }
}
