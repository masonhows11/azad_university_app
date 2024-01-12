@extends('include.master')
@section('page_title')
    دانشگاه آزاد اسلامی
@endsection
@section('main_content')

    <div class="main-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card single-item-master-info">

                        <div class="card-body single-item-master-image">
                            <div>

                                <div class="single-image">
                                    <div>
                                        <img src="{{ asset('images/no-image-icon.png') }}" class="img-thumbnail"
                                             alt="single-m">
                                    </div>
                                </div>

                                <div>
                                    <ul class="single-master-info-list">
                                        <li>گروه آموزشی : <span class="master-info-value">{{ $master->educational_group }}</span></li>
                                        <li>دانشکده : <span class="master-info-value">{{ $master->college }}</span></li>
                                        <li>رشته تحصیلی : <span class="master-info-value">{{ $master->field_of_Study }}</span></li>
                                        <li>مرتبه علمی : <span class="master-info-value">{{ $master->academic_rank }}</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="card-body ">
                            <ul class="single-master-links">
                                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>صفحه اصلی</a></li>
                                <li><a href="{{ route('biography') }}"><i class="fa fa-edit"></i>بیوگرافی</a></li>
                                <li><a href="{{ route('weekly.schedule') }}"><i class="fas fa-calendar-alt"></i>برنامه هفتگی</a></li>
                                <li><a href="{{ route('download') }}"><i class="fas fa-download"></i>دانلود   فایل</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fas fa-envelope"></i>ارتباط با   استاد</a></li>
                                <li><a href="{{ route('elanat') }}"><i class="fas fa-bullhorn"></i>اطلاعیه ها و   اعلانات</a></li>
                                <li><a href="{{ route('books') }}"><i class="fas fa-book"></i>کتاب ها</a></li>
                                <li><a href="{{ route('lectures') }}"><i class="fas fa-users"></i>سخنرانی ها</a></li>
                                <li><a href="{{ route('tahgdirnameha') }}"><i class="fas fa-medal"></i>تقدیر نامه ها</a></li>
                                <li><a href="{{ route('payannameh') }}"><i class="fas fa-user-graduate"></i>پایان نامه ها</a></li>
                                <li><a href="{{ route('not.found') }}"><i class="far fa-image"></i>گالری   تصاویر</a></li>
                                <li><a href="{{ route('not.found') }}"><i class="fas fa-cubes"></i>سوابق  اجرایی</a></li>
                                <li><a href="{{ route('not.found') }}"><i class="fas fa-flask"></i>پروژ ه های  تحقیقاتی</a></li>
                                <li><a href="{{ route('not.found') }}"><i class="fas fa-flask"></i>طرح های  پژوهشی</a></li>
                                <li><a href="{{ route('not.found') }}"><i class="fas fa-external-link-alt"></i>طرح  های پژوهشی برون دانشگاهی</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

