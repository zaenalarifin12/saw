@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="">
                <!--begin::Card header-->
                <div class=" border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->

                        <p class="ms-10">Daftar HP </p> <br/>
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                           
                            <!--end::Svg Icon-->
                        <form class="d-flex ms-10" action="{{ url("/hp") }}" method="GET">
                            <input name="nama" class="form-control w-75" value="{{request()->get('nama') ? request()->get('nama') : ""}}" />
                            <button class="ms-4 btn btn-sm btn-secondary">Cari</button>
                        </form>    
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user_a">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add HP</button>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        
                        <!--end::Modal - New Card-->
                        <!--begin::Modal - Add task-->
                        <div class="modal fade"  id="kt_modal_add_user_a" tabindex="-1">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Add HP</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary close" data-bs-dismiss="modal" aria-label="Close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                    <rect x="7.41422" y="6" width="16"ƒ height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_add_user_form" class="form" action="{{ url("/hp") }}" method="POST" enctype="multipart/form-data">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="d-block fw-bold fs-6 mb-5">Foto HP</label>
                                                    <!--end::Label-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/svg/avatars/blank.svg);"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="image" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Nama</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="nama" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Harga</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="harga" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Ongkos Kirim</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="ongkos_kirim" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
                                                </div>

                                               
                                                <div class="mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Internal</label>
                                                    <input type="number" name="internal" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                </div>


                                                <div class="mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Camera</label>
                                                    <input type="number" name="kamera" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                </div>

                                                <div class="mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Ram</label>
                                                    <input type="number" name="ram" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                </div>

                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" >
                                                    <span class="indicator-label">Submit</span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">

                    <div class="d-flex flex-wrap">

                    @foreach ($alternatif as $item)

                    <div class="card w-25 p-5 m-5 d" >
                        
                        <img src="{{ asset("storage/$item->img") }}" />
                        <p>{{ $item->nama }}</p>
                        <p>Harga : Rp. {{ $item->harga }}</p>
                        <p>Ongkos: Rp. {{ $item->ongkos_kirim }}</p>
                        <p>Internal: {{ $item->internal }}</p>
                        <p>Kamera: {{ $item->kamera }}</p>

                        <div class="d-flex ">
                            <div class="menu-item">
                                <span class="menu-link w-100 btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_edit-{{ $item->id }}">Edit</span>
                             </div>
                             <div class="menu-item px-3">
                                <a href="{{ url("/hp/$item->id") }}" class="menu-link px-3 btn btn-sm btn-danger" >Delete</a>
                            </div>
    
                        </div>
                        
                    </div>


                    <div class="modal fade"  id="modal_edit-{{$item->id}}" tabindex="-1">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Edit HP</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary close" data-bs-dismiss="modal" aria-label="Close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16"ƒ height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form method="POST" action="{{ url("/hp/$item->id") }}" enctype="multipart/form-data">
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="d-block fw-bold fs-6 mb-5">Foto HP</label>
                                                <!--end::Label-->
                                                <!--begin::Image input-->
                                                <img src="{{ asset("storage/$item->img") }}" width="200" height="200"  style="object-fit: 'cover', border-radius: '10px'" />
                                                <!--end::Image input-->
                                                <!--begin::Hint-->
                                                <!--end::Hint-->
                                            </div>

                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="d-block fw-bold fs-6 mb-5">Isi Jika Mau mengganti gambar Foto HP</label>
                                            
                                            
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/svg/avatars/blank.svg);"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="image" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                        </div>

                                        
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Nama</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="nama" value="{{ $item->nama }}" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Harga</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" name="harga" value="{{ $item->harga }}" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                <!--end::Input-->
                                            </div>

                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Ongkos Kirim</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" name="ongkos_kirim" required value="{{ $item->ongkos_kirim }}" class="form-control form-control-solid mb-3 mb-lg-0" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <div class="mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Internal</label>
                                                <input type="number" name="internal" required value="{{ $item->internal }}" class="form-control form-control-solid mb-3 mb-lg-0" />
                                            </div>


                                            <div class="mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Kamera</label>
                                                <input type="number" name="kamera" required value="{{ $item->kamera }}" class="form-control form-control-solid mb-3 mb-lg-0" />
                                            </div>


                                            <div class="mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Ram</label>
                                                <input type="number" name="ram" required value="{{ $item->ram }}" class="form-control form-control-solid mb-3 mb-lg-0" />
                                            </div>

                                            <div class="text-center pt-15">
                                                @csrf
                                                @method("PUT")
                                                <button type="submit" class="btn btn-primary" >
                                                    <span class="indicator-label">Edit</span>
                                                </button>
                                            </div>

                                        </div>
                                        <!--end::Scroll-->
                                    </form>
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>

                    @endforeach

                </div>

                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection

@section('script')
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).attr('width', '200px')
                            .css({'margin-top':'20px'})
                            .appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
    });

    $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).attr('width', '200px')
                            .css({'margin-top':'20px'})
                            .appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-edit').on('change', function() {
                imagesPreview(this, 'div.gallery-edit');
            });
    });

    </script>
@endsection