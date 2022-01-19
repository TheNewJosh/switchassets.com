 
    <script>
        document.getElementById("btc_address_p").onclick = () => {
            var range = document.createRange();
            range.selectNode(document.getElementById("btc_address"));
            window.getSelection().removeAllRanges(); // clear current selection
            window.getSelection().addRange(range); // to select text
            document.execCommand("copy");
            window.getSelection().removeAllRanges(); // to deselect
            $.toaster("Copied to clipboard");
        };
    </script>
 <!-- .page-content -->
 </div>
            <footer class="footer text-center text-sm-left">&copy; 2021 Switch Assets Group</footer>
            <!--end footer-->
        </div><!-- end page content -->
    </div><!-- end page-wrapper -->

    <div class="modal fade" id="btc-fund-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalCenterTitle">Bitcoin Deposit
                </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="la la-times"></i></span></button>
            </div>
            <form method="POST" action="/deposit">
                <input type="hidden" name="_token" value="1fS7fqHUxwN9XNpqU5NlnHTW9mYXCZybtuiSElvd">                <!--end modal-header-->
                <div class="modal-body">
            <input type="hidden" name="method" value="BTC"/>
                    <div class="form-group">
                        <label class="mb-3">Amount<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</i></span></div><input type="number" min="50"
                                id="example-input3-group1" name="amount" class="form-control" placeholder="Amount" required>
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Proceed </button></div>
                <!--end modal-footer-->
            </form>
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->


    <div class="modal fade" id="eth-fund-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalCenterTitle">Ethereum Deposit
                </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="la la-times"></i></span></button>
            </div>
            <form method="POST" action="/deposit">
                <input type="hidden" name="_token" value="1fS7fqHUxwN9XNpqU5NlnHTW9mYXCZybtuiSElvd">                <!--end modal-header-->
                <div class="modal-body">
            <input type="hidden" name="method" value="ETH"/>
                    <div class="form-group">
                        <label class="mb-3">Amount<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</i></span></div><input type="number" min="50"
                                id="example-input3-group1" name="amount" class="form-control" placeholder="Amount" required>
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Proceed </button></div>
                <!--end modal-footer-->
            </form>
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->


    <div class="modal fade" id="bch-fund-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalCenterTitle">Bitcoin Cash Deposit
                </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="la la-times"></i></span></button>
            </div>
            <form method="POST" action="/deposit">
                <input type="hidden" name="_token" value="1fS7fqHUxwN9XNpqU5NlnHTW9mYXCZybtuiSElvd">                <!--end modal-header-->
                <div class="modal-body">
                    <input type="hidden" name="method" value="BCH" />
                    <div class="form-group">
                        <label class="mb-3">Amount<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</i></span></div><input type="number" min="50"
                                id="example-input3-group1" name="amount" class="form-control" placeholder="Amount" required>
                            <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Proceed </button></div>
                <!--end modal-footer-->
            </form>
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->


    <div class="modal fade" id="usdt-fund-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalCenterTitle">USDT Deposit
                </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"><i class="la la-times"></i></span></button>
            </div>
            <form method="POST" action="/deposit">
                <input type="hidden" name="_token" value="1fS7fqHUxwN9XNpqU5NlnHTW9mYXCZybtuiSElvd">                <!--end modal-header-->
                <div class="modal-body">
                    <input type="hidden" name="method" value="USDT" />
                    <div class="form-group">
                        <label class="mb-3">Amount<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</i></span></div><input
                                type="number" min="50" id="example-input3-group1" name="amount" class="form-control"
                                placeholder="Amount" required>
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Proceed </button>
                </div>
                <!--end modal-footer-->
            </form>
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->
    <div class="modal fade" id="reinvest-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalCenterTitle">Reinvest ROi
                </h6><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="la la-times"></i></span></button>
            </div>
            <form method="POST" action="/reinvest">
                <input type="hidden" name="_token" value="1fS7fqHUxwN9XNpqU5NlnHTW9mYXCZybtuiSElvd">                <!--end modal-header-->
                <div class="modal-body">
                    <div class="form-group">
                        <label class="mb-3">Amount<span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</i></span></div><input type="number" value="0.0000" min="20" max="0.0000"
                                id="example-input3-group1" name="amount" class="form-control" placeholder="Amount" readonly required>
                            <div class="input-group-append">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Proceed </button></div>
                <!--end modal-footer-->
            </form>
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->
<!-- jQuery  -->
<script src="{{ asset('dash/js/jquery.min.js')}}"></script>
    <script src="{{ asset('dash/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('dash/js/toaster.js')}}"></script>
    <script src="{{ asset('dash/js/custom.js')}}"></script>
    <script src="{{ asset('dash/js/metismenu.min.js')}}"></script>
    <script src="{{ asset('dash/js/waves.js')}}"></script>
    <script src="{{ asset('dash/js/feather.min.js')}}"></script>
    <script src="{{ asset('dash/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('dash/js/moment.js')}}"></script>
    
    <script src="{{ asset('dash/js/daterangepicker.js')}}"></script>
    <script src="{{ asset('dash/js/clipboard.min.js')}}"></script>
    <script src="{{ asset('dash/js/select2.min.js')}}"></script>
    <script src="{{ asset('dash/js/dropify.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.steps.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.form-wizard.init.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.analytics_dashboard.init.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.form-upload.init.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.forms-advanced.js')}}"></script>
    <script src="{{ asset('dash/js/app.js')}}"></script>
    <script src="{{ asset('dash/js/demo-nomodule.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.dataTables.min.js')}}"></script>
    
    <script src="{{ asset('dash/js/jquery.sweet-alert.init.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#depositHistory').DataTable();
            $('#investmentHistory').DataTable();
            $('#withdrawalHistory').DataTable();

        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6151b290d326717cb68385c0/1fgji31va';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
        new ClipboardJS('.btn-clipboard');
    </script>
    <script>
        feather.replace()
    </script>