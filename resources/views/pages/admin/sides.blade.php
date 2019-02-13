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
  <div class="page-content proguiden-sides">
    <div class="container-fluid">
      <div class="box-top">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="title">
              <h1>Sider</h1>
            </div>
            <div class="breadcrumb">
              <a href="">Oversikt</a>
              <i class="fa fa-caret-right" aria-hidden="true"></i>
              <span>Sider</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2"></div>
          <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-3">
            <form class="search-form">
              <div class="row">
                <div class="col-xs-8 col-sm-8">
                  <div class="form-group">
                    <input type="text" name="" id="" class="form-control" placeholder="Søk etter side">
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4">
                  <button type="submit" class="btn btn-block btn-light-green">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="box-filter">
        <div class="row">
          <div class="bulk">
            <div class="form-group label-green-arrow without-label">
              <select name="" id="" class="form-control">
                <option value="">Bulk handling</option>
              </select>
            </div>
            <a href="" class="btn btn-light-green">Utfør</a>
          </div>
          <div class="filter-pager">
            <p>8 Sider</p>
            <div class="item btn btn-light-green">
              <i class="fa fa-backward" aria-hidden="true"></i>
            </div>
            <div class="item btn btn-light-green">
              <i class="fa fa-caret-left" aria-hidden="true"></i>
            </div>
            <input type="text" name="" id="" value="2" class="form-control">
            <p>av 2</p>
            <div class="item btn btn-light-green">
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </div>
            <div class="item btn btn-light-green">
              <i class="fa fa-forward" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="table-content">
        <!-- table -->
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  <div class="checkbox checkbox-custom">
                    <label>
                      <input type="checkbox" value="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </th>
                <th>Tittel</th>
                <th>Forfatter</th>
                <th>Publisert</th>
                <th>SEO Tittel</th>
                <th>SEO Beskrivelse</th>
                <th>Handling</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="checkbox checkbox-custom">
                    <label>
                      <input type="checkbox" value="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </td>
                <td>
                  <strong>Hjem</strong>
                </td>
                <td>André M. Hefner</td>
                <td>05.05.18</td>
                <td>
                  <small>Online shopping, litt biligere! | ProGuiden.no</small>
                </td>
                <td class="control-width">
                  <small>Sammenlign priser fra over 250 norske nettbutikker. Vi hjelper deg med å finne...</small>
                </td>
                <td>
                  <a href="">Rediger</a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="checkbox checkbox-custom">
                    <label>
                      <input type="checkbox" value="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </td>
                <td>
                  <strong>Om oss</strong>
                </td>
                <td>André M. Hefner</td>
                <td>05.05.18</td>
                <td>
                  <small>Ingen beskrivelse</small>
                </td>
                <td class="control-width">
                  <small>Ingen beskrivelse</small>
                </td>
                <td>
                  <a href="">Rediger</a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="checkbox checkbox-custom">
                    <label>
                      <input type="checkbox" value="">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </td>
                <td>
                  <strong>Bli Partner </strong>
                </td>
                <td>André M. Hefner</td>
                <td>05.05.18</td>
                <td>
                  <small>Bli Partner | ProGuiden.no </small>
                </td>
                <td class="control-width">
                  <small>Våre medarbeidere ser frem til å høre fra deg. Send oss en melding i dag og...</small>
                </td>
                <td>
                  <a href="">Rediger</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /table -->
      </div>
      <div class="box-filter">
        <div class="row">
          <div class="bulk">
            <div class="form-group label-green-arrow without-label">
              <select name="" id="" class="form-control">
                <option value="">Bulk handling</option>
              </select>
            </div>
            <a href="" class="btn btn-light-green">Utfør</a>
          </div>
          <div class="filter-pager">
            <p>8 Sider</p>
            <div class="item btn btn-light-green">
              <i class="fa fa-backward" aria-hidden="true"></i>
            </div>
            <div class="item btn btn-light-green">
              <i class="fa fa-caret-left" aria-hidden="true"></i>
            </div>
            <input type="text" name="" id="" value="2" class="form-control">
            <p>av 2</p>
            <div class="item btn btn-light-green">
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </div>
            <div class="item btn btn-light-green">
              <i class="fa fa-forward" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 
@section('scripts')
@endsection