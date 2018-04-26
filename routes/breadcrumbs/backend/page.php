<?php

Breadcrumbs::register('admin.page.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.page.main'), route('admin.page.index'));
});

Breadcrumbs::register('admin.page.create', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.page.index');
    $breadcrumbs->push(__('labels.backend.access.page.add'), route('admin.page.create'));
});

Breadcrumbs::register('admin.page.page.show', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.page.index');
    $breadcrumbs->push(__('labels.backend.access.page.show'), route('admin.page.create'));
});

Breadcrumbs::register('admin.page.page.edit', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.page.index');
    $breadcrumbs->push(__('labels.backend.access.page.edit'), route('admin.page.create'));
});
