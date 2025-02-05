<?php

use kartik\daterange\DateRangePicker;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\Select2;
use kartik\widgets\SwitchInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AseAsesores */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar registro</h3>
            </div>
            <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); ?>
            <div class="card-body">
                <form role="form">

                    <div class="row">
                    <div class="col-md-6">
                            <?= Html::activeLabel($model, 'ase_codigo', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_codigo', ['showLabels' => false])->textInput(['autofocus' => true, 'disabled' => 'disabled']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'ase_nombres', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_nombres', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                            <?= Html::activeLabel($model, 'ase_apellido', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_apellido', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-5">
                            <?= Html::activeLabel($model, 'ase_especialidad', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_especialidad', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-2">
                            <?= Html::activeLabel($model, 'ase_anio', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_anio', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'ase_carnet', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_carnet', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'ase_telefono', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_telefono', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'ase_direccion', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_direccion', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::activeLabel($model, 'ase_email', ['class' => 'control-label']) ?>
                            <?= $form->field($model, 'ase_email', ['showLabels' => false])->textInput(['autofocus' => true]) ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Guardar' : '<i class="fa fa-save"></i> Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-ban"></i> Cancelar', ['index'], ['class' => 'btn btn-danger']) ?>
                    </div>
                </form>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>


