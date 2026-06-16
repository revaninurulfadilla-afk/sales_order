<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $title ?? 'Sales Order'; ?></title>

<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
<script defer src="<?= base_url('assets/js/alpine.min.js'); ?>"></script>

</head>

<body
x-data="{
    page: '',
    loaded: true,
    darkMode: false,
    stickyMenu: false,
    sidebarToggle: false,
    scrollTop: false
}"
x-init="
darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))
"
:class="{ 'dark bg-gray-900': darkMode === true }"
>

<div class="flex h-screen overflow-hidden">