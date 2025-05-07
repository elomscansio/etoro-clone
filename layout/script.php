<script>
    const MOBILE_BREAKPOINT = 768;

    const onChange = () => {
        if (window.screen.width > MOBILE_BREAKPOINT) {
            openSidebar()
        } else {
            closeSidebar()
        }
    };
    window.addEventListener("resize", onChange);

    function openSidebar(e) {
        e?.preventDefault()
        const sidebar = document.getElementById("sidebar")
        if (sidebar)
            sidebar.style.transform = 'initial'
    }

    function closeSidebar(e) {
        e?.preventDefault()
        const sidebar = document.getElementById("sidebar")
        if (sidebar)
            sidebar.style.transform = 'translate(-100%)'
    }
</script>