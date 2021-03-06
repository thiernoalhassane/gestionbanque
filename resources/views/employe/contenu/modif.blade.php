@extends('acceuilemp')

@section('head')

    <style type="text/css" xmlns="http://www.w3.org/1999/html">
        .a {
            margin-left: 20px;
        }
        .titre{
            color: white;
            background-color: #1f91f3 !important;
            border-radius: 5px;
            font-size: medium;
        }
    </style>

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Colorpicker Css -->
    {!! HTML::style('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') !!}
    <!-- Dropzone Css -->
    {!! HTML::style('plugins/dropzone/dropzone.css') !!}
    <!-- Multi Select Css -->
    {!! HTML::style('plugins/multi-select/css/multi-select.css') !!}

    <!-- Bootstrap Spinner Css -->
    {!! HTML::style('plugins/jquery-spinner/css/bootstrap-spinner.css') !!}

    <!-- Bootstrap Tagsinput Css -->
    {!! HTML::style('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}

    <!-- Bootstrap Select Css -->
    {!! HTML::style('plugins/bootstrap-select/css/bootstrap-select.css') !!}

    <!-- noUISlider Css -->
    {!! HTML::style('plugins/nouislider/nouislider.min.css') !!}
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


    <!-- Colorpicker Css -->
    {!! HTML::style('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') !!}

    <!-- Dropzone Css -->
    {!! HTML::style('plugins/dropzone/dropzone.css') !!}

    <!-- Multi Select Css -->
    {!! HTML::style('plugins/multi-select/css/multi-select.css') !!}

    <!-- Bootstrap Spinner Css -->
    {!! HTML::style('plugins/jquery-spinner/css/bootstrap-spinner.css') !!}

    <!-- Bootstrap Tagsinput Css -->
    {!! HTML::style('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}

    <!-- Bootstrap Select Css -->
    {!! HTML::style('plugins/bootstrap-select/css/bootstrap-select.css') !!}

    <!-- noUISlider Css -->
    {!! HTML::style('plugins/nouislider/nouislider.min.css') !!}




@stop
@section('title')

    <!--<div class="a">
        <h2>
            Nouvelle cotisation Etape 2 : Enregistrement de la cotisation
        </h2>
    </div>-->
    <div class="panel panel-heading">
        <strong>MODIFICATION CLIENT</strong>

    </div>

@stop

@section('table')
    @if(Session::has('epargne'))
        @include('partials/error', ['type' => 'info', 'message' => Session::get('epargne') ])
    @endif


    <div class="body">




        <form role="form" method="POST" action="{{ url('/employe/modifier', $id= auth()->user()->id) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <legend >
                <STRONG> MODIFICATION DU COMPTE  </STRONG>
            </legend>
            <div class="col-md-12">
                <div class="col-md-4">
                    <label for="nom">Nom de l'employe</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" id="username" name="username" value="{{auth()->user()->nom}}"  required onkeypress="return valid_text(event);">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="nom"> Nouveau Mot de passe</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" id="password" name="password"   required>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="nom">Code</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" id="code" name="code"  value="{{ auth()->user()->code }}" required>
                        </div>
                    </div>
                </div>
            </div>

            <legend >
                <STRONG> INFORMATIONS PERSONNELLES </STRONG>
            </legend>
            <div class="col-md-12">
                <div class="col-md-4">
                    <label for="email">Email</label>
                    <div class="demo-masked-input">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control email" id="email" name="email" placeholder="Ex: example@example.com" required value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Prénom</label>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prénom " value="{{ auth()->user()->prenom }}" required onkeypress="return valid_text(event);">
                        </div>
                    </div>
                </div>
            </div>





    <div class="body">



        <br>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="button-demo">
                    <button class="btn btn-primary waves-effect" type="submit">VALIDER
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <a class="btn bg-special waves-effect m-b-15 pull-right" role="button"  href="/employe/home">
                    RETOUR
                </a>
            </div>

        </div>
    </div>


    </form>



    </div>
    </div>
    </div>
    </div>
    </div>

    </div>



@stop
@section('scripts')

    <!-- Bootstrap Colorpicker Js -->
    {!! HTML::script('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') !!}
    <!-- Dropzone Plugin Js -->
    {!! HTML::script('plugins/dropzone/dropzone.js') !!}

    <!-- Input Mask Plugin Js -->
    {!! HTML::script('plugins/jquery-inputmask/jquery.inputmask.bundle.js') !!}

    <!-- Multi Select Plugin Js -->
    {!! HTML::script('plugins/multi-select/js/jquery.multi-select.js') !!}

    <!-- Jquery Spinner Plugin Js -->
    {!! HTML::script('plugins/jquery-spinner/js/jquery.spinner.js') !!}

    <!-- Bootstrap Tags Input Plugin Js -->
    {!! HTML::script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}

    <!-- noUISlider Plugin Js -->
    {!! HTML::script('plugins/nouislider/nouislider.js') !!}

    <!-- Custom Js -->
    {!! HTML::script('js/pages/forms/advanced-form-elements.js') !!}

    {!! HTML::script('js/helpers.js') !!}

    {!! HTML::script('js/pages/forms/basic-form-elements.js') !!}

@stop