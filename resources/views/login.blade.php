@include('layouts.navbar')

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: white;
        font-family: Arial, sans-serif;
    }

    .login-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: right;
        background: url('{{ asset('images/background.png') }}') no-repeat center center;
        background-size: cover;
        position: relative;
        padding-right: 250px;
    }


    .login-box {
        background: rgba(255, 255, 255, 0.9); /* transparansi putih agar teks tetap terbaca */
        padding: 50px 50px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.15);
        width: 100%;
        max-width: 380px;
        text-align: center;
    }

    .login-box h2 {
        color: #2e307d;
        font-size: 40px;
        font-weight: 900;
        padding-bottom: 20px;
    }
    

    .login-box input[type="text"],
    .login-box input[type="password"] {
        width: 100%;
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-box a {
        font-size: 20px;
        color: #3b58c4;
        text-decoration: underline;

    }

    .login-box button {
        background-color: #2e307d;
        color: white;
        padding: 20px;
        width: 100%;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        margin-top: 15px;
        margin-bottom: 20px;
    }

    .btn-login {
    display: block;
    background-color: #2e307d;
    color: white;
    padding: 15px;
    width: 100%;
    text-align: center;
    border-radius: 6px;
    font-weight: bold;
    text-decoration: none;
    margin-top: 15px;
}
</style>

<div class="login-container">
    <div class="login-box">
        <h2>LOGIN</h2>
        <form method="POST" action="{{ route('login') }}" onsubmit="console.log('Form submitted')">
            @csrf
            <div class="form-group">
                <input type="text" name="username" placeholder="Masukan username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Masukan password" required>
            </div>
            <button type="submit" class="btn-login">MASUK</button>
            <div>
                <a href="#">Lupa kata sandi?</a>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')
