<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>SPRINT SMK</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
        <meta name="author" content="JSOFT.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleaapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/font-awesome/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/magnific-popup/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/vendor/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />

        <link rel="stylesheet" href="{{ asset('octopus/vendor/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/select2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/dropzone/css/basic.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/dropzone/css/dropzone.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/summernote/summernote.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/summernote/summernote-bs3.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/codemirror/lib/codemirror.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/codemirror/theme/monokai.css') }}" />
        <link rel="stylesheet" href="{{ asset('octopus/vendor/pnotify/pnotify.custom.css') }}" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/stylesheets/theme.css') }}" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/stylesheets/skins/default.css') }}" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('octopus/stylesheets/theme-custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('octopus/vendor/modernizr/modernizr.js') }}"></script>

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><span>SPRINT</span>SMK</a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <!-- start: search & user box -->
                <div class="header-right">

                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            
                        </div>
                    </form>

                    <span class="separator"></span>

                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <!-- <figure class="profile-picture">
                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                            </figure> -->
                            @if (Auth::user()->andre_id_level == 1)
                            <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                                <span class="name">{{ Auth::user()->name }}</span>
                                <span class="role">Administrator</span>
                            </div>
                            @elseif (Auth::user()->andre_id_level == 2)
                            <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                                <span class="name">{{ Auth::user()->name }}</span>
                                <span class="role">Operator</span>
                            </div>
                            @else
                            <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                                <span class="name">{{ Auth::user()->name }}</span>
                                <span class="role">Pegawai</span>
                            </div>
                            @endif

                            <i class="fa custom-caret"></i>
                        </a>

                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i><span>{{('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">

                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Navigation
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>

                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li class="nav-active">
                                        <a href="{{ route('home') }}">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    @if ( Auth::user()->andre_id_level == 1)
                                    <li>
                                        <a href="{{ route('andre_akun.index') }}">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>Kelola Akun</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                            <span>Data Master</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="{{ route('andre_jenis.index') }}">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    <span>Jenis</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('andre_ruang.index') }}">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    <span>Ruang</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('andre_level.index') }}">
                                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    <span>Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('andre_inventaris.index') }}">
                                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            <span>Inventaris</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('andre_pinjam.index') }}">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                            <span>Peminjaman</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('andre_persetujuan.index') }}">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>Persetujuan</span>
                                        </a>
                                    </li>
                                    @elseif ( Auth::user()->andre_id_level == 2 )
                                    <li>
                                        <a href="{{ route('andre_pinjam.index') }}">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                            <span>Peminjaman</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('andre_persetujuan.index') }}">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>Persetujuan</span>
                                        </a>
                                    </li>
                                    @elseif ( Auth::user()->andre_id_level == 3 )
                                    <li>
                                        <a href="{{ route('andre_pinjam.index') }}">
                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                            <span>Peminjaman</span>
                                        </a>
                                    </li>
                                    @endif
                                    <!-- <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-bug" aria-hidden="true"></i>
                                            <span>Bug Management</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="{{ route('andre_petugas.index') }}">
                                                    <i class="fa fa-bug" aria-hidden="true"></i>
                                                    <span>Staff</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('andre_pegawai.index') }}">
                                                    <i class="fa fa-bug" aria-hidden="true"></i>
                                                    <span>Employee</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-bug" aria-hidden="true"></i>
                                                    <span>Barang Keluar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> -->

                                </ul>
                            </nav>

                            <hr class="separator" />

                </aside>
                <!-- end: sidebar -->

                <section role="main" class="content-body">
                    @yield('content')
                </section>





        <!-- Vendor -->
        <script src="{{ asset('octopus/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('octopus/vendor/nanoscroller/nanoscroller.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/magnific-popup/magnific-popup.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

        <!-- Specific Page Vendor -->
        <script src="{{ asset('octopus/vendor/select2/select2.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>

        <script src="{{ asset('octopus/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
        <script src="{{ asset('octopus/vendor/select2/select2.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
        <script src="{{ asset('octopus/vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
        <script src="{{ asset('octopus/vendor/fuelux/js/spinner.js') }}"></script>
        <script src="{{ asset('octopus/vendor/dropzone/dropzone.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-markdown/js/markdown.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/lib/codemirror.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/addon/selection/active-line.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/xml/xml.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
        <script src="{{ asset('octopus/vendor/codemirror/mode/css/css.js') }}"></script>
        <script src="{{ asset('octopus/vendor/summernote/summernote.js') }}"></script>
        <script src="{{ asset('octopus/vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
        <script src="{{ asset('octopus/vendor/ios7-switch/ios7-switch.js') }}"></script>
        <script src="{{ asset('octopus/vendor/pnotify/pnotify.custom.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('octopus/javascripts/theme.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('octopus/javascripts/theme.custom.js') }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ asset('octopus/javascripts/theme.init.js') }}"></script>


        <!-- Examples -->
        <script src="{{ asset('octopus/javascripts/tables/examples.datatables.default.js') }}"></script>
        <script src="{{ asset('octopus/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
        <script src="{{ asset('octopus/javascripts/tables/examples.datatables.tabletools.js') }}"></script>

        <script type="text/javascript">
            function permanent() {
                var perm = $("#status").val();

                if (perm == 'Permanen') {
                    var tanggal = $(".tanggal").attr('disabled', 'disabled');
                    var status = $(".status").val(perm);
                } else {
                    var pinjam = "Pinjam";
                    var status = $(".status").val(pinjam);
                    var tanggal = $(".tanggal").removeAttr("disabled");
                }
            }
        </script>
        
        <script type="text/javascript">
            $("#barang").chained("#jenis");
        </script>

        <script type="text/javascript">
            $('#datatable-default').dataTable({
                "aLengthMenu": [[10, 25, 50, 100, 250, 500, -1], [10, 25, 50, 100, 250, 500, 'All']],
                "oLanguage": { 
                    "sInfo": 'Total _TOTAL_ data ditampilkan (_START_ sampai _END_)',
                    "sLengthMenu": 'Tampilkan _MENU_ data',   
                    "sInfoEmpty": 'Tidak ada data.',
                    "sSearch": 'Pencarian:',
                    "sEmptyTable": 'Tidak ada data di dalam Database',
                    "oPaginate": {
                        "sNext": 'Selanjutnya',
                        "sLast": 'Terakhir',
                        "sFirst": 'Pertama',
                        "sPrevious": 'Sebelumnya'
                    }
                }
           });
        </script>

        <!-- <script>
              $(function () {
                $(".table").DataTable({         
                  "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                    "sEmptyTable": "Tidak ada data di database"
                }
                });
              
              });
        </script> -->
        
        <script>
            $(document).ready(function() {
                $(".add-more").click(function(){ 
                    var html = $(".copy").html();
                    $(".after-add-more").after(html);
                });

                $("body").on("click",".remove",function(){ 
                    $(this).parents(".control-group").remove();
                });
            });
        </script>

        <script>
            function alert() {
                return confirm('Apakah anda yakin?');
            }
        </script>
    </body>
</html>
