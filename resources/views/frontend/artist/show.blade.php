@extends('frontend.layouts.app')

@section('title', app_name() . ' | Artists Page')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {!! $artistInfo->fullname !!}
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><i class="fa fa-user"></i> {{ __('labels.backend.access.artist.tabs.titles.overview') }}</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-hover">

                                        <tr>
                                            <th width="25%">{{ __('labels.backend.access.artist.tabs.content.overview.fullname') }}</th>
                                            <td>{!! $artistInfo->fullname !!}</td>
                                        </tr>

                                        {{--<tr>
                                            <th>{{ __('labels.backend.access.artist.tabs.content.overview.dob') }}</th>
                                            <td>{!! $artistInfo->dob !!}</td>
                                        </tr>--}}

                                        <tr>
                                            <th>{{ __('labels.backend.access.artist.tabs.content.overview.email') }}</th>
                                            <td>{!! $artistInfo->email !!}</td>
                                        </tr>

                                        <tr>
                                            <th>{{ __('labels.backend.access.artist.tabs.content.overview.contact') }}</th>
                                            <td>{!! $artistInfo->contact !!}</td>
                                        </tr>

                                        <tr>
                                            <th>{{ __('labels.backend.access.artist.tabs.content.overview.address') }}</th>
                                            <td>{!! $artistInfo->address !!}</td>
                                        </tr>

                                        <tr>
                                            <th>{{ __('labels.backend.access.artist.tabs.content.overview.message') }}</th>
                                            <td>{!!  $artistInfo->message  !!}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div><!--table-responsive-->
                        </div><!--tab-->
                    </div><!--tab-content-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

    </div><!--card-->

@endsection