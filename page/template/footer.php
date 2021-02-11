</div>
</div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const notifc = document.querySelector('.notif')
        menuBtn.addEventListener('click', () => {
            notifc.classList.toggle('hidden');
        })
    })

    function closeNotif() {
        const closeNotif = document.querySelector('.disapear');
        closeNotif.classList.toggle('hidden')
    }
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>
