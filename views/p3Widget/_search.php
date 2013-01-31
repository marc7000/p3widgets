<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'id'); ?>
                            <?php echo $form->textField($model,'id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'alias'); ?>
                            <?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'rank'); ?>
                            <?php echo $form->textField($model,'rank'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'containerId'); ?>
                            <?php echo $form->textField($model,'containerId',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'moduleId'); ?>
                            <?php echo $form->textField($model,'moduleId',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'controllerId'); ?>
                            <?php echo $form->textField($model,'controllerId',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'actionName'); ?>
                            <?php echo $form->textField($model,'actionName',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'requestParam'); ?>
                            <?php echo $form->textField($model,'requestParam',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'sessionParam'); ?>
                            <?php echo $form->textField($model,'sessionParam',array('size'=>60,'maxlength'=>128)); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('P3WidgetsModule.crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
