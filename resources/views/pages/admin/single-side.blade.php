@extends('layouts.private') @section('title', 'Hjem') @section('content')

<div class="page-container open">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-6">
                    <div class="info-user">
                        <p class="name-user">André M. Hefner</p>
                        <span class="avatar">
                            <img src="/assets/images/avatar.svg" class="img-responsive center-block" alt="">
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
    <div class="page-content proguiden-single">
        <div class="container-fluid">
            <div class="box-top">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title">
                            <h1>Rediger side</h1>
                            <a href="" class="btn btn-new">Legg til ny</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-modules">
                <div class="row">
                    <div class="col-xs-12 col-sm-9">
                        <div class="content-box">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="module type-title">
                                        <div class="form-group">
                                            <input type="text" name="" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="module type-permalink">
                                        <strong>Permalenke: </strong><a href="">https://proguiden.no/</a><span class="edit">bli-partner</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#section-1">Section 1</a></li>
                                        <li><a data-toggle="tab" href="#section-2">Section 2</a></li>
                                        <li><a data-toggle="tab" href="#section-3">Section 3</a></li>
                                        <li><a data-toggle="tab" href="#section-4">Section 4</a></li>
                                    </ul>
                                    <div class="module type-wysiwyg">
                                        <div class="summernote-wrapper">
                                            <div class="tab-content">
                                                <div id="section-1" class="tab-pane fade in active">
                                                    <div class="single-description"></div>
                                                </div>
                                                <div id="section-2" class="tab-pane fade">
                                                    <div class="single-description"></div>
                                                </div>
                                                <div id="section-3" class="tab-pane fade">
                                                    <div class="single-description"></div>
                                                </div>
                                                <div id="section-4" class="tab-pane fade">
                                                    <div class="single-description"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="module type-product">
                                        <div class="title" data-toggle="collapse" data-target="#product">
                                            <h6>Produktliste</h6>
                                        </div>
                                        <div id="product" class="collapse in">
                                            <div class="content">
                                                <div class="repeater-item">
                                                    <div class="item-header" data-toggle="collapse" data-target="#item-1">
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>  Produkt 1
                                                    </div>
                                                    <div id="item-1" class="collapse in">
                                                        <div class="item-content">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktnavn</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktbeskrivelse</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktbilde</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="file" name="" id="">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Rating</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <div class="rating">
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="selected">
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="repeater-item">
                                                    <div class="item-header collapsed" data-toggle="collapse" data-target="#item-2">
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>  Produkt 2
                                                    </div>
                                                    <div id="item-2" class="collapse">
                                                        <div class="item-content">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktnavn</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktbeskrivelse</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktbilde</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="file" name="" id="">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Rating</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <div class="rating">
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="selected">
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="repeater-item">
                                                    <div class="item-header collapsed" data-toggle="collapse" data-target="#item-3">
                                                        <span><i class="fa fa-times" aria-hidden="true"></i></span>  Produkt 2
                                                    </div>
                                                    <div id="item-3" class="collapse">
                                                        <div class="item-content">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktnavn</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktbeskrivelse</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Produktbilde</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <input type="file" name="" id="">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-sm-3">
                                                                        <label for="">Rating</label>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        <div class="rating">
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="selected">
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <ul>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                    <li class="active"><i class="fa fa-star" aria-hidden="true"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="module type-complementary">
                                        <div class="title" data-toggle="collapse" data-target="#seo">
                                            <h6>Search Engine Optimization</h6>
                                        </div>
                                        <div id="seo" class="collapse in">
                                            <div class="content">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" id="" placeholder="Meta title">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="" id="" placeholder="Meta description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="module type-status">
                                    <div class="title" data-toggle="collapse" data-target="#status-page">
                                        <h6>Publiser</h6>
                                    </div>
                                    <div id="status-page" class="collapse in">
                                        <div class="content">
                                            <p>Status: <span>Publisert</span></p>
                                            <div class="form-group type-select">
                                                <select name="" id="" class="form-control">
                                                    <option value="">Publisert</option>
                                                    <option value="">Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="footer-module">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6"><a class="delete" href="">Slett side</a></div>
                                                <div class="col-xs-12 col-sm-6"><a href="" class="update">Oppdater</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="module type-category">
                                    <div class="title" data-toggle="collapse" data-target="#category">
                                        <h6>Kategori</h6>
                                    </div>
                                    <div id="category" class="collapse in">
                                        <div class="content">
                                            <div class="list-category">
                                                <ul>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Mobil og nettbrett
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Data og datautstyr
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Lyd og bilde
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Sport og fritid
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Hjem og husholdning
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Foto og video
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Bygg og verktøy
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Mobil og nettbrett
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Data og datautstyr
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Lyd og bilde
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Sport og fritid
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Hjem og husholdning
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Foto og video
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-custom">
                                                            <label>
                                                                <input type="checkbox" value="">Bygg og verktøy
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="footer-module">
                                            <a class="add-category" href="">+ Legg til ny kategori</a>
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control" id="">
                                            </div>
                                            <div class="form-group type-select">
                                                <select name="" id="" class="form-control">
                                                    <option value="">--- Forelderkategori ---</option>
                                                </select>
                                            </div>
                                            <div class="text-right">
                                                <a href="" class="btn btn-category">Legg til ny kategori</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="module type-thumbnail">
                                    <div class="title" data-toggle="collapse" data-target="#thumbnail">
                                        <h6>Last opp bilde</h6>
                                    </div>
                                    <div id="thumbnail" class="collapse in">
                                        <div class="content">
                                            <a href="">Bestem fremhevet bilde</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection 

@section('scripts')
<script src="/js/vendor/jquery-1.11.2.min.js"></script>
<script>
    window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/4618193c9c.js"></script>
<script src="/assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
<script src="/assets/plugins/file/file.js"></script>
<script src="/js/admin-portal.js"></script>
<script>
    jQuery(function () {
        new Proguiden.Controllers.adminPortal();
    });
</script>

<script>
    jQuery(function () {
        $('.single-description').summernote({
            height: 300,
            onfocus: function (e) {
                $('body').addClass('overlay-disabled');
            },
            onblur: function (e) {
                $('body').removeClass('overlay-disabled');
            }
        });
    });
</script>

<script>
    jQuery(function () {
        $('input[type=file]').customFile();
    });
</script>
@endsection