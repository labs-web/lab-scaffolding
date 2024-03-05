<!-- First Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('first_name', __('models/members.fields.first_name').':'); ?>

    <?php echo Form::text('first_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('last_name', __('models/members.fields.last_name').':'); ?>

    <?php echo Form::text('last_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]); ?>

</div><?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/members/fields.blade.php ENDPATH**/ ?>