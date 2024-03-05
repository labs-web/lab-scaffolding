<div class="card-header">
    <div class="col-sm-12 d-flex justify-content-between p-0">
        <div class="d-flex justify-content-between">
            <select   class="form-select  btn-default dropdown-toggle ml-2 filter" aria-label="Default select example">
                <option selected>Parents</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input type="search" class="form-control form-control-lg"
                    placeholder="Recherche">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="<?php echo e($config->modelNames->dashedPlural); ?>-table">
            <thead>
            <tr>
                <?php echo $fieldHeaders; ?>

<?php if($config->options->localized): ?>
                <th colspan="3"><?php echo app('translator')->get('crud.action'); ?></th>
<?php else: ?>
                <th colspan="3">Action</th>
<?php endif; ?>
            </tr>
            </thead>
            <tbody>
            @foreach($<?php echo e($config->modelNames->camelPlural); ?> as $<?php echo e($config->modelNames->camel); ?>)
                <tr>
                    <?php echo $fieldBody; ?>

                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['<?php echo e($config->prefixes->getRoutePrefixWith('.')); ?><?php echo e($config->modelNames->camelPlural); ?>.destroy', $<?php echo e($config->modelNames->camel); ?>-><?php echo e($config->primaryName); ?>], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('<?php echo $config->prefixes->getRoutePrefixWith('.'); ?><?php echo $config->modelNames->camelPlural; ?>.show', [$<?php echo $config->modelNames->camel; ?>-><?php echo $config->primaryName; ?>]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('<?php echo $config->prefixes->getRoutePrefixWith('.'); ?><?php echo $config->modelNames->camelPlural; ?>.edit', [$<?php echo $config->modelNames->camel; ?>-><?php echo $config->primaryName; ?>]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            <?php echo $paginate; ?>

        </div>
        <div class="float-left">
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> Exporter
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> Importer
                                </button>
        </div>
    </div>
</div>
<?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/vendor/adminlte-templates/templates/scaffold/table/blade/body.blade.php ENDPATH**/ ?>