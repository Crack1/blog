<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

use backend\models\TblPost;
use common\component\AccessRule;
use common\models\User;
use yii\web\NotFoundHttpException;
use kartik\mpdf\Pdf;


/**
* Site controller
*/
class SiteController extends Controller
{
  /**
  * @inheritdoc
  */
  public function behaviors()
  {
    return [
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'delete' => ['POST'],
        ],
      ],
      'access' => [
        'class' => AccessControl::className(),
        'ruleConfig' => ['class' => AccessRule::className(), ],
        'only' => ['index','create','update','view',],
        'rules' => [
          [
            //'actions' => ['index'],
            'allow' => true,
            'roles' => [
              //User::ROLE_USER,
              User::ROLE_ADMIN,
            ],
          ],
        ],
      ],
    ];
  }

  /**
  * @inheritdoc
  */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
    ];
  }

  public function actionError()
  {
    $exception = Yii::$app->errorHandler->exception;
    if ($exception !== null) {
      return $this->render('error', ['exception' => $exception]);
    }
  }
  /**
  * Displays homepage.
  *
  * @return string
  */
  public function actionIndex()
  {
    //---Estadisticas rapidas en dashboard ---//
    $TotalPost = TblPost::find()->where(['status'=>1])->count();
    //$TotalCategories = TblCategories::find()->where(['status'=>1])->count();
    $TotalUsers = User::find()->where(['status'=>1])->count();



    return $this->render('index', [
      'TotalPost' => $TotalPost,
      //'TotalCategories' => $TotalCategories,
      'TotalUsers' => $TotalUsers,
    ]);

    //return $this->render('index');
  }


  /**
  * Login action.
  *
  * @return string
  */
  public function actionLogin()
  {
    if (!Yii::$app->user->isGuest) {
      return $this->goHome();
    }

    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
      return $this->goBack();
    } else {
      return $this->render('login', [
        'model' => $model,
      ]);
    }
  }

  /**
  * Logout action.
  *
  * @return string
  */
  public function actionLogout()
  {
    Yii::$app->user->logout();

    return $this->goHome();
  }
}
