<script>
    function updateDateTime() {
        const now = new Date();

        // Deteksi zona waktu pengguna secara otomatis
        const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

        // Format tanggal & waktu sesuai lokasi pengguna
        const options = {
            weekday: 'long',
            day: '2-digit',
            month: 'long',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            hour12: false, // Format 24 jam
            timeZone: userTimeZone // Menyesuaikan zona waktu pengguna
        };

        const formattedDate = new Intl.DateTimeFormat('id-ID', options).format(now);

        // Tampilkan di halaman
        document.getElementById("date-time").textContent = `${formattedDate} (${userTimeZone})`;
    }

    // Update waktu setiap menit (lebih efisien daripada per detik)
    setInterval(updateDateTime, 60000);
    updateDateTime(); // Jalankan langsung saat halaman dimuat
</script>
<script>
    cash(function() {
        const ele = document.getElementById('table-realisasi');
        ele.style.cursor = 'grab';

        let pos = {
            top: 0,
            left: 0,
            x: 0,
            y: 0
        };

        const mouseDownHandler = function(e) {
            ele.style.cursor = 'grabbing';
            ele.style.userSelect = 'none';

            pos = {
                left: ele.scrollLeft,
                top: ele.scrollTop,
                x: e.clientX,
                y: e.clientY,
            };

            document.addEventListener('mousemove', mouseMoveHandler);
            document.addEventListener('mouseup', mouseUpHandler);
        };

        const mouseMoveHandler = function(e) {
            const dx = e.clientX - pos.x;
            const dy = e.clientY - pos.y;

            ele.scrollTop = pos.top - dy;
            ele.scrollLeft = pos.left - dx;
        };

        const mouseUpHandler = function() {
            ele.style.cursor = 'grab';
            ele.style.removeProperty('user-select');

            document.removeEventListener('mousemove', mouseMoveHandler);
            document.removeEventListener('mouseup', mouseUpHandler);
        };

        ele.addEventListener('mousedown', mouseDownHandler);
    });
</script>
<script>
    cash(function() {
        document.querySelector('[data-toggle-fullscreen="chart-per-pajak"]').addEventListener("click", (
            event) => {
                let el = event.srcElement.closest('.fullscreen-wrapper');

                if (document.fullscreenElement) {
                    document.exitFullscreen();
                    el.querySelector('.maximize-icon').style.display = 'inline';
                    el.querySelector('.minimize-icon').style.display = 'none';
                    ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                        chart: {
                            height: 200
                        }
                    }, true);
                } else {
                    el.requestFullscreen();
                    el.querySelector('.maximize-icon').style.display = 'none';
                    el.querySelector('.minimize-icon').style.display = 'inline';
                    ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                        chart: {
                            height: screen.height - 100
                        }
                    }, true)
                }
            });

        document.addEventListener("fullscreenchange", (event) => {
            if (!document.fullscreenElement) {
                ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                    chart: {
                        height: 200
                    }
                }, true);
            }
        });
    });
</script>
<script>
    cash(function() {
        document.querySelector('[data-toggle-fullscreen="chart-per-bulan"]').addEventListener("click", (
            event) => {
                let el = event.srcElement.closest('.fullscreen-wrapper');

                if (document.fullscreenElement) {
                    document.exitFullscreen();
                    el.querySelector('.maximize-icon').style.display = 'inline';
                    el.querySelector('.minimize-icon').style.display = 'none';
                    ApexCharts.exec('chart-per-pajak', 'updateOptions', {
                        chart: {
                            height: 200
                        }
                    }, true);
                } else {
                    el.requestFullscreen();
                    el.querySelector('.maximize-icon').style.display = 'none';
                    el.querySelector('.minimize-icon').style.display = 'inline';
                    ApexCharts.exec('chart-per-bulan', 'updateOptions', {
                        chart: {
                            height: screen.height - 100
                        }
                    }, true)
                }
            });

        document.addEventListener("fullscreenchange", (event) => {
            if (!document.fullscreenElement) {
                ApexCharts.exec('chart-per-bulan', 'updateOptions', {
                    chart: {
                        height: 200
                    }
                }, true);
            }
        });
    });
</script>
<script>
    cash(function() {
        const ele = document.getElementById('table-penerimaan-per-bulan');
        ele.style.cursor = 'grab';

        let pos = {
            top: 0,
            left: 0,
            x: 0,
            y: 0
        };

        const mouseDownHandler = function(e) {
            ele.style.cursor = 'grabbing';
            ele.style.userSelect = 'none';

            pos = {
                left: ele.scrollLeft,
                top: ele.scrollTop,
                x: e.clientX,
                y: e.clientY,
            };

            document.addEventListener('mousemove', mouseMoveHandler);
            document.addEventListener('mouseup', mouseUpHandler);
        };

        const mouseMoveHandler = function(e) {
            const dx = e.clientX - pos.x;
            const dy = e.clientY - pos.y;

            ele.scrollTop = pos.top - dy;
            ele.scrollLeft = pos.left - dx;
        };

        const mouseUpHandler = function() {
            ele.style.cursor = 'grab';
            ele.style.removeProperty('user-select');

            document.removeEventListener('mousemove', mouseMoveHandler);
            document.removeEventListener('mouseup', mouseUpHandler);
        };

        ele.addEventListener('mousedown', mouseDownHandler);
    });
</script>
