@extends('layouts.main')
@section('content')
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Pendaftaran' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <div class="header-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="display-5 fw-bold mb-3">Pendaftaran LPK Seikou Japan</h1>
                    <p class="lead mb-4">Bergabunglah dengan kami untuk mengembangkan keterampilan dan karir Anda. Daftarkan diri Anda sekarang!</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light text-primary p-2"><i class="fas fa-check-circle me-1"></i> Program Terakreditasi</span>
                        <span class="badge bg-light text-primary p-2"><i class="fas fa-check-circle me-1"></i> Instruktur Berpengalaman</span>
                        <span class="badge bg-light text-primary p-2"><i class="fas fa-check-circle me-1"></i> Sertifikasi Nasional</span>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon-container bg-white text-primary rounded-circle p-4 d-inline-block">
                        <i class="fas fa-user-graduate fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Progress Bar -->
    <div class="progress-container bg-white shadow-sm py-3 sticky-top">
        <div class="container">
            <div class="progress-steps d-flex justify-content-between position-relative">
                <div class="step active" data-step="1">
                    <div class="step-circle">1</div>
                    <div class="step-label d-none d-md-block">Data Pribadi</div>
                </div>
                <div class="step" data-step="2">
                    <div class="step-circle">2</div>
                    <div class="step-label d-none d-md-block">Pendidikan & Kontak</div>
                </div>
                <div class="step" data-step="3">
                    <div class="step-circle">3</div>
                    <div class="step-label d-none d-md-block">Dokumen</div>
                </div>
                <div class="step" data-step="4">
                    <div class="step-circle">4</div>
                    <div class="step-label d-none d-md-block">Konfirmasi</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <!-- Main Form -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 mb-4">
                    <div class="card-body p-4">
                        @if (session('success'))
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                <div>{{ session('success') }}</div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <div>
                                    <ul class="mb-0 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('pendaftaran.submit') }}" method="POST" enctype="multipart/form-data" id="pendaftaranForm">
                            @csrf
                            
                            <!-- Step 1: Data Pribadi -->
                            <div class="form-step active" id="step1">
                                <h4 class="form-step-title mb-4"><i class="fas fa-user me-2"></i>Data Pribadi</h4>
                                
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="nama_lengkap" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" required>
                                            <label for="namaLengkap">Nama Lengkap</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="text" name="tempat_lahir" class="form-control" id="tempatLahir" placeholder="Tempat Lahir" required>
                                            <label for="tempatLahir">Tempat Lahir</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggalLahir" required>
                                            <label for="tanggalLahir">Tanggal Lahir</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select name="jenis_kelamin" class="form-select" id="jenisKelamin" required>
                                                <option value="">-- Pilih --</option>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                            <label for="jenisKelamin">Jenis Kelamin</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="number" name="tinggi_badan" class="form-control" id="tinggiBadan" placeholder="Tinggi Badan" required>
                                            <label for="tinggiBadan">Tinggi Badan (cm)</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="number" name="berat_badan" class="form-control" id="beratBadan" placeholder="Berat Badan" required>
                                            <label for="beratBadan">Berat Badan (kg)</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" style="height: 100px" required></textarea>
                                            <label for="alamat">Alamat Lengkap</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-4">
                                    <div></div> <!-- Empty div for spacing -->
                                    <button type="button" class="btn btn-primary next-step" data-next="2">Selanjutnya <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>

                            <!-- Step 2: Pendidikan & Kontak -->
                            <div class="form-step" id="step2">
                                <h4 class="form-step-title mb-4"><i class="fas fa-school me-2"></i>Data Pendidikan & Kontak</h4>
                                
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="asal_sekolah" class="form-control" id="asalSekolah" placeholder="Asal Sekolah" required>
                                            <label for="asalSekolah">Asal Sekolah</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="no_hp" class="form-control" id="noHp" placeholder="No HP" required>
                                            <label for="noHp">No HP</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                            <label for="email">Alamat Email</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select name="program_pilihan" class="form-select" id="programPilihan" required>
                                                <option value="">-- Pilih Program --</option>
                                                <option value="teknik-informatika">Teknik Informatika</option>
                                                <option value="administrasi-perkantoran">Administrasi Perkantoran</option>
                                                <option value="akuntansi">Akuntansi</option>
                                                <option value="bahasa-inggris">Bahasa Inggris</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                            <label for="programPilihan">Program Pilihan</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-outline-secondary prev-step" data-prev="1"><i class="fas fa-arrow-left me-2"></i> Sebelumnya</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="3">Selanjutnya <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>

                            <!-- Step 3: Dokumen -->
                            <div class="form-step" id="step3">
                                <h4 class="form-step-title mb-4"><i class="fas fa-file-upload me-2"></i>Dokumen Pendukung</h4>
                                
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="file-upload-wrapper">
                                            <label class="form-label fw-semibold">Foto 3x4 <span class="text-danger">*</span></label>
                                            <div class="file-upload-container border rounded p-3 text-center">
                                                <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                                <p class="small text-muted mb-2">Seret file kesini atau klik untuk mengupload</p>
                                                <input type="file" name="foto" class="form-control file-input d-none" id="foto" required>
                                                <button type="button" class="btn btn-sm btn-outline-primary upload-trigger" data-target="foto">Pilih File</button>
                                                <div class="file-preview mt-3 d-none">
                                                    <i class="fas fa-file-image text-primary me-2"></i>
                                                    <span class="file-name"></span>
                                                    <button type="button" class="btn btn-sm btn-outline-danger ms-2 remove-file"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="file-upload-wrapper">
                                            <label class="form-label fw-semibold">Ijazah Terakhir <span class="text-danger">*</span></label>
                                            <div class="file-upload-container border rounded p-3 text-center">
                                                <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                                <p class="small text-muted mb-2">Seret file kesini atau klik untuk mengupload</p>
                                                <input type="file" name="ijazah" class="form-control file-input d-none" id="ijazah" required>
                                                <button type="button" class="btn btn-sm btn-outline-primary upload-trigger" data-target="ijazah">Pilih File</button>
                                                <div class="file-preview mt-3 d-none">
                                                    <i class="fas fa-file-pdf text-danger me-2"></i>
                                                    <span class="file-name"></span>
                                                    <button type="button" class="btn btn-sm btn-outline-danger ms-2 remove-file"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="file-upload-wrapper">
                                            <label class="form-label fw-semibold">KTP <span class="text-danger">*</span></label>
                                            <div class="file-upload-container border rounded p-3 text-center">
                                                <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                                <p class="small text-muted mb-2">Seret file kesini atau klik untuk mengupload</p>
                                                <input type="file" name="ktp" class="form-control file-input d-none" id="ktp" required>
                                                <button type="button" class="btn btn-sm btn-outline-primary upload-trigger" data-target="ktp">Pilih File</button>
                                                <div class="file-preview mt-3 d-none">
                                                    <i class="fas fa-file-image text-success me-2"></i>
                                                    <span class="file-name"></span>
                                                    <button type="button" class="btn btn-sm btn-outline-danger ms-2 remove-file"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="file-upload-wrapper">
                                            <label class="form-label fw-semibold">Kartu Keluarga (KK) <span class="text-danger">*</span></label>
                                            <div class="file-upload-container border rounded p-3 text-center">
                                                <i class="fas fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                                                <p class="small text-muted mb-2">Seret file kesini atau klik untuk mengupload</p>
                                                <input type="file" name="kk" class="form-control file-input d-none" id="kk" required>
                                                <button type="button" class="btn btn-sm btn-outline-primary upload-trigger" data-target="kk">Pilih File</button>
                                                <div class="file-preview mt-3 d-none">
                                                    <i class="fas fa-file-pdf text-warning me-2"></i>
                                                    <span class="file-name"></span>
                                                    <button type="button" class="btn btn-sm btn-outline-danger ms-2 remove-file"><i class="fas fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-outline-secondary prev-step" data-prev="2"><i class="fas fa-arrow-left me-2"></i> Sebelumnya</button>
                                    <button type="button" class="btn btn-primary next-step" data-next="4">Selanjutnya <i class="fas fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>

                            <!-- Step 4: Konfirmasi -->
                            <div class="form-step" id="step4">
                                <h4 class="form-step-title mb-4"><i class="fas fa-clipboard-check me-2"></i>Konfirmasi Pendaftaran</h4>
                                
                                <div class="confirmation-card border rounded p-4 mb-4">
                                    <h5 class="mb-3">Ringkasan Data Pendaftaran</h5>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <strong>Nama Lengkap:</strong>
                                                <div id="confirm-nama"></div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Tempat, Tanggal Lahir:</strong>
                                                <div id="confirm-ttl"></div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Jenis Kelamin:</strong>
                                                <div id="confirm-jk"></div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Tinggi & Berat Badan:</strong>
                                                <div id="confirm-tb-bb"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <strong>Asal Sekolah:</strong>
                                                <div id="confirm-sekolah"></div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>No HP:</strong>
                                                <div id="confirm-nohp"></div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Email:</strong>
                                                <div id="confirm-email"></div>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Program Pilihan:</strong>
                                                <div id="confirm-program"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3 pt-3 border-top">
                                        <h6>Dokumen yang Diupload:</h6>
                                        <ul class="list-unstyled" id="confirm-docs">
                                            <!-- Dokumen akan ditampilkan di sini -->
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms">
                                        Saya menyatakan bahwa data yang saya berikan adalah benar dan siap bertanggung jawab atas keabsahan data tersebut.
                                    </label>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-outline-secondary prev-step" data-prev="3"><i class="fas fa-arrow-left me-2"></i> Sebelumnya</button>
                                    <button type="submit" class="btn btn-success px-4">
                                        <i class="fas fa-paper-plane me-2"></i>Kirim Pendaftaran
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar Info -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Informasi Pendaftaran</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6><i class="fas fa-clock me-2 text-primary"></i>Waktu Pendaftaran</h6>
                            <p class="small mb-0">1 Januari - 31 Maret 2024</p>
                        </div>
                        <div class="mb-3">
                            <h6><i class="fas fa-file-alt me-2 text-primary"></i>Persyaratan</h6>
                            <ul class="small ps-3 mb-0">
                                <li>Usia 17-25 tahun</li>
                                <li>Lulusan SMA/SMK sederajat</li>
                                <li>Membawa dokumen asli saat verifikasi</li>
                            </ul>
                        </div>/
                        <div class="mb-3">
                            <h6><i class="fas fa-phone me-2 text-primary"></i>Kontak</h6>
                            <p class="small mb-0">(021) 1234-5678<br>info@lpk-seikou.ac.id</p>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center py-4">
                        <i class="fas fa-users fa-2x text-primary mb-3"></i>
                        <h5>Bergabung Dengan Kami</h5>
                        <p class="small">Sudah lebih dari 1,000 alumni berhasil mengembangkan karir mereka setelah lulus dari LPK Seikou</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        :root {
            --primary: #0066ff;
            --primary-dark: #1b0c94;
            --secondary: #6c757d;
            --light: #f8f9fa;
            --success: #198754;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
            margin-top: 120px;
        }
        
        .header-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }
        
        .icon-container {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .progress-container {
            z-index: 1020;
        }
        
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e9ecef;
            z-index: 1;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 5px;
            transition: all 0.3s;
        }
        
        .step.active .step-circle {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 0 0 5px rgba(0, 102, 255, 0.2);
        }
        
        .step-label {
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .card {
            border-radius: 12px;
            overflow: hidden;
        }
        
        .form-step {
            display: none;
        }
        
        .form-step.active {
            display: block;
        }
        
        .form-step-title {
            color: var(--primary);
            font-weight: 600;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #f0f4ff;
        }
        
        .form-floating {
            margin-bottom: 0.5rem;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(0, 102, 255, 0.15);
        }
        
        .file-upload-container {
            background-color: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .file-upload-container:hover {
            background-color: #e9ecef;
            border-color: var(--primary) !important;
        }
        
        .file-preview {
            background: white;
            padding: 0.5rem;
            border-radius: 6px;
            font-size: 0.875rem;
            border: 1px solid #dee2e6;
        }
        
        .btn-primary {
            background: linear-gradient(45deg, var(--primary), var(--primary-dark));
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 102, 255, 0.4);
        }
        
        .btn-success {
            background: linear-gradient(45deg, var(--success), #0f5132);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
        }
        
        .confirmation-card {
            background-color: #f8f9fa;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: rgba(0, 102, 255, 0.1);
            color: var(--primary);
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .progress-steps::before {
                top: 15px;
            }
            
            .step-circle {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Multi-step form functionality
            const steps = document.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.step');
            
            // Show first step by default
            showStep(1);
            
            // Next step buttons
            document.querySelectorAll('.next-step').forEach(button => {
                button.addEventListener('click', function() {
                    const currentStep = getCurrentStep();
                    const nextStep = parseInt(this.getAttribute('data-next'));
                    
                    if (validateStep(currentStep)) {
                        showStep(nextStep);
                        updateProgress(nextStep);
                    }
                });
            });
            
            // Previous step buttons
            document.querySelectorAll('.prev-step').forEach(button => {
                button.addEventListener('click', function() {
                    const prevStep = parseInt(this.getAttribute('data-prev'));
                    showStep(prevStep);
                    updateProgress(prevStep);
                });
            });
            
            // File upload functionality
            document.querySelectorAll('.upload-trigger').forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.getAttribute('data-target');
                    document.getElementById(target).click();
                });
            });
            
            document.querySelectorAll('.file-input').forEach(input => {
                input.addEventListener('change', function() {
                    const file = this.files[0];
                    const preview = this.parentNode.querySelector('.file-preview');
                    const fileName = this.parentNode.querySelector('.file-name');
                    
                    if (file) {
                        fileName.textContent = file.name;
                        preview.classList.remove('d-none');
                    } else {
                        preview.classList.add('d-none');
                    }
                });
            });
            
            // Remove file
            document.querySelectorAll('.remove-file').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const preview = this.parentNode;
                    const input = preview.parentNode.querySelector('.file-input');
                    
                    preview.classList.add('d-none');
                    input.value = '';
                });
            });
            
            // Drag and drop for file upload
            document.querySelectorAll('.file-upload-container').forEach(container => {
                container.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.style.backgroundColor = '#e3f2fd';
                    this.style.borderColor = '#0066ff';
                });
                
                container.addEventListener('dragleave', function() {
                    this.style.backgroundColor = '#f8f9fa';
                    this.style.borderColor = '#dee2e6';
                });
                
                container.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.style.backgroundColor = '#f8f9fa';
                    this.style.borderColor = '#dee2e6';
                    
                    const files = e.dataTransfer.files;
                    if (files.length > 0) {
                        const input = this.querySelector('.file-input');
                        input.files = files;
                        
                        // Trigger change event
                        const event = new Event('change');
                        input.dispatchEvent(event);
                    }
                });
            });
            
            // Form submission
            document.getElementById('pendaftaranForm').addEventListener('submit', function(e) {
                if (!validateStep(4) || !document.getElementById('agreeTerms').checked) {
                    e.preventDefault();
                    alert('Harap lengkapi semua field yang wajib dan setujui persyaratan!');
                } else {
                    // Update confirmation data before submission
                    updateConfirmationData();
                }
            });
            
            // Helper functions
            function getCurrentStep() {
                return parseInt(document.querySelector('.form-step.active').id.replace('step', ''));
            }
            
            function showStep(stepNumber) {
                steps.forEach(step => {
                    step.classList.remove('active');
                });
                document.getElementById(`step${stepNumber}`).classList.add('active');
            }
            
            function updateProgress(stepNumber) {
                progressSteps.forEach((step, index) => {
                    if (index < stepNumber) {
                        step.classList.add('active');
                    } else {
                        step.classList.remove('active');
                    }
                });
            }
            
            function validateStep(stepNumber) {
                let isValid = true;
                const step = document.getElementById(`step${stepNumber}`);
                const requiredFields = step.querySelectorAll('[required]');
                
                requiredFields.forEach(field => {
                    if (!field.value) {
                        isValid = false;
                        field.classList.add('is-invalid');
                        
                        // Add invalid feedback if not exists
                        if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('invalid-feedback')) {
                            const feedback = document.createElement('div');
                            feedback.className = 'invalid-feedback';
                            feedback.textContent = 'Field ini wajib diisi';
                            field.parentNode.appendChild(feedback);
                        }
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                if (!isValid) {
                    alert('Harap lengkapi semua field yang wajib diisi!');
                }
                
                return isValid;
            }
            
            function updateConfirmationData() {
                // Update confirmation data from form inputs
                document.getElementById('confirm-nama').textContent = document.getElementById('namaLengkap').value;
                document.getElementById('confirm-ttl').textContent = 
                    document.getElementById('tempatLahir').value + ', ' + 
                    document.getElementById('tanggalLahir').value;
                document.getElementById('confirm-jk').textContent = document.getElementById('jenisKelamin').options[document.getElementById('jenisKelamin').selectedIndex].text;
                document.getElementById('confirm-tb-bb').textContent = 
                    document.getElementById('tinggiBadan').value + ' cm / ' + 
                    document.getElementById('beratBadan').value + ' kg';
                document.getElementById('confirm-sekolah').textContent = document.getElementById('asalSekolah').value;
                document.getElementById('confirm-nohp').textContent = document.getElementById('noHp').value;
                document.getElementById('confirm-email').textContent = document.getElementById('email').value;
                document.getElementById('confirm-program').textContent = document.getElementById('programPilihan').options[document.getElementById('programPilihan').selectedIndex].text;
                
                // Update document list
                const docsList = document.getElementById('confirm-docs');
                docsList.innerHTML = '';
                
                const fileInputs = document.querySelectorAll('.file-input');
                fileInputs.forEach(input => {
                    if (input.files.length > 0) {
                        const listItem = document.createElement('li');
                        listItem.className = 'mb-1';
                        listItem.innerHTML = `<i class="fas fa-check-circle text-success me-2"></i> ${input.files[0].name}`;
                        docsList.appendChild(listItem);
                    }
                });
            }
        });
    </script>
</body>
</html>
@endsection