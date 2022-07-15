<!-- Begin Page Content -->
<div class="container-fluid">
    <style>
        .accordion-section .panel-default>.panel-heading {
            border: 0;
            background: #f4f4f4;
            padding: 0;
        }

        .accordion-section .panel-default .panel-title a {
            display: block;
            font-style: italic;
            font-size: 18px;
        }

        .accordion-section .panel-default .panel-title a:after {
            font-family: 'FontAwesome';
            font-style: normal;
            font-size: 14px;
            content: "\25B2";
            color: #1f7de2;
            float: right;
            margin-top: 4px;
        }

        .accordion-section .panel-default .panel-title a.collapsed:after {
            content: "\25BC";
        }

        .accordion-section .panel-default .panel-body {
            font-size: 16px;
        }
    </style>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                    Apa itu halaman Dashboard?
                                </a>
                            </h3>
                        </div>
                        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                            <div class="panel-body px-3 mb-4">
                                <p>Halaman <i>Dashboard</i> merupakan tampilan awal dari situs web <i>FindMe</i> yang menjadi penanda atau ucapan selamat datang kepada pengguna yang sedang <i>login</i>.
                                    <br>Halaman ini mendeskripsikan tentang fungsi atau kegunaan aplikasi web.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Apa itu halaman Role?
                                </a>
                            </h3>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body px-3 mb-4">
                                <p>Halaman <i>Role</i> merupakan halaman dimana admin situs web <i>FindMe</i> dapat mengubah akses pengguna <i>(User Access)</i> terhadap halaman web. Misalnya, <i>Administrator</i> dapat mengakses <i>siderbar</i> Admin, User dan Menu. Sedangkan, untuk <i>Client</i> hanya bisa mengakses <i>sidebar</i> User saja.
                                    <br>Halaman ini hanya bisa diakses apabila <i>login</i> menggunakan akses sebagai admin.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    Apa itu halaman Import Data Customer?
                                </a>
                            </h3>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body px-3 mb-4">
                                <p>Halaman <i>Import Data Customer</i> merupakan halaman yang menampilkan form untuk mengimpor data <i>Excel</i> atau hasil <i>output</i> dari <i>Google Spreadsheet</i>. Data yang diimpor oleh admin/staff <i>Human Development</i> inilah yang nantinya dapat diakses atau dicari oleh pihak <i>sales/management</i>. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    Apa itu halaman My Profile?
                                </a>
                            </h3>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body px-3 mb-4">
                                <p>Halaman <i>My Profile</i> merupakan halaman yang menampilkan informasi tentang pengguna yang sedang <i>login</i> pada halaman web. Isi dari halaman ini yakni foto profil, nama pengguna, email, dan tanggal bergabung sebagai keanggotaan/<i>member</i>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    Apa itu halaman Edit Profile?
                                </a>
                            </h3>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="panel-body px-3 mb-4">
                                <p>Halaman <i>Edit Profile</i> merupakan halaman yang menampilkan beberapa form yang digunakan untuk menyunting/<i>mengedit</i> data pengguna. Data yang dapat disunting yaitu Nama Penuh <i>(Full Name)</i> dan mengubah foto profil.
                                    <br> Persyaratan untuk mengunggah foto profil:
                                </p>
                                <ul>
                                    <li>Tipe : gif, jpg, jpeg & png</li>
                                    <li>Ukuran maks. : 2048 kb</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading5">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    Apa itu halaman Cari Data Customer?
                                </a>
                            </h3>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body px-3 mb-4">
                                <p>Halaman ini merupakan inti dari penggunaan aplikasi web <i>FindMe</i> ini. Dimana pihak </i>sales/management</i> yang berperan sebagai <i>client/user</i> dapat mencari data pelanggan/<i>customer</i> yang diinginkan. <i>Sales/management</i> ingin mengetahui status terbaru dari pelanggannya. Apakah PS (Pasang) atau Belum PS.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading6">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                Apa itu halaman Menu Management?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                        <div class="panel-body px-3 mb-4">
                            <p>Halaman <i>Menu Management</i> merupakan halaman yang menampilkan menu-menu yang ada atau yang telah tersedia pada <i>sidebar</i> situs web. Sebagai halaman yang hanya bisa diakses dan dikelola oleh admin inilah, admin dapat menambahkan <i>menu management</i> baru dengan pengkategorian yang diinginkan.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading7">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                Apa itu halaman Submenu Management?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                        <div class="panel-body px-3 mb-4">
                            <p>Halaman <i>Submenu Management</i> merupakan halaman yang menampilkan beberapa submenu yang ada atau yang telah tersedia pada <i>sidebar</i> situs web. Seperti halnya dengan <i>Menu Management</i>, dimana halaman yang hanya bisa diakses dan dikelola oleh admin juga, admin dapat menambahkan <i>submenu management</i> baru dengan pengkategorian sesuai dengan <i>menu management</i> yang telah dibuat.</p>
                        </div>
                    </div>
                </div>
        </div>

        </section>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- </div>
End of Main Content -->