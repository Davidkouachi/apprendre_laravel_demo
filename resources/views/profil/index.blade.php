@extends('app')

@section('titre', 'Profil')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="card">
                    <div class="card-aside-wrap">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">
                                            Personal Information
                                        </h4>
                                        <div class="nk-block-des">
                                            <p>
                                                Basic info, like your name and address, that you use on Nio Platform.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                        <a class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside" href="#">
                                            <em class="icon ni ni-menu-alt-r">
                                            </em>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">
                                            Informations personnelles
                                        </h6>
                                    </div>
                                    <div class="data-item" data-bs-target="#profile-edit" data-bs-toggle="modal">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Full Name
                                            </span>
                                            <span class="data-value">
                                                Abu Bin Ishtiyak
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more">
                                                <em class="icon ni ni-forward-ios">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item" data-bs-target="#profile-edit" data-bs-toggle="modal">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Display Name
                                            </span>
                                            <span class="data-value">
                                                Ishtiyak
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more">
                                                <em class="icon ni ni-forward-ios">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Email
                                            </span>
                                            <span class="data-value">
                                                info@softnio.com
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item" data-bs-target="#profile-edit" data-bs-toggle="modal">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Phone Number
                                            </span>
                                            <span class="data-value text-soft">
                                                Not add yet
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more">
                                                <em class="icon ni ni-forward-ios">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item" data-bs-target="#profile-edit" data-bs-toggle="modal">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Date of Birth
                                            </span>
                                            <span class="data-value">
                                                29 Feb, 1986
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more">
                                                <em class="icon ni ni-forward-ios">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="data-item" data-bs-target="#profile-edit" data-bs-toggle="modal" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Address
                                            </span>
                                            <span class="data-value">
                                                2337 Kildeer Drive,
                                                <br>
                                                Kentucky, Canada
                                                </br>
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more">
                                                <em class="icon ni ni-forward-ios">
                                                </em>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">
                                            Préférences
                                        </h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Language
                                            </span>
                                            <span class="data-value">
                                                English (United State)
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <a class="link link-primary" href="#">
                                                Change Language
                                            </a>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Date Format
                                            </span>
                                            <span class="data-value">
                                                M d, YYYY
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <a class="link link-primary" href="#">
                                                Change
                                            </a>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">
                                                Timezone
                                            </span>
                                            <span class="data-value">
                                                Bangladesh (GMT +6)
                                            </span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <a class="link link-primary" href="#">
                                                Change
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">
                                            Sécurité
                                        </h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <div class="nk-block-text data-label">
                                                <h6>
                                                    Change Password
                                                </h6>
                                                <p>
                                                    Set a unique password to protect your account.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-actions data-col data-col-end">
                                            <ul class="align-center gx-3">
                                                <li class="order-md-last">
                                                    <div class="custom-control custom-switch me-n2">
                                                        <input checked="" class="custom-control-input" id="activity-log" type="checkbox">
                                                        <label class="custom-control-label" for="activity-log">
                                                        </label>
                                                        </input>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <div class="nk-block-text data-label">
                                                <h6>
                                                    Save my Activity Logs
                                                </h6>
                                                <p>
                                                    You can save your all activity logs including unusual activity detected.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-actions data-col data-col-end">
                                            <ul class="align-center gx-3">
                                                <li class="order-md-last">
                                                    <div class="custom-control custom-switch me-n2">
                                                        <input checked="" class="custom-control-input" id="activity-log2" type="checkbox">
                                                        <label class="custom-control-label" for="activity-log2">
                                                        </label>
                                                        </input>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <div class="nk-block-text data-label">
                                                <h6>
                                                    2 Factor Auth
                                                    <span class="badge badge-success ms-0">
                                                        Enabled
                                                    </span>
                                                </h6>
                                                <p>
                                                    Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="nk-block-actions data-col data-col-end">
                                            <a class="btn btn-primary" href="#">
                                                Disable
                                            </a>
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

<div class="modal fade" id="profile-edit" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a class="close" data-bs-dismiss="modal" href="#">
                <em class="icon ni ni-cross-sm">
                </em>
            </a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">
                    Update Profile
                </h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personal">
                            Personal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#address">
                            Address
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">
                                        Full Name
                                    </label>
                                    <input class="form-control form-control-lg" id="full-name" placeholder="Enter Full name" type="text" value="Abu Bin Ishtiyak" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">
                                        Display Name
                                    </label>
                                    <input class="form-control form-control-lg" id="display-name" placeholder="Enter display name" type="text" value="Ishtiyak" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">
                                        Phone Number
                                    </label>
                                    <input class="form-control form-control-lg" id="phone-no" placeholder="Phone Number" type="text" value="+880" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">
                                        Date of Birth
                                    </label>
                                    <input class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your birth date" type="text" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input" id="latest-sale" type="checkbox">
                                    <label class="custom-control-label" for="latest-sale">
                                        Use full name to display
                                    </label>
                                    </input>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a class="btn btn-lg btn-primary" data-bs-dismiss="modal" href="#">
                                            Update Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="link link-light" data-bs-dismiss="modal" href="#">
                                            Cancel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">
                                        Address Line 1
                                    </label>
                                    <input class="form-control form-control-lg" id="address-l1" type="text" value="2337 Kildeer Drive" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">
                                        Address Line 2
                                    </label>
                                    <input class="form-control form-control-lg" id="address-l2" type="text" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">
                                        State
                                    </label>
                                    <input class="form-control form-control-lg" id="address-st" type="text" value="Kentucky" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">
                                        Country
                                    </label>
                                    <select class="form-select js-select2" data-ui="lg" id="address-county">
                                        <option>
                                            Canada
                                        </option>
                                        <option>
                                            United State
                                        </option>
                                        <option>
                                            United Kindom
                                        </option>
                                        <option>
                                            Australia
                                        </option>
                                        <option>
                                            India
                                        </option>
                                        <option>
                                            Bangladesh
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a class="btn btn-lg btn-primary" data-bs-dismiss="modal" href="#">
                                            Update Address
                                        </a>
                                    </li>
                                    <li>
                                        <a class="link link-light" data-bs-dismiss="modal" href="#">
                                            Cancel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


