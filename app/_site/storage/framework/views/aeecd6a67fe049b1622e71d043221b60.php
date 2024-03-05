<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', __('models/projects.fields.name').':'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('description', __('models/projects.fields.description').':'); ?>

    <?php echo Form::text('description', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div><?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/projects/fields.blade.php ENDPATH**/ ?>