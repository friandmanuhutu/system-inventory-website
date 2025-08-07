<!-- resources/views/layouts/navbar.blade.php -->
<style>
    .custom-navbar {
        background-color: #3b428c; /* biru tua sesuai desain */
        padding: 10px 20px;
        display: flex;
        align-items: center;
        box-shadow: 0px 2px 4px rgba(0,0,0,0.1);
    }

    .custom-navbar img {
        height: 100px;
        margin-right: 10px;
    }

</style>

<div class="custom-navbar">
    <img src="{{ asset('images/logo.png') }}" alt="Logo SAI">
</div>
