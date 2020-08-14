@extends('layouts.dashboard.app')
@section('content')
<body style="background-image: url(dashboard/images/main.png)">
    <!-- Start REFERENServices & FeesCES Page -->
    <section class="references-services-page mb-5"> 
        <header class="main">
            <h1 class="text-white text-center p-5 wow fadeInUp" data-wow-duration="2s">REFERENCES</h1>
        </header>
        <article>
            <div class="container mt-4 text-white">
                <header>
                    <h4>
                        <strong>
                            Services & Fees
                        </strong>
                    </h4>
                </header>
                <article class="mt-5">
                    <!-- Start The Tabs Section -->
                    <ul class="nav parent nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">A</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-tasks-tab" data-toggle="pill" href="#pills-tasks" role="tab" aria-controls="pills-tasks" aria-selected="false">B</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-Maersk-tab" data-toggle="pill" href="#pills-Maersk" role="tab" aria-controls="pills-Maersk" aria-selected="false">C</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-changes-tab" data-toggle="pill" href="#pills-changes" role="tab" aria-controls="pills-changes" aria-selected="false">D</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">E</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">F</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">G</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">H</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">I</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">J</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">K</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">L</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">M</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">N</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">O</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">P</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">Q</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">R</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">S</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">T</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">U</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">V</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">W</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">X</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">Y</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">Z</a>
                        </li>
                    </ul>
                    <!-- End The Tabs Section -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Start The All Tab -->
                        <div class="tab-pane fade show active mt-4" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered text-white">
                                    <tbody>
                                        <tr>
                                            <th style="width: 35%" scope="col">
                                                <p>
                                                    Agency Documentation Fee Exports
                                                </p>
                                                <p class="mb-0">
                                                    <strong>ADE</strong>
                                                </p>
                                            </th>
                                            <th style="width: 65%" scope="col">
                                                <p>
                                                    This service covers the creation and processing of documents necessary at Origin to complete a shipment i.e. Bill of Lading (B/L), Delivery Order.
                                                </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="width: 35%" scope="col">
                                                <p>
                                                    Agency Documentation Fee Exports
                                                </p>
                                                <p class="mb-0">
                                                    <strong>ADE</strong>
                                                </p>
                                            </th>
                                            <th style="width: 65%" scope="col">
                                                <p>
                                                    This service covers the creation and processing of documents necessary at Origin to complete a shipment i.e. Bill of Lading (B/L), Delivery Order.
                                                </p>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End The All Tab -->
                        <div class="tab-pane fade mt-4" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                            ..,
                        </div>
                        <div class="tab-pane fade mt-4" id="pills-Maersk" role="tabpanel" aria-labelledby="pills-Maersk-tab">...</div>
                        <div class="tab-pane fade mt-4" id="pills-changes" role="tabpanel" aria-labelledby="pills-changes-tab">...</div>
                        <div class="tab-pane fade mt-4" id="pills-customs" role="tabpanel" aria-labelledby="pills-customs-tab">...</div>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <!-- End Services & Fees Page -->

@endsection