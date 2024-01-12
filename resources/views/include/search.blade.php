<div class="search-section">
    <div class="container">

        <form action="{{ route('search') }}" method="post" >
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <select class="form-select" name="field_of_Study" aria-label="Default select example">
                        <option selected>نمایش بر اساس رشته تحصیلی</option>
                        <option value="رشته معماری">رشته معماری</option>
                        <option value="رشته عمران">رشته عمران</option>
                        <option value="رشته راه و ساختمان">رشته راه و ساختمان</option>
                        <option value="رشته کامپیوتر نرم افزار">رشته کامپیوتر نرم افزار</option>
                        <option value="مدیریت آموزشی">مدیریت آموزشی</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-primary w-100">جستجو</button>
                </div>
            </div>
        </form>

    </div>
</div>
