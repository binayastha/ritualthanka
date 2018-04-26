@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.artist.main'))

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.artist.management') }}
                        <small class="text-muted">{{ __('labels.backend.access.artist.show') }}</small>
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

                                        <tr>
                                            <th>{{ __('labels.backend.access.artist.tabs.content.overview.dob') }}</th>
                                            <td>{!! $artistInfo->dob !!}</td>
                                        </tr>

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

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.access.artist.tabs.content.overview.created_at') }}:</strong> {{ $artistInfo->updated_at->timezone(get_user_timezone()) }} ({{ $artistInfo->created_at->diffForHumans() }}),
                        <strong>{{ __('labels.backend.access.artist.tabs.content.overview.last_updated') }}:</strong> {{ $artistInfo->created_at->timezone(get_user_timezone()) }} ({{ $artistInfo->updated_at->diffForHumans() }})
                        {{--@if ($user->trashed())
                            <strong>{{ __('labels.backend.access.artist.tabs.content.overview.deleted_at') }}:</strong> {{ $user->deleted_at->timezone(get_user_timezone()) }} ({{ $user->deleted_at->diffForHumans() }})
                        @endif--}}
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->




@endsection