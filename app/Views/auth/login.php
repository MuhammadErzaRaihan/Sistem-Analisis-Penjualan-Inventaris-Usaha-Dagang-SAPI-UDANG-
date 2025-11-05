<form action="<?= base_url('login/auth') ?>" method="post">
    
    <h2>Form Login</h2>

    <div>
        <label for="username">Username</label>
        <input type_name="text" 
               id="username" 
               name="username" 
               placeholder="Masukkan username Anda" 
               required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" 
               id="password" 
               name="password" 
               placeholder="Masukkan password Anda" 
               required>
    </div>

    <div>
        <button type="submit">Login</button>
    </div>

</form>