<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard'));
});

// Service
Breadcrumbs::for('service', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Service', route('service'));
});

// Product
Breadcrumbs::for('product', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Product', route('product'));
});

// Detail Product (dynamic)
Breadcrumbs::for('product.show', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('product');
    $trail->push("Detail Product #$id", route('product.show', $id));
});

// Settings Group
Breadcrumbs::for('settings', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Settings', route('settings.profile'));
});

// Settings Profile
Breadcrumbs::for('settings.profile', function (BreadcrumbTrail $trail) {
    $trail->parent('settings');
    $trail->push('Profile');
});

// Settings Password
Breadcrumbs::for('settings.password', function (BreadcrumbTrail $trail) {
    $trail->parent('settings');
    $trail->push('Password');
});

// Settings Appearance
Breadcrumbs::for('settings.appearance', function (BreadcrumbTrail $trail) {
    $trail->parent('settings');
    $trail->push('Appearance');
});

// Settings Delete User
Breadcrumbs::for('settings.delete-user-form', function (BreadcrumbTrail $trail) {
    $trail->parent('settings');
    $trail->push('Delete Account');
});