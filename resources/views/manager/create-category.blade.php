@extends('manager/managerLayout')

@section('managerContent')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="feedback-header-text">Register New Category</span>
                            <a href="/manager-categories" class="create-button"><button
                                    class="btn my-button">BACK</button></a>
                        </div>
                        <div class="card-body card-block">
                            <form method="POST" action="/manager-categories/create-category"
                                enctype="multipart/form-data" class="form-horizontal myRegisterForm">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" value="{{ old('category_title') }}"
                                            name="category_title" placeholder="Example: SUV "
                                            class="form-control @error('category_title') is-invalid @enderror my-input">
                                        @error('category_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="form-text text-muted">Enter Category's Name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                        <small class="form-text text-muted">(Optional)</small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="category_description" id="textarea-input" rows="9"
                                            placeholder="Example: About Category"
                                            class="form-control @error('category_description') is-invalid @enderror my-input">{{ old('category_description') }}</textarea>
                                        @error('category_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="form-text text-muted">Describe Category</small>
                                    </div>
                                </div>
                                <div class="div mt-4">
                                    <button type="submit" class="myRegisterButton btn my-button">
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                    <button type="submit" class="btn my-button" id="spinner-myRegisterButton" href="#"
                                        role="button">
                                        <img src="{{ asset('/images/loading/spinner.gif') }}" alt="spinner"
                                            class="spinner">
                                        Submitting...
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection