@extends('include.master')
@section('page_title')
    دانشگاه آزاد اسلامی
@endsection
@section('main_content')

    <div class="main-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col general-info">

                    <div class="custom-card">
                        <div class="info-header">
                            <p> کتاب ها</p>
                        </div>

                        <div class="custom-card-body book-content">

                            <div class="file-image">
                                <img src="{{ asset('images/book.png') }}" alt="folder-image">
                            </div>
                            <div class="file-info">
                                <p>صلاحیت های حرفه های معملی</p>
                                <ul class="book-info-list">
                                    <li>زبان اصلی: <span class="master-info-value">فارسی</span></li>
                                    <li>نوع : <span class="master-info-value">تالیف</span></li>
                                    <li>سال چاپ : <span class="master-info-value">1392</span></li>
                                    <li>ناشر : <span  class="master-info-value">دانشگاهی</span></li>
                                    <li> نام ناشر : <span  class="master-info-value">داشنگاه ازاد اسلامی واحد خوراسگان</span></li>
                                    <li> تعداد صفحات: <span  class="master-info-value"></span></li>
                                    <li>قطع کتاب : <span  class="master-info-value">وزیری</span></li>
                                    <li>شماره شابک : <span  class="master-info-value"></span></li>
                                    <li>تیراژ: <span  class="master-info-value"></span></li>
                                    <li>نوبت چاپ : <span  class="master-info-value">1</span></li>
                                    <li>نام همکاران با احتساب نام متقاظی : <span  class="master-info-value">فریبا کریمی</span></li>
                                </ul>
                            </div>

                        </div>

                        <div class="custom-card-body book-content">

                            <div class="file-image">
                                <img src="{{ asset('images/book.png') }}" alt="folder-image">
                            </div>
                            <div class="file-info">
                                <p>سیاست گذاری در آموزش و پرورش تا هزاره سوم</p>
                                <ul class="book-info-list">
                                    <li>زبان اصلی: <span class="master-info-value">فارسی</span></li>
                                    <li>نوع : <span class="master-info-value">تالیف</span></li>
                                    <li>سال چاپ : <span class="master-info-value">1384</span></li>
                                    <li>ناشر : <span  class="master-info-value"> غیر دانشگاهی </span></li>
                                    <li> نام ناشر : <span  class="master-info-value">انتشارات فرامتن</span></li>
                                    <li> تعداد صفحات: <span  class="master-info-value"></span></li>
                                    <li>قطع کتاب : <span  class="master-info-value">وزیری</span></li>
                                    <li>شماره شابک : <span  class="master-info-value"></span></li>
                                    <li>تیراژ: <span  class="master-info-value"></span></li>
                                    <li>نوبت چاپ : <span  class="master-info-value">1</span></li>
                                    <li>نام همکاران با احتساب نام متقاظی : <span  class="master-info-value">فریبا کریمی</span></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

