<section class="booking-hero py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="section-title">Booking Treatment</h1>
                <p class="section-subtitle">Pilih waktu yang tepat untuk perawatan Anda</p>
            </div>
        </div>
    </div>
</section>

<section class="booking-section py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="booking-form-wrapper">
                    <div class="form-header mb-4">
                        <h3>Informasi Booking</h3>
                        <p>Silakan isi form berikut untuk melakukan booking treatment</p>
                    </div>

                    <form id="bookingForm" class="booking-form">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" required placeholder="Masukkan nama lengkap">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nomor WhatsApp</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                                        <input type="tel" class="form-control" required placeholder="Contoh: 081234567890">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Pilih Treatment</label>
                                    <div class="treatment-options">
                                        <div class="treatment-option">
                                            <input type="radio" name="treatment" id="basic" value="basic" required>
                                            <label for="basic">
                                                <span class="treatment-name">Basic Facial</span>
                                                <span class="treatment-details">
                                                    <i class="fas fa-clock"></i> 60 menit
                                                    <i class="fas fa-tag ms-3"></i> Rp 150.000
                                                </span>
                                            </label>
                                        </div>
                                        <div class="treatment-option">
                                            <input type="radio" name="treatment" id="acne" value="acne">
                                            <label for="acne">
                                                <span class="treatment-name">Acne Treatment</span>
                                                <span class="treatment-details">
                                                    <i class="fas fa-clock"></i> 90 menit
                                                    <i class="fas fa-tag ms-3"></i> Rp 200.000
                                                </span>
                                            </label>
                                        </div>
                                        <div class="treatment-option">
                                            <input type="radio" name="treatment" id="brightening" value="brightening">
                                            <label for="brightening">
                                                <span class="treatment-name">Brightening Treatment</span>
                                                <span class="treatment-details">
                                                    <i class="fas fa-clock"></i> 75 menit
                                                    <i class="fas fa-tag ms-3"></i> Rp 250.000
                                                </span>
                                            </label>
                                        </div>
                                        <div class="treatment-option">
                                            <input type="radio" name="treatment" id="antiaging" value="antiaging">
                                            <label for="antiaging">
                                                <span class="treatment-name">Anti Aging Treatment</span>
                                                <span class="treatment-details">
                                                    <i class="fas fa-clock"></i> 90 menit
                                                    <i class="fas fa-tag ms-3"></i> Rp 300.000
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Pilih Tanggal</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        <input type="date" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Pilih Waktu</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <select class="form-select" required>
                                            <option value="">Pilih waktu</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:30">17:30</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Catatan Tambahan (Opsional)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                        <textarea class="form-control" rows="3" placeholder="Contoh: kondisi kulit, alergi, atau permintaan khusus"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="booking-notes">
                                    <h4><i class="fas fa-info-circle me-2"></i>Informasi Booking:</h4>
                                    <ul>
                                        <li>Booking dapat dilakukan H-7 sampai H-1</li>
                                        <li>Konfirmasi booking akan dikirim via WhatsApp</li>
                                        <li>Harap datang 10 menit sebelum jadwal treatment</li>
                                        <li>Pembayaran dapat dilakukan di tempat</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-booking">
                                    <i class="fas fa-calendar-check me-2"></i>Konfirmasi Booking
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 