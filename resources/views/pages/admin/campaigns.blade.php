@extends('layouts.private') @section('title', 'Hjem') @section('content')
<div class="page-container open">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-6">
                    <div class="info-user">
                        <p class="name-user">André M. Hefner</p>
                        <span class="avatar">
                            <img src="assets/images/avatar.svg" class="img-responsive center-block" alt="">
                        </span>
                    </div>
                    <button type="button" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content proguiden-campaigns">
        <div class="container-fluid">
            <div class="box-top">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="title">
                            <h1>Kampanjer</h1>
                        </div>
                        <div class="breadcrumb">
                            <a href="">Oversikt</a>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <span>Kampanjer</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-7">
                        <div class="row no-gutter">
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group search">
                                    <input type="text" name="" id="" class="form-control" placeholder="Søk">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group label-green-arrow">
                                    <label for="">Affiliateprogram</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">TradeTracker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group label-green-arrow">
                                    <label for="">Kampanjer</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Hobby & fritid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group label-green-arrow">
                                    <label for="">Subkategorier</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Fisking</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <a href="" class="btn btn-block btn-green btn-lg">Oppdater</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection @section('scripts')
<script src="js/admin-portal.js"></script>
<script>
    jQuery(function () {
        new Proguiden.Controllers.adminPortal();
    });
</script> @endsection