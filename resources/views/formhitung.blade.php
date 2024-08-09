


<html>
    <body>
        <form method=POST action={{ url('formhitung'); }}>
            @csrf
            <input type="text" name="panjang" placeholder="Isi Panjang">
            <input type="text" name="lebar" placeholder="Isi Lebar"><br>
            <input type="submit" value="proses">
        </form>
    </body>
</html>
