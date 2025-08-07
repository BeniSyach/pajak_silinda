@extends('layouts.app')

@section('title', 'Alur Pembayaran PBB')

<style>
    .sop-alur {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: auto auto;
        gap: 10px;
        max-width: 1000px;
        margin: auto;
        align-items: center;
    }

    .sop-title {
        text-align: center;
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 30px;
        margin-top: 30px;
        color: #1a202c;
    }


    .sop-step {
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .sop-step img {
        width: 100%;
        max-height: 280px;
        object-fit: cover;
        border-radius: 6px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .sop-step img:hover {
        transform: scale(1.03);
    }

    .sop-arrow {
        font-size: 32px;
    }

    .sop-s1 {
        grid-column: 1;
        grid-row: 1;
    }

    .sop-a1 {
        grid-column: 2;
        grid-row: 1;
    }

    .sop-s2 {
        grid-column: 3;
        grid-row: 1;
    }

    .sop-a2 {
        grid-column: 4;
        grid-row: 1;
    }

    .sop-s3 {
        grid-column: 5;
        grid-row: 1;
    }

    .sop-ad {
        grid-column: 5;
        grid-row: 2;
        font-size: 40px;
    }

    .sop-s4 {
        grid-column: 4;
        grid-row: 2;
    }

    .sop-a3 {
        grid-column: 3;
        grid-row: 2;
    }

    .sop-s5 {
        grid-column: 2;
        grid-row: 2;
    }

    .sop-step h3 {
        margin: 10px 0 0;
        font-size: 16px;
        color: #2c3e50;
    }

    /* Modal */
    .sop-modal {
        display: none;
        position: fixed;
        z-index: 999;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .sop-modal-content {
        margin: auto;
        display: block;
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
    }

    .sop-close {
        position: absolute;
        top: 20px;
        right: 35px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .sop-alur {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sop-arrow {
            transform: rotate(90deg);
        }

        .sop-ad {
            transform: rotate(0deg);
        }

        .sop-step img {
            max-height: 140px;
        }
    }
</style>

@section('content')
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <div class="content">
                <h1 class="sop-title">Alur Pembayaran PBB via SUMUT Mobile</h1>
                <div class="sop-alur">
                    <div class="sop-step sop-s1">
                        <img src="{{ asset('assets/img/bayar-pbb-ke-1.jpeg') }}" alt="Langkah 1"
                            onclick="sopOpenModal(this.src)" />
                        <h3>1. Buka aplikasi SUMUT Mobile</h3>
                    </div>
                    <div class="sop-arrow sop-a1">➡️</div>

                    <div class="sop-step sop-s2">
                        <img src="{{ asset('assets/img/bayar-pbb-ke-2.jpeg') }}" alt="Langkah 2"
                            onclick="sopOpenModal(this.src)" />
                        <h3>2. Pilih Pajak & Retribusi</h3>
                    </div>
                    <div class="sop-arrow sop-a2">➡️</div>

                    <div class="sop-step sop-s3">
                        <img src="{{ asset('assets/img/bayar-pbb-ke-3.jpeg') }}" alt="Langkah 3"
                            onclick="sopOpenModal(this.src)" />
                        <h3>3. Pilih PBB</h3>
                    </div>

                    <div class="sop-arrow sop-ad">⬅️</div>

                    <div class="sop-step sop-s4">
                        <img src="{{ asset('assets/img/bayar-pbb-ke-4.jpeg') }}" alt="Langkah 4"
                            onclick="sopOpenModal(this.src)" />
                        <h3>4. Pilih PEMKAB Serdang Bedagai</h3>
                    </div>
                    <div class="sop-arrow sop-a3">⬅️</div>

                    <div class="sop-step sop-s5">
                        <img src="{{ asset('assets/img/bayar-pbb-ke-5.jpeg') }}" alt="Langkah 5"
                            onclick="sopOpenModal(this.src)" />
                        <h3>5. Masukkan Data Pembayaran</h3>
                    </div>
                </div>

                <!-- Modal -->
                <div id="sopImgModal" class="sop-modal" onclick="sopCloseModal()">
                    <span class="sop-close" onclick="sopCloseModal()">&times;</span>
                    <img class="sop-modal-content" id="sopModalImg" />
                </div>
            </div>
        </div>
    </div>

    <script>
        function sopOpenModal(src) {
            const modal = document.getElementById("sopImgModal");
            const modalImg = document.getElementById("sopModalImg");
            modal.style.display = "block";
            modalImg.src = src;
        }

        function sopCloseModal() {
            document.getElementById("sopImgModal").style.display = "none";
        }
    </script>
@endsection
