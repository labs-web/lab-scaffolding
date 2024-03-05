<!-- Project Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('project_id', __('models/tasks.fields.project_id').':'); ?>

    <?php echo Form::number('project_id', null, ['class' => 'form-control', 'required']); ?>

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', __('models/tasks.fields.name').':'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('description', __('models/tasks.fields.description').':'); ?>

    <?php echo Form::text('description', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div><?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/tasks/fields.blade.php ENDPATH**/ ?>