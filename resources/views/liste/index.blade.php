@extends('app')

@section('titre', 'Liste')

@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-12">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Liste des utilisateurs</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col">N°</th>
                                                <th class="nk-tb-col"><span class="sub-text">Nom et prenoms</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Téléphone</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date de création</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listes as $key => $liste)
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col">{{ $key+1}}</td>
                                                <td class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                            <em class="icon ni ni-user" ></em>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead">{{$liste->name}}
                                                                @if($liste->statut === 'en ligne')
                                                                    <span class="dot dot-success d-md-none ms-1"></span>
                                                                @else
                                                                    <span class="dot dot-danger d-md-none ms-1"></span>
                                                                @endif
                                                            </span>
                                                            <span>{{$liste->email}}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <span>+225 {{$liste->tel}} </span>
                                                </td>
                                                <td class="nk-tb-col tb-col-lg">
                                                    <span>{{ \Carbon\Carbon::parse($liste->created_at)->translatedFormat('j F Y '.' à '.' H:i:s') }}</span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    @if($liste->statut === 'en ligne')
                                                        <span class="tb-status text-success">Connecté</span>
                                                    @else
                                                        <span class="tb-status text-danger">Deconnecté</span>
                                                    @endif
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{ route('liste_update', ['id' => $liste->id]) }}"><em class="icon ni ni-upload-cloud"></em><span>Mise a jour</span></a></li>
                                                                        <li><a data-bs-toggle="modal" data-bs-target="#modalSupprimer{{ $liste->id }}"><em class="icon ni ni-trash"></em><span>Supprimer</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($listes as $liste)
    <div class="modal fade" tabindex="-1" id="modalSupprimer{{ $liste->id }}" aria-modal="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal"><em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Confirmation</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">
                                <span>Voulez-vous vraiment supprimer cet utilisateur ?</span>
                            </div>
                        </div>
                        <div class="nk-modal-action">
                            <a id="form_click" href="{{ route('supprimer', ['id' => $liste->id]) }}" class="btn btn-lg btn-mw btn-success me-2">
                                oui
                            </a>
                            <a href="#" class="btn btn-lg btn-mw btn-danger" data-bs-dismiss="modal">
                                non
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection


