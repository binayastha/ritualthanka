@extends ('backend.layouts.app')

@section ('title', app_name() . ' | ' . __('labels.backend.access.article.main'))

@section('content')
    {{ html()->form('POST', route('admin.article.article.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.article.management') }}
                        <small class="text-muted">{{ __('labels.backend.access.article.add') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.article.title'))->class('col-md-2 form-control-label')->for('title') }}

                        <div class="col-md-10">
                            {{ html()->text('title')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.article.title'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.article.slug'))->class('col-md-2 form-control-label')->for('slug') }}

                        <div class="col-md-10">
                            {{ html()->text('slug')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.article.slug'))
                                ->attribute('maxlength', 191)
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->


                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.article.description'))->class('col-md-2 form-control-label')->for('article_content') }}

                        <div class="col-md-10">
                            {{ html()->textarea('article_content')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.article.description'))
                                 }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.article.photo'))->class('col-md-2 form-control-label')->for('photo') }}

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
                                    ->placeholder(__('validation.attributes.backend.access.article.upload'))
                                }}
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">

                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label(__('validation.attributes.backend.access.article.publish'))->class('col-md-2 form-control-label')->for('active') }}

                        <div class="col-md-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="status" value="1" checked>
                                    Publish
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="status" value="0">
                                    Unpublish
                                </label>
                            </div>
                        </div><!--col-->
                    </div><!--form-group-->

                </div>
            </div>
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.article.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->

    </div>
    {{ html()->form()->close() }}
@endsection
