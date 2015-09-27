<?php

class ObSectionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */ 
	public function accessRules()
	{
		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array(),
//				'users'=>array('*'),
//			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'logout', 'view', 'index'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'logout'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{       
                 $this->layout = "admin-main";
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{            
                $this->layout = "admin-main";
		$model=new Obsection; 
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
                $sectionType = Obsectiontype::model()->findAll();  
		if(isset($_POST['Obsection']))
		{
			   $model->attributes=$_POST['Obsection'];
                          //write a template php file 
                            $filename = $model->sectionName.'.php';                            
                            if(!file_exists('protected/views/site/'.$filename))
                            {
                                $defaultContent = '<?php print_r($model); ?>';
                                if(file_put_contents('protected/views/site/'.$filename, $defaultContent))
                                {
                                    if($model->save())
                                    {
                                       $this->redirect(array('view','id'=>$model->id)); 
                                    }
                                }
                                else
                                {
                                     echo 'cant write file';
                                }
                                   
                            }
                            else
                            {
                                echo 'This section already exists';
                            }
                               
		} 
		$this->render('create',array(
			'model'=>$model,
                        'sectionType'=>$sectionType
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
                $this->layout = "admin-main";
		$model=$this->loadModel($id);
                $sectionType = Obsectiontype::model()->findAll(); 
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Obsection']))
		{
			$model->attributes=$_POST['Obsection'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
                        'sectionType'=>$sectionType
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{ 
                $this->layout = "admin-main";
		$dataProvider=new CActiveDataProvider('Obsection');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                $this->layout = "admin-main";
		$model=new Obsection('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Obsection']))
			$model->attributes=$_GET['Obsection'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
         

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Obsection the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Obsection::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Obsection $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='obsection-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}        
}
