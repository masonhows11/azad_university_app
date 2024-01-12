@extends('include.master')
@section('page_title')
    دانشگاه آزاد اسلامی
@endsection
@section('main_content')
    <div class="container">
        <div class="row create-master-wrapper">

            <div class="create-master">
                <div class="new-master-title">
                    <h3>کاربر جدید : استاد</h3>
                </div>
                <form action="{{ route('master.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">نام</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="family" class="form-label">نام خانوادگی</label>
                        <input type="text" name="family" class="form-control" id="family">
                    </div>

                    <div class="mb-3">
                        <label for="   field_of_Study" class="form-label">رشته تحصیلی</label>
                        <input type="text" name="field_of_Study" class="form-control" id="field_of_Study">
                    </div>

                    <div class="mb-3">
                        <label for="academic_rank" class="form-label">مرتبه علمی</label>
                        <input type="text" name="academic_rank" class="form-control" id="academic_rank">
                    </div>

                    <div class="mb-3">
                        <label for="educational_group" class="form-label">گروه آموزشی</label>
                        <input type="text" name="educational_group" class="form-control" id="educational_group">
                    </div>

                    <div class="mb-3">
                        <label for="college" class="form-label">دانشکده</label>
                        <input type="text" name="college" class="form-control" id="college">
                    </div>

                    <button type="submit" class="btn btn-primary">ذخیره</button>
                </form>
            </div>

        </div>
    </div>
@endsection
