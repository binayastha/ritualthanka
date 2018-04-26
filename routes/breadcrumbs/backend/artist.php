<?php

Breadcrumbs::register('admin.artist.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.access.artist.main'), route('admin.artist.index'));
});

Breadcrumbs::register('admin.artist.create', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.artist.index');
    $breadcrumbs->push(__('labels.backend.access.artist.add'), route('admin.artist.create'));
});

Breadcrumbs::register('admin.artist.artist.show', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.artist.index');
    $breadcrumbs->push(__('labels.backend.access.artist.show'), route('admin.artist.create'));
});

Breadcrumbs::register('admin.artist.artist.edit', function ($breadcrumbs) {
    //$breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->parent('admin.artist.index');
    $breadcrumbs->push(__('labels.backend.access.artist.edit'), route('admin.artist.create'));
});
