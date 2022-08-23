@extends('espaces-depositaires.layout-dep.app-dep')
@section('demande')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5>Accueil</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Choix de la demande</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row">

                            <!-- [ basic-collapse ] start -->
                            <div class="col-sm-12">
                                <h5 class="mb-3">Basic Collapse</h5>
                                <hr>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-primary m-t-5" href="{{url('creerDemande')}}" role="button">Demande d'enregistrement</a>
                                        <button class="btn btn-primary" type="button" data-target="#collapseExample">Demande d'extrait de plan</button>
                                    </div>
                                </div>
                            </div>
                            <!-- [ basic-collapse ] end -->
                            <!-- [ multiple-collapse ] start -->
                            <div class="col-sm-12 mb-3">
                                <h5 class="mb-3">Explications sur les types de demandes</h5>
                                <hr>
                                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Cas ou le terrain est enregistré</a>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Cas ou le terrain n'est pas enregistré</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">voir les deux en meme temps</button>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="mb-0">Dans le cas ou le terrain est deja habite ou deja bati il ne necessite pas d'etre enregistrer cependant vous pouvez demarcher au niveau du service du cadastre  pour demander l'extrait de plan cadastral de votre terrain ou maison.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="mb-0">
                                                        Dans le cas ou le terrain est nu et nom matriculé il necessite d'etre enregistrer pour pouvoir faire les demandes d'extrait de plan cadastral et de bail.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ multiple-collapse ] end -->
                        </div>

                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
