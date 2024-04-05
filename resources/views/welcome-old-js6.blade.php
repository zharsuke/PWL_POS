<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    @extends('adminlte::page')
    @section('title', 'Dashboard')
    @section('content_header')
        <h1>Dashboard</h1>
    @stop
    @section('content')
        <!-- general form elements disabled -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">General Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Text Disabled</label>
                                <input type="text" class="form-control" placeholder="Enter ..." disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Textarea Disabled</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- input states -->
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                            success</label>
                        <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                            warning</label>
                        <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                            error</label>
                        <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Checkbox</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <label class="form-check-label">Checkbox checked</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" disabled>
                                    <label class="form-check-label">Checkbox disabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label">Radio</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1" checked>
                                    <label class="form-check-label">Radio checked</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" disabled>
                                    <label class="form-check-label">Radio disabled</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Disabled</label>
                                <select class="form-control" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Select multiple-->
                            <div class="form-group">
                                <label>Select Multiple</label>
                                <select multiple class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Multiple Disabled</label>
                                <select multiple class="form-control" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- general form elements disabled -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Custom Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                        value="option1">
                                    <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                                    <label for="customCheckbox2" class="custom-control-label">Custom Checkbox
                                        checked</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                                    <label for="customCheckbox3" class="custom-control-label">Custom Checkbox
                                        disabled</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input custom-control-input-danger" type="checkbox"
                                        id="customCheckbox4" checked>
                                    <label for="customCheckbox4" class="custom-control-label">Custom Checkbox with custom
                                        color</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input
                                        class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                        type="checkbox" id="customCheckbox5" checked>
                                    <label for="customCheckbox5" class="custom-control-label">Custom Checkbox with custom
                                        color outline</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1"
                                        name="customRadio">
                                    <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                        name="customRadio" checked>
                                    <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio3" disabled>
                                    <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-danger" type="radio"
                                        id="customRadio4" name="customRadio2" checked>
                                    <label for="customRadio4" class="custom-control-label">Custom Radio with custom
                                        color</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input
                                        class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                        type="radio" id="customRadio5" name="customRadio2">
                                    <label for="customRadio5" class="custom-control-label">Custom Radio with custom color
                                        outline</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Custom Select</label>
                                <select class="custom-select">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Custom Select Disabled</label>
                                <select class="custom-select" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Select multiple-->
                            <div class="form-group">
                                <label>Custom Select Multiple</label>
                                <select multiple class="custom-select">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Custom Select Multiple Disabled</label>
                                <select multiple class="custom-select" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Toggle this custom switch
                                element</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with
                                custom colors danger/success</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Disabled custom switch element</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customRange1">Custom range</label>
                        <input type="range" class="custom-range" id="customRange1">
                    </div>
                    <div class="form-group">
                        <label for="customRange2">Custom range (custom-range-danger)</label>
                        <input type="range" class="custom-range custom-range-danger" id="customRange2">
                    </div>
                    <div class="form-group">
                        <label for="customRange3">Custom range (custom-range-teal)</label>
                        <input type="range" class="custom-range custom-range-teal" id="customRange3">
                    </div>
                    <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    @stop
    @section('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @stop
    @section('js')
        <script>
            console.log("Hi, I'm using the Laravel-AdminLTE package!");
        </script>
    @stop

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>

</body>

</html>
