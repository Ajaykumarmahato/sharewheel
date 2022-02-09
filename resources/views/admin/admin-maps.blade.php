@extends('admin/adminLayout')

@section('adminContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">Find our Location in Map</span>
                    </div>
                    <div class="row card-body card-block">
                        <iframe class="mb-5"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27689214012!2d85.29111326133645!3d27.709031933406965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1920161735ef%3A0x6c089431dddc44e9!2sTech%40rt%20Trekkies%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1590134578103!5m2!1sen!2snp"
                            width="100%" height="600" frameborder="0" style="border: 0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection