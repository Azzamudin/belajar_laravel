<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>
<body>
    <header>
        <h2>Blog Malas Ngoging</h2>
        <nav>
            <a href="/blog">HOME</a>

            <a href="/blog/tentang">TENTANG</a>

            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>

    <!--bagian judul blog -->
    <h3> @yeild('judul_halaman') </h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="https://malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
    </footer>
</body>
</html>