@extends('manager/managerLayout')

@section('managerContent')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="feedback-header-text">Register New Brand</span>
                            <a href="/manager-brands" class="create-button"><button
                                    class="btn my-button">BACK</button></a>
                        </div>
                        <div class="card-body card-block">
                            <form method="POST" action="/manager-brands/create-brand" enctype="multipart/form-data"
                                class="form-horizontal myRegisterForm">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" value="{{ old('brand_name') }}"
                                            name="brand_name" placeholder="Example: Honda "
                                            class="form-control @error('brand_name') is-invalid @enderror my-input">
                                        @error('brand_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="form-text text-muted">Enter Brand's Name</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Brand Logo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="brand_image"
                                            class="form-control-file @error('brand_image') is-invalid @enderror my-input">
                                        @error('brand_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="brand_description" id="textarea-input" rows="9"
                                            placeholder="Example: Founded by Mr..."
                                            class="form-control @error('brand_description') is-invalid @enderror my-input">{{ old('brand_description') }}</textarea>
                                        @error('brand_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="form-text text-muted">Describe Brand</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Official Site</label>
                                        <small class="form-text text-muted">(Optional)</small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" value="{{ old('brand_link') }}"
                                            name="brand_link" placeholder="Example: http:\\... "
                                            class="form-control @error('brand_link') is-invalid @enderror my-input">
                                        @error('brand_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="form-text text-muted">Enter Brand's Official Site Link</small>
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