<?php

namespace app\controllers;

//use app\components\NodeLogger;
use app\components\RoleAccessBehaviour;
use app\models\Action;
use app\models\RegisterForm;
use app\models\User;
use Yii;
use yii\db\Expression;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\search\PencatatanUsahaIndexSearch;
use app\models\search\RekomendasiBbmIndexSearch;
use dmstr\bootstrap\Tabs;
use yii\helpers\Url;
use yii\web\UploadedFile;

class SiteController extends Controller
{

    public function behaviors()
    {
        //NodeLogger::sendLog(Action::getAccess($this->id));
        //apply role_action table for privilege (doesn't apply to super admin)
        return Action::getAccess($this->id);
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProfile()
    {
        $model = User::find()->where(["id"=>Yii::$app->user->id])->one();
        $oldMd5Password = $model->password;
        $oldPhotoUrl = $model->photo_url;
        $oldTandaTangan = $model->ttd_digital;
        $model->password = "";
        
        if ($model->load($_POST)){
            //password
            if($model->password != ""){
                $model->password = md5($model->password);
            }else{
                $model->password = $oldMd5Password;
            }

            # get the uploaded file instance
            $image = UploadedFile::getInstance($model, 'photo_url');
            if ($image != NULL) {
                # store the source file name
                $model->photo_url = $image->name;
                $arr = explode(".", $image->name);
                $extension = end($arr);

                # generate a unique file name
                $model->photo_url = Yii::$app->security->generateRandomString() . ".{$extension}";

                # the path to save file
                $path = Yii::getAlias("@app/web/uploads/") . $model->photo_url;
                $image->saveAs($path);
            }else{
                $model->photo_url = $oldPhotoUrl;
            }
            $ttd = UploadedFile::getInstance($model, 'ttd_digital');
            if ($ttd != null) {
                # store the source file name
                $model->ttd_digital = $ttd->name;
                $arr = explode(".", $ttd->name);
                $extension = end($arr);

                # generate a unique file name
                $model->ttd_digital = Yii::$app->security->generateRandomString() . ".{$extension}";

                # the path to save file
                if(file_exists(Yii::getAlias("@app/web/uploads/ttd_digital/")) == false){
                    mkdir(Yii::getAlias("@app/web/uploads/ttd_digital/"), 0777, true);
                }
                $path = Yii::getAlias("@app/web/uploads/ttd_digital/") . $model->ttd_digital;
                if($oldTandaTangan != NULL){

                    $ttd->saveAs($path);
                    unlink(Yii::$app->basePath . '/web/uploads/ttd_digital/' . $oldTandaTangan);
                }else{
                    $ttd->saveAs($path);
                }
            } else {
                $model->ttd_digital = $oldTandaTangan;
            }
            
            if($model->save()){
                Yii::$app->session->addFlash("success", "Profile successfully updated.");
            }else{
                Yii::$app->session->addFlash("danger", "Profile cannot updated.");
            }
            return $this->redirect(["profile"]);
        }
        return $this->render('profile', [
            'model' => $model,
        ]);
    }

    public function actionRegister()
    {
        $this->layout = "main-login";

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->register()) {
            Yii::$app->session->addFlash("success", "Register success, please login");
            return $this->redirect(["site/login"]);
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        $this->layout = "main-login";

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            //log last login column
            $user = Yii::$app->user->identity;
            $user->last_login = new Expression("NOW()");
            $user->save();

            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        //log last login column
        $user = Yii::$app->user->identity;
        $user->last_logout = new Expression("NOW()");
        $user->save();

        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    // THE CONTROLLER
    public function actionKab() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            $keys = array_keys($_POST['depdrop_all_params']);
            $selected = $_POST['depdrop_all_params'][$keys[1]];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = self::getKab($cat_id); 
                return ['output'=>$out, 'selected'=>$selected];
            }
        }
        return ['output'=>'', 'selected'=>''];
    }
    
    public function actionKec() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            $keys = array_keys($_POST['depdrop_all_params']);
            $selected = $_POST['depdrop_all_params'][$keys[1]];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = self::getKec($cat_id); 
                return ['output'=>$out, 'selected'=>$selected];
            }
        }
        return ['output'=>'', 'selected'=>''];
    }

    public function actionDes() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            $keys = array_keys($_POST['depdrop_all_params']);
            $selected = $_POST['depdrop_all_params'][$keys[1]];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = self::getDes($cat_id); 
                return ['output'=>$out, 'selected'=>$selected];
            }
        }
        return ['output'=>'', 'selected'=>''];
    }

    public function actionLokasi() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            $keys = array_keys($_POST['depdrop_all_params']);
            $selected = $_POST['depdrop_all_params'][$keys[1]];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = self::getLokasi($cat_id); 
                return ['output'=>$out, 'selected'=>$selected];
            }
        }
        return ['output'=>'', 'selected'=>''];
    }

    public function actionNomor() {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            $keys = array_keys($_POST['depdrop_all_params']);
            $selected = $_POST['depdrop_all_params'][$keys[1]];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = self::getNomor($cat_id); 
                return ['output'=>$out, 'selected'=>$selected];
            }
        }
        return ['output'=>'', 'selected'=>''];
    }

    private function getKab($provinsi_id){
        $out=[];
        $model= \app\models\Regencies::find()->where(['province_id'=>$provinsi_id])->all();

        foreach($model as $row){
            $out[]=[
                "id"=>$row->id,
                "name"=>$row->name,
            ];
        }
        return $out;
    }
    

    private function getKec($kabupaten_id){
        $out=[];
        $model= \app\models\Districts::find()->where(['regency_id'=>$kabupaten_id])->all();

        foreach($model as $row){
            $out[]=[
                "id"=>$row->id,
                "name"=>$row->name,
            ];
        }
        return $out;
    }

    private function getDes($kecamatan_id){
        $out=[];
        $model= \app\models\Villages::find()->where(['district_id'=>$kecamatan_id])->all();

        foreach($model as $row){
            $out[]=[
                "id"=>$row->id,
                "name"=>$row->name,
            ];
        }
        return $out;
    }

    private function getLokasi($id){
        $out=[];
        $model= \app\models\Spbu::find()->where(['id'=>$id])->all();

        foreach($model as $row){
            $out[]=[
                "id"=>$row->id,
                "name"=>$row->lokasi,
            ];
        }
        return $out;
    }

    private function getNomor($id){
        $out=[];
        $model= \app\models\Spbu::find()->where(['id'=>$id])->all();

        foreach($model as $row){
            $out[]=[
                "id"=>$row->id,
                "name"=>$row->nomor_lembaga_penyalur,
            ];
        }
        return $out;
    }

    // public function actionEmail()
    // {
    //     Yii::$app->mailer->compose()
    //     ->setTo('user@schoolfund.my.id')
    //             ->setFrom(['admin@schoolfund.my.id'=>'Hanafi'])
    //             ->setSubject('tes email')
    //             ->setTextBody('Tes email cok')
    //             ->send();
    // }
}