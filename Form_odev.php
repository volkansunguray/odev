<!doctype html>
<html lang="TR-tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>11.05.2022 Ödev</title>
</head>
<style>
    body {
  background-color: #fefbd8;
}
</style>
<body>

    <div class="container d-flex justify-content-center" style="padding-top: 140px">

        <form class="col-6">
            <div class="mb-2">
                <label for="InputName" class="form-label">Adı Soyadı</label>
                <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp">

            </div>
            <div class="mb-2">
                <label for="InputEmail" class="form-label">E-mail </label>
                <input type="email" class="form-control" id="InputEmail">
            </div>
            <div class="mb-2">
                <label for="InputTelefon" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="InputTelefon">
            </div>
            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg">
                <option selected>Cinsiyetiniz</option>
                <option value="E">Erkek</option>
                <option value="K">Kadın</option>

            </select>

            <select class="form-select form-select-lg mb-2" aria-label=".form-select-lg">
                <option selected>Ders Seçiniz</option>
                <option value="1">Yazılım Mimarileri</option>
                <option value="2">Web Programlama</option>
                <option value="2">Sunucu İşletim Sistemleri</option>

            </select>

            <div class="mb-4">
                <label for="FormMesajiniz" class="form-label">Mesajınız</label>
                <textarea class="form-control" id="FormMesajiniz" rows="3"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Gönder</button>
            </div>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>