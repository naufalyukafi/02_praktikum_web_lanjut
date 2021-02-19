<!DOCTYPE html>
<html lang="en">
    <title>Output Message</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Email</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>{{ $data->message }}</td>
                            </tr>
                            <tr>
                                <td>Contact Educa Studio</td>
                                <td><a href="https://www.educastudio.com/contact-us">Klik di sini</a></td>
                            </tr>
                        </table>
                        
                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>