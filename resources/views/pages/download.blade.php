@extends('include.master')
@section('page_title')
    دانشگاه آزاد اسلامی
@endsection
@section('main_content')
    <div class="main-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col general-info">

                    <div class="custom-card ">
                        <div class="info-header">
                            <p> دانلود فایل </p>
                        </div>

                        <div class="custom-card-body download-content">

                            <div class="file-image">
                                <img src="{{ asset('images/folders.png') }}" alt="folder-image">
                            </div>
                            <div class="file-info">
                                <p>ویدئو های کلاس های آموزشی از راه دور</p>
                                <p class="file-count">تعداد فایل : 2 عدد</p>
                                <p class="file-view">تعداد بازدید : 78</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

