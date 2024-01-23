<script type="text/javascript">
    var btnbars = document.getElementById('btnbars')
    var sidebar = document.querySelector(".sidebar")

    btnbars.addEventListener('click', function(e) {
        e.preventDefault();

        sidebar.classList.toggle('sidebar-show');

    })
</script>

</body>