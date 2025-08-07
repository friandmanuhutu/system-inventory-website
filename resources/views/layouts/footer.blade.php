<!-- resources/views/layouts/footer.blade.php -->
<style>
    .custom-footer {
        background-color: #3b428c; /* warna biru tua */
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px -2px 4px rgba(0,0,0,0.1);
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .custom-footer img {
        height: 40px;
        margin-right: 10px;
    }

    .custom-footer h1 {
        color: white;
        margin-bottom: 30px;
        padding-top: 25px;
        font-size: 20px;
        text-align: center;
    }

    /* .custom-footer p {
        color: white;
        text-align: center;
        margin: 0;
        font-size: 12px;
    } */
</style>

<div class="custom-footer">
    <div>
        <h1>SISTEM GUDANG BRANCH SURABAYA</h1>
        {{-- <p>Let us distribute yours!</p> --}}
    </div>
</div>
