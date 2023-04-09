@extends('layouts.app')

@section('content')

           <!-- Main content -->
           <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                    <div class="card">

                        <div class="card-header">

                            <div class="col-sm-12 d-flex justify-content-between p-0">
                                <div class="d-flex justify-content-between">
                                    <a href="./EntityForm.php" class="btn btn-primary"><i class="fa fa-plus"></i> </a>

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
                                            placeholder="Tapez vos mots-clés ici">
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
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 20%">
                                            Titre
                                        </th>
                                        <th style="width: 20%">
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            madani
                                        </td>
                                        <td>
                                            this is ali
                                        </td>

                                        <td class="project-actions text-right">

                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                 Afficher
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                 Modifier
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AHOUZI
                                        </td>
                                        <td>
                                            this is hasna
                                        </td>

                                        <td class="project-actions text-right">

                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                 Afficher
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                 Modifier
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Supprimer
                                            </a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>


                    <!-- /.card -->
                    <div class="card-header">
                        <div class="under-table" >
                            <ul class="pagination pagination my-0">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                            <div class="">
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> Exporter
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> Importer
                                </button>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->



    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('models/projects.plural')</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('projects.create') }}">
                         @lang('crud.add_new') test
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('projects.table')
        </div>
    </div>

@endsection
