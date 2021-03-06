<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\controllers\base;
use Yii;
use app\models\Galeri;
    use app\models\search\GaleriSearch;
use yii\web\Controller;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\filters\AccessControl;
use dmstr\bootstrap\Tabs;
use app\models\Action;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
/**
* GaleriController implements the CRUD actions for Galeri model.
*/
class GaleriController extends Controller
{


/**
* @var boolean whether to enable CSRF validation for the actions in this controller.
* CSRF validation is enabled only when both this property and [[Request::enableCsrfValidation]] are true.
*/
public $enableCsrfValidation = false;
public function behaviors()
{
//NodeLogger::sendLog(Action::getAccess($this->id));
//apply role_action table for privilege (doesn't apply to super admin)
return Action::getAccess($this->id);
}

/**
* Lists all Galeri models.
* @return mixed
*/
public function actionIndex()
{
    $searchModel  = new GaleriSearch;
    $dataProvider = $searchModel->search($_GET);

Tabs::clearLocalStorage();

Url::remember();
\Yii::$app->session['__crudReturnUrl'] = null;

return $this->render('index', [
'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
]);
}


public function actionUnduhGambar($id)
{
$model = $this->findModel($id);
$file = $model->gambar;
// $model->tanggal_received=date('Y-m-d H:i:s');
$path = Yii::getAlias("@app/web/uploads/galeri/") . $file;
$arr = explode(".", $file);
$extension = end($arr);
$nama_file= "Gambar ".$model->judul.".".$extension;

    if (file_exists($path)) {
        return Yii::$app->response->sendFile($path, $nama_file);
    } else {
        throw new \yii\web\NotFoundHttpException("{$path} is not found!");
    }
}
/**
* Displays a single Galeri model.
* @param integer $id
*
* @return mixed
*/
public function actionView($id)
{
\Yii::$app->session['__crudReturnUrl'] = Url::previous();
Url::remember();
Tabs::rememberActiveState();

return $this->render('view', [
'model' => $this->findModel($id),
]);
}

/**
* Creates a new Galeri model.
* If creation is successful, the browser will be redirected to the 'view' page.
* @return mixed
*/
public function actionCreate()
{
$model = new Galeri;

try {
$model->deleted_status = 0;
if ($model->load($_POST)) {
    $gambars = UploadedFile::getInstance($model, 'gambar');
        if($gambars !=NULL){
                    # store the source gambars name
                    $model->gambar = $gambars->name;
                    $arr = explode(".", $gambars->name);
                    $extension = end($arr);

                    # generate a unique gambars name
                    $model->gambar = Yii::$app->security->generateRandomString() . ".{$extension}";

                    # the path to save gambars
                    // unlink(Yii::getAlias("@app/web/uploads/pengajuan/") . $oldFile);
                    if(file_exists(Yii::getAlias("@app/web/uploads/galeri/")) == false){
                        mkdir(Yii::getAlias("@app/web/uploads/galeri/"), 0777, true);
                    }
                    $path = Yii::getAlias("@app/web/uploads/galeri/") . $model->gambar;
        $gambars->saveAs($path);
                }
if($model->save()){
    return $this->redirect(['view', 'id' => $model->id]);
}
} elseif (!\Yii::$app->request->isPost) {
$model->load($_GET);
}
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
$model->addError('_exception', $msg);
}
return $this->render('create', ['model' => $model]);
}

/**
* Updates an existing Galeri model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id
* @return mixed
*/
public function actionUpdate($id)
{
$model = $this->findModel($id);
$oldGambar=$model->gambar;
if ($model->load($_POST)) {
    $gambars = UploadedFile::getInstance($model, 'gambar');
            if ($gambars != NULL) {
                # store the source file name
                $model->gambar = $gambars->name;
                $arr = explode(".", $gambars->name);
                $extension = end($arr);

                # generate a unique file name
                $model->gambar = Yii::$app->security->generateRandomString() . ".{$extension}";

                # the path to save file
                if(file_exists(Yii::getAlias("@app/web/uploads/galeri/")) == false){
                    mkdir(Yii::getAlias("@app/web/uploads/galeri/"), 0777, true);
                }
                $path = Yii::getAlias("@app/web/uploads/galeri/") . $model->gambar;
                if($oldGambar != NULL){

                    $gambars->saveAs($path);
                    unlink(Yii::$app->basePath . '/web/uploads/galeri/' . $oldGambar);
                }else{
                    $gambars->saveAs($path);
                }
            }else{
                $model->gambar = $oldGambar;
            }
            
if($model->save()){
    return $this->redirect(Url::previous());
}

} else {
return $this->render('update', [
'model' => $model,
]);
}
}


public function actionAktif($id){
    $model = $this->findModel($_GET['id']);
    
      if ($model) {
         $model->deleted_status = 0;
        
         if ($model->save()){
            \Yii::$app->getSession()->setFlash(
               'success', 'Berhasil Mempublish'
            );
         } else {
            \Yii::$app->getSession()->setFlash(
               'danger', 'Gagal Mempublish!'
            );
         }
         return $this->redirect(['index']);
      }
    }
      public function actionNonAktif($id){
        $model = $this->findModel($_GET['id']);
        if ($model) {
            $model->deleted_status = 1;
           
            if ($model->save()){
               \Yii::$app->getSession()->setFlash(
                  'success', 'Berhasil NonPublish'
               );
            } else {
               \Yii::$app->getSession()->setFlash(
                  'danger', 'Gagal NonPublish!'
               );
            }
            return $this->redirect(['index']);
         }
          }

/**
* Deletes an existing Galeri model.
* If deletion is successful, the browser will be redirected to the 'index' page.
* @param integer $id
* @return mixed
*/
public function actionDelete($id)
{
try {
$this->findModel($id)->delete();
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
\Yii::$app->getSession()->addFlash('error', $msg);
return $this->redirect(Url::previous());
}

// TODO: improve detection
$isPivot = strstr('$id',',');
if ($isPivot == true) {
return $this->redirect(Url::previous());
} elseif (isset(\Yii::$app->session['__crudReturnUrl']) && \Yii::$app->session['__crudReturnUrl'] != '/') {
Url::remember(null);
$url = \Yii::$app->session['__crudReturnUrl'];
\Yii::$app->session['__crudReturnUrl'] = null;

return $this->redirect($url);
} else {
return $this->redirect(['index']);
}
}

/**
* Finds the Galeri model based on its primary key value.
* If the model is not found, a 404 HTTP exception will be thrown.
* @param integer $id
* @return Galeri the loaded model
* @throws HttpException if the model cannot be found
*/
protected function findModel($id)
{
if (($model = Galeri::findOne($id)) !== null) {
return $model;
} else {
throw new HttpException(404, 'The requested page does not exist.');
}
}
}
