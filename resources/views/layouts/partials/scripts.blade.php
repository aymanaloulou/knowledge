<script src="{{ asset('assets/js/core/popper.min.js')}}"> </script>
<script src="{{ asset('assets/assets/js/core/bootstrap.min.js')}}"> </script>
<script src="{{ asset('assets/assets/js/plugins/perfect-scrollbar.min.js')}}"> </script>
<script src="{{ asset('assets/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
