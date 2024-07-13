@extends('layout.app')
@section('content')
<section class="ds s-py-60 s-py-md-90 error-404 not-found page_404">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block divider-110"></div>

            <div class="col-sm-12 text-center">

                <header class="page-header">
                    <h2>
                        404
                        <span class="oops grey">Ooops!</span>
                    </h2>
                    <h3>
                        Sorry Page Not Found!
                    </h3>
                </header>
                <!-- .page-header -->
                <div class="page-content">
                    <p>
                        <a href="{{url('/')}}" class="btn btn-maincolor">BACK TO HOMEPAGE</a>
                    </p>
                </div>
                <!-- .page-content -->
            </div>
            <div class="d-none d-lg-block divider-110"></div>
        </div>
    </div>
</section>
@endsection
