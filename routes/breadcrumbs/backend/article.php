<?php

Breadcrumbs::register('admin.article.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.article.main'), route('admin.article.index'));
});

Breadcrumbs::register('admin.article.create', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(__('labels.backend.access.article.add'), route('admin.article.create'));
});

Breadcrumbs::register('admin.article.article.show', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(__('labels.backend.access.article.show'), route('admin.article.create'));
});

Breadcrumbs::register('admin.article.article.edit', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(__('labels.backend.access.article.edit'), route('admin.article.create'));
});
