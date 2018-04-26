@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.artist.main'))

@section('content')
    {{ html()->form('POST', route('admin.artist.artist.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.artist.management') }}
                        <small class="text-muted">{{ __('labels.backend.access.artist.add') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.artist.fullname'))->class('col-md-2 form-control-label')->for('fullname') }}

                        <div class="col-md-10">
                            {{ html()->text('fullname')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.artist.fullname'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.artist.email'))->class('col-md-2 form-control-label')->for('email') }}

                        <div class="col-md-10">
                            {{ html()->text('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.artist.email'))
                                ->attribute('maxlength', 191)
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.artist.contact'))->class('col-md-2 form-control-label')->for('contact') }}

                        <div class="col-md-10">
                            {{ html()->text('contact')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.artist.contact'))
                                ->attribute('maxlength', 191)
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.artist.address'))->class('col-md-2 form-control-label')->for('address') }}

                        <div class="col-md-10">
                            {{ html()->text('address')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.artist.address'))
                                ->attribute('maxlength', 191) }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.artist.message'))->class('col-md-2 form-control-label')->for('message') }}

                        <div class="col-md-10">
                            {{ html()->textarea('message')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.artist.message'))
                                 }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.artist.photo'))->class('col-md-2 form-control-label')->for('message') }}

                        <div class="col-md-10">
                            <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                         <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                {{
                                    html()->text('image')
                                    ->class('form-control')
                                    ->id('thumbnail')
                                    ->placeholder(__('validation.attributes.backend.access.artist.upload'))
                                }}
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">

                        </div><!--col-->
                    </div><!--form-group-->

                </div>
            </div>
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.artist.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->

    </div>
    {{ html()->form()->close() }}
@endsection
