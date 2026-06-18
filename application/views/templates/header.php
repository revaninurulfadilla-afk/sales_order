<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $title ?? 'Sales Order'; ?></title>

<link rel="stylesheet"
      href="<?= base_url('assets/build/style.css'); ?>">

<script defer
        src="<?= base_url('assets/build/bundle.js'); ?>">
</script>

</head>

<body
x-data="{
    page:'',
    loaded:true,
    darkMode:false,
    stickyMenu:false,
    sidebarToggle:false,
    scrollTop:false
}"
x-init="
    darkMode = localStorage.getItem('darkMode') === 'true';

    if(darkMode){
        document.documentElement.classList.add('dark');
    }

    $watch('darkMode', value => {
        localStorage.setItem('darkMode', value);

        if(value){
            document.documentElement.classList.add('dark');
        }else{
            document.documentElement.classList.remove('dark');
        }
    });
"
>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

<div class="flex h-screen overflow-hidden">