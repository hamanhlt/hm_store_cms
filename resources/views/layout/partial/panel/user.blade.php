<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5" kt-hidden-height="40" style="">
        <h3 class="font-weight-bold m-0">Thông tin người dùng
            <small class="text-muted font-size-sm ml-2 d-none">Tính năng thông báo chưa hoạt động</small></h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y" style="height: 325px; overflow: hidden;">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-120">
                <div
                    class="image-input image-input-empty image-input-outline mr-5"
                    id="kt_image_5">
                    <div class="image-input-wrapper">
                        <a href="#"
                           class=" right-0 btn btn-circle btn-hover-text-primary btn-icon btn-shadow btn-white btn-xs position-absolute pr-5 pt-5 zindex-3"
                           data-action="hover" data-toggle="tooltip" title="" data-original-title="Thay đổi ảnh avatar">
                            <i class="fa fa-pen icon-sm pb-5 pl-5 position-absolute text-muted"></i>
                        </a>
                        <div class="image-input-wrapper overflow-hidden">
                            @php
                                $avatarUrl = Helper::getDataFiles(Auth::user(),'avatar', false);
                                $fullname = Auth::user()['fullname']??'';
                                $username = Auth::user()['username']??'';
                                $showName = $fullname??$username;
                            @endphp
                            @if(empty($avatarUrl))
                                <span class="symbol symbol-100 symbol-light-success">
                                    <span class="font-size-h1 font-weight-bold symbol-label">
                                      {{ucfirst(substr($showName, 0,1))}}
                                    </span>
                                </span>
                            @else
                                <div class="symbol symbol-100 mr-5">
                                    <div class="symbol-label"
                                         style="background-image:url('{{asset($avatarUrl)}}')"></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <a href="javascript:;"
                   class="text-dark-75">Tên đầy đủ:<span
                        class="font-weight-bold font-size-h6"> {{$fullname}}</span></a>
                <div class=" mt-1">Phòng/ban: <span
                        class="font-weight-bold">{{session()->get('userGroupType')['name']??''}}</span></div>
                <div class=" mt-1">Nhóm người dùng: <span
                        class="font-weight-bold">{{session()->get('userGroup')['name']??''}}</span></div>

                <div class="navi mt-2">
                    <a href="javascript:;" class="navi-item">
                        <span class="text-muted font-size-base d-block mr-3">{{'@'.$username}}</span>
                    </a>
                    <a href="javascript:;" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1 mx-1">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </span>
                            <span class="navi-text text-muted text-hover-primary">{{Auth::user()['email']??''}}</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="d-block mt-2">
            <a href="#"
               class="btn btn-sm btn-light-primary font-weight-bolder py-2 mb-3 mr-4 px-5">Thay đổi thông tin</a>
            <a href="#"
               class="btn btn-sm btn-light-primary font-weight-bolder py-2 mb-2 px-5">Đổi mật khẩu</a>
            <a href="#"
               class="btn btn-sm btn-light-warning font-weight-bolder py-2 px-5 ">Đăng xuất</a>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <!--end::Nav-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->
        <!--begin::Notifications-->
        <div class="d-none">
            <!--begin:Heading-->
            <h5 class="mb-5">Chức năng thông báo đang được xây dựng</h5>
            <!--end:Heading-->
            <!--begin::Item-->
            <div class="d-flex align-items-center bg-light-info rounded p-5 d-none">
						<span class="svg-icon svg-icon-info mr-5">
							<span class="svg-icon svg-icon-lg">
								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Attachment2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                     version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<path
                                            d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                                            fill="#000000" opacity="0.3"
                                            transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)"></path>
										<path
                                            d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                                            fill="#000000"
                                            transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)"></path>
										<path
                                            d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                                            fill="#000000" opacity="0.3"
                                            transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)"></path>
										<path
                                            d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                                            fill="#000000" opacity="0.3"
                                            transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)"></path>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
						</span>
                <div class="d-flex flex-column flex-grow-1 mr-2">
                    <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Comming
                        soon</a>
                </div>
            </div>
            <!--end::Item-->
        </div>
        <!--end::Notifications-->
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 325px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 119px;"></div>
        </div>
    </div>
    <!--end::Content-->
</div>
