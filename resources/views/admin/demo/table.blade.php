@extends('admin.layout.master-layout')

@section('title')
    <title>Table</title>
@endsection

@section('breadcrumb')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Table</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Misc</td>
                                        <td>Dillo 0.8</td>
                                        <td>Embedded devices</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>Links</td>
                                        <td>Text only</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>Lynx</td>
                                        <td>Text only</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>IE Mobile</td>
                                        <td>Windows Mobile 6</td>
                                        <td>-</td>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>PSP browser</td>
                                        <td>PSP</td>
                                        <td>-</td>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>U</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                        <ul class="pagination">
                                            <li class="page-item previous disabled">
                                                <a href="#" data-dt-idx="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item ">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item ">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item ">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item ">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item ">
                                                <a href="#" class="page-link">6</a>
                                            </li>
                                            <li class="page-item next" id="example2_next">
                                                <a href="#" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

{{--@section('script')--}}
{{--    <!-- DataTables  & Plugins -->--}}
{{--    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>--}}
{{--    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>--}}
{{--    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>--}}
{{--    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>--}}
{{--    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>--}}
{{--    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>--}}
{{--    <script src="/plugins/jszip/jszip.min.js"></script>--}}
{{--    <script src="/plugins/pdfmake/pdfmake.min.js"></script>--}}
{{--    <script src="/plugins/pdfmake/vfs_fonts.js"></script>--}}
{{--    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>--}}
{{--    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>--}}
{{--    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>--}}
{{--    <!-- Page specific script -->--}}
{{--    <script>--}}
{{--        $(function () {--}}
{{--            $("#example1").DataTable({--}}
{{--                "responsive": true, "lengthChange": false, "autoWidth": false,--}}
{{--                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]--}}
{{--            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');--}}
{{--            $('#example2').DataTable({--}}
{{--                "paging": true,--}}
{{--                "lengthChange": false,--}}
{{--                "searching": false,--}}
{{--                "ordering": true,--}}
{{--                "info": true,--}}
{{--                "autoWidth": false,--}}
{{--                "responsive": true,--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
