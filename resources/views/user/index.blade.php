@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <form action="{{ url("/user") }}">
                                <input type="text" name="search" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
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
                            <!--end::Svg Icon-->Add User</button>
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
                                        <h2 class="fw-bolder">Add User</h2>
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
                                        <form id="kt_modal_add_user_form" class="form" action="{{ url("/user") }}" method="POST">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Nama</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="name" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="email" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">No Telephone</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" name="no_telephone" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Password</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="password" minlength="8" name="password" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                    <!--end::Input-->
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
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">nama</th>
                                <th class="min-w-125px">email</th>
                                <th class="min-w-125px">Telp</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">

                            @foreach ($user as $item)

                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telephone }}</td>                               
                                 <td class="text-end">
                                     <p href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                     <span class="svg-icon svg-icon-5 m-0">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                             <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                         </svg>
                                     </span>
                                     <!--end::Svg Icon--></p>
                                     <!--begin::Menu-->
                                     <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                         <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <span class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#modal_show">Show</span>
                                        </div>
                                         <div class="menu-item px-3">
                                            <span class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#modal_edit">Edit</span>
                                         </div>
                                         <div class="menu-item px-3">
                                             <a href="{{ url("/user/$item->id") }}" class="menu-link px-3" >Delete</a>
                                         </div>
                                     </div>
                                     <!--end::Menu-->
                                 </td>
                                 <!--end::Action=-->
                             </tr>
                             

                             <div class="modal fade"  id="modal_show" tabindex="-1">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder">Detail User</h2>
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
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Nama</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="name"  disabled value="{{ $item->name }}" disabled class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>

													<div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="email" name="email"  disabled value="{{ $item->email }}" disabled class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>

													<div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">No telephone</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" name="no_telephone" disabled value="{{ $item->no_telephone }}" disabled class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>
    
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>


                            {{--  --}}
                            <div class="modal fade"  id="modal_edit" tabindex="-1">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder">Edit User</h2>
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
                                            <form method="POST" action="{{ url("/user/$item->id") }}" enctype="multipart/form-data">
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                    <!--begin::Input group-->
													 <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Nama</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="name" value="{{ $item->name }}" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="email" name="email" value="{{ $item->email }}" required class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>
    
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Telephone</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" name="no_telephone" required value="{{ $item->no_telephone }}" class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>

													<div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Password ( Isi jika ingin mengganti )</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="password" name="password" minlength="8" class="form-control form-control-solid mb-3 mb-lg-0" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
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
                            
                            <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
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