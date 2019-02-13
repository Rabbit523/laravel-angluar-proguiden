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
  <div class="page-content proguiden-category">
    <div class="container-fluid">
      <div class="box-top">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="title">
              <h1>Kategorier</h1>
            </div>
            <div class="breadcrumb">
              <a href="">Oversikt</a>
              <i class="fa fa-caret-right" aria-hidden="true"></i>
              <span>Kategorier</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
            <a href="" class="btn btn-block btn-light-green">Opprett kategori</a>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-3">
            <form class="search-form">
              <div class="row">
                <div class="col-xs-8 col-sm-8">
                  <div class="form-group">
                    <input type="text" name="" id="" class="form-control" placeholder="Søk etter kategori">
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
          <div class="categories">
            <div class="form-group label-green-arrow">
              <label for="">Kategorier</label>
              <select name="" id="" class="form-control">
                <option value="">Vis alle</option>
              </select>
            </div>
            <div class="form-group label-green-arrow">
              <label for="">Subkategorier</label>
              <select name="" id="" class="form-control">
                <option value="">Vis alle</option>
              </select>
            </div>
            <a href="" class="btn btn-light-green">Oppdater</a>
          </div>
          <div class="filter-pager">
            <p class="hidden-md">12 kategorier</p>
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
                <th>Bilde</th>
                <th>Kategorinavn</th>
                <th>URL</th>
                <th>Produkter</th>
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
                  <img src="assets/images/table-img-1.png" alt="" class="img-responsive">
                </td>
                <td>
                  <strong>Mobil og nettbrett</strong>
                </td>
                <td>mobil-nettbrett</td>
                <td>65</td>
                <td>
                  <a href="">Rediger</a>
                  <a href="">Vis</a>
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
                  <img src="assets/images/table-img-2.png" alt="" class="img-responsive">
                </td>
                <td>
                  <strong>Mobil og nettbrett</strong>
                </td>
                <td>mobil-nettbrett</td>
                <td>65</td>
                <td>
                  <a href="">Rediger</a>
                  <a href="">Vis</a>
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
                  <img src="assets/images/table-img-defautl.png" alt="" class="img-responsive">
                </td>
                <td>
                  <strong>Mobil og nettbrett</strong>
                </td>
                <td>mobil-nettbrett</td>
                <td>65</td>
                <td>
                  <a href="">Rediger</a>
                  <a href="">Vis</a>
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
                  <img src="assets/images/table-img-defautl.png" alt="" class="img-responsive">
                </td>
                <td>
                  <strong>Mobil og nettbrett</strong>
                </td>
                <td>mobil-nettbrett</td>
                <td>65</td>
                <td>
                  <a href="">Rediger</a>
                  <a href="">Vis</a>
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
                  <img src="assets/images/table-img-1.png" alt="" class="img-responsive">
                </td>
                <td>
                  <strong>Mobil og nettbrett</strong>
                </td>
                <td>mobil-nettbrett</td>
                <td>65</td>
                <td>
                  <a href="">Rediger</a>
                  <a href="">Vis</a>
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
                  <img src="assets/images/table-img-2.png" alt="" class="img-responsive">
                </td>
                <td>
                  <strong>Mobil og nettbrett</strong>
                </td>
                <td>mobil-nettbrett</td>
                <td>65</td>
                <td>
                  <a href="">Rediger</a>
                  <a href="">Vis</a>
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
          <div class="categories">
            <div class="form-group label-green-arrow">
              <label for="">Kategorier</label>
              <select name="" id="" class="form-control">
                <option value="">Vis alle</option>
              </select>
            </div>
            <div class="form-group label-green-arrow">
              <label for="">Subkategorier</label>
              <select name="" id="" class="form-control">
                <option value="">Vis alle</option>
              </select>
            </div>
            <a href="" class="btn btn-light-green">Oppdater</a>
          </div>
          <div class="filter-pager">
            <p class="hidden-md">12 kategorier</p>
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
<script src="js/admin-portal.js"></script>
<script>
  jQuery(function () {
    new Proguiden.Controllers.adminPortal();
  });
</script>
@endsection 
