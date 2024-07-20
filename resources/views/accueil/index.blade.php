@extends('app')

@section('titre', 'Accueil')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-12">
                            <div class="card card-preview">
                                <div class="card-inner text-center ">
                                    <img height="auto" width="auto" src="image/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group bg-light rounded " style="padding: 15px 10px 0px 10px;">
                                <marquee behavior="" direction="">
                                    <label class="form-label">
                                        <span class="text-danger">
                                            Informations :
                                        </span>
                                        <span class="">
                                            Message
                                        </span>
                                    </label>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


