</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Çıkış yapmak istediğinize emin misiniz?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
                    <a class="btn btn-primary" href="{{route('admin.logout')}}">Çıkış Yap</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Back/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('Back/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Back/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Back/')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('Back/')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('Back/')}}/js/demo/chart-area-demo.js"></script>
    <script src="{{asset('Back/')}}/js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="{{asset('Back/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('Back/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>





    

<script>

    <script src="{{asset('Back/')}}/js/demo/datatables-demo.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
        modules: { toolbar: true },
        theme: 'snow'
        });

    </script>

    

    @yield('js')
    @toastr_js
    @toastr_render
</body>

</html>