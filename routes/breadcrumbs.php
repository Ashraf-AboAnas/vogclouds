<?php

// Home
Breadcrumbs::for('welcome', function ($trail) {
    $trail->push('welcome', route('welcome'));
});

// Home > website
Breadcrumbs::for('website', function ($trail) {
    $trail->parent('welcome');
    $trail->push('website', route('website'));
});
/*
// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', route('about'));
});*/