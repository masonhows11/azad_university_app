@extends('include.master')
@section('page_title')
    دانشگاه آزاد اسلامی
@endsection
@section('main_content')
    <div class="main-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card general-info">

                        <div class="info-header">
                            <p>ارتباط با استاد</p>
                        </div>

                        <div class="contact-form">
                            <form action="#">

                                <div class="form-element">
                                    <label for="name">نام :</label>
                                    <input type="text" id="name" name="name" ><br>
                                </div>

                                <div class="form-element">
                                    <label for="email">ایمیل :</label>
                                    <input type="email" id="email" name="email" ><br>
                                </div>

                                <div class="form-element">
                                    <label for="fname">پیام :</label>
                                    <textarea name="message" id="message" cols="38" rows="12"></textarea><br>
                                </div>

                                <div class="form-element">
                                    <label for="myfile">فایل ضمیمیه</label>
                                    <input type="file" id="myfile" name="myfile"><br>
                                </div>

                                <input class="submit-button" type="submit" value="ارسال پیام">

                            </form>
                        </div>

                        <div class="address-section">

                            <div class="address-content">
                                <p>آدرس: دانشکده علوم تربیتی و روانشناسی طبقه دوم</p>
                            </div>

                            <div class="message-tracking">
                                <div>  پیگیری پیام ارسالی <input type="text" class="message-tracking-input">  <input type="button" class="message-tracking-button" value="بررسی پاسخ"> </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

