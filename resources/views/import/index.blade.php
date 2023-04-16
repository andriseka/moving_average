@extends('layouts.general')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/custome.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
@endsection

@section('content')
<div class="col-md-12 mb-3">
    <h1>IMPORT DATA SAHAM </h1>
</div>
<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3>INTRODUCTION</h3>
            <ol>
                <li>
                    Silahkan download file data saham dari <a href="https://finance.yahoo.com" target="_blank">finance.yahoo.com</a>
                </li>
                <li>
                    File yang sudah di download silahkan di import disini
                </li>
                <li>
                    Jangan ada perubahan apapun dari file yang sudah di download
                </li>
                <li>
                    Jika ada perubahan yang tidak sesuai dengan file aslinya maka sistem akan menolak
                </li>
                <li>
                    Silahkan perhatikan dengan benar dalam mengimport file data saham
                </li>
                <li>
                    Jika butuh bantuan silahkan baca kembali panduan dalam menjalankan sistem ini
                </li>
            </ol>

            <span class="fs-4 fw-bold">NOTE :</span>
            <span>Harap perhatikan tata cara dalam melakukan import karna jika mengimport data sembarangan akan di tolak secara otomatis</span>
        </div>
    </div>
</div>

<div class="col-md-6 mb-3">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="wrapper">
                <form action="#">
                    <div id="form">
                        <input type="file" name="import" id="file_import" hidden>
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Browse File to Upload</p>
                    </div>
                    <section class="progress-area" id="progress_area">

                    </section>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<script>
    var form = document.getElementById("form");
    var fileImport = document.getElementById("file_import");

    form.addEventListener("click", function() {

        fileImport.click();

    });

    fileImport.addEventListener("change", function() {

        var file = this.files[0];

        var formData = new FormData();
        formData.append("file", file);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'post',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            entype: 'multipart/form-data',
            url: "{{route('import.store')}}",
            success: function(resp)
            {

                var status = resp.status;
                console.log(resp);

                if (status === 400) {
                    var html = "";
                    var message = resp.message['file'];

                    if (message.length > 0) {

                        for (var i = 0; i < message.length; i++) {

                            html += "<div class='card'>\
                                    <div class='card-body'>\
                                        <div class='d-flex justify-content-between align-items-center'>\
                                            <div class='d-flex align-items-center'>\
                                                <i class='fa fa-file-alt fs-1 me-3' ></i>\
                                                <span class='text-danger'>"+message[i]+"</span>\
                                            </div>\
                                            <div>\
                                                <i class='fa fa-times fs-3 text-danger' onclick='closeButton()'></i>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>";

                        }
                    }
                    $("#progress_area").html(html);

                }

                if (status === 200) {


                    var message = resp.message;
                    var html = "";
                    html += "<div class='card'>\
                                    <div class='card-body'>\
                                        <div class='d-flex justify-content-between align-items-center'>\
                                            <div class='d-flex align-items-center'>\
                                                <i class='fa fa-file-alt fs-1 me-3' ></i>\
                                                <span class='text-green'>"+message+"</span>\
                                            </div>\
                                            <div>\
                                                <i class='fa fa-times fs-3 text-danger' onclick='closeButton()'></i>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>";
                    $("#progress_area").html(html);
                }
            }

        });

    });


    function closeButton() {
        window.location.reload();
    }
</script>
@endsection
