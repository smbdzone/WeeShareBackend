@extends('layouts.master')
@section('content')
<div class="media-uploaded shadow-lg p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-12">
            <img src="../assets/img/logo.png" alt="" class="img-fluid company-logo">
        </div>
    </div>
    <form action="/media" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="media-btn-section">
                    <button class="btn-media"><i class="fa-regular fa-image media-icon"></i>Photo</button></li>
                    <button class="btn-media"><i class="fa-solid fa-video media-icon"></i>Video</button></li>
                    <button class="btn-media"><i class="fa-solid fa-circle-notch media-icon"></i>Store</button></li>
                    <button class="btn-media"><i class="fa-solid fa-pen-ruler media-icon"></i>Tweet</button></li>
                    <button class="btn-media"><i class="fa-solid fa-pen-to-square media-icon"></i>Text</button></li>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 imgUp">
                <img src="{{asset('assets/img/post_img.png')}}" alt="" class="img-fluid add-media-img @error('media_img') is-invalid @enderror" id="output">
                <label class="btn btn-media-upload">
                    Upload
                    <input type="file" class="uploadFile img" name="media_img" onchange="loadFile(event)" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                </label>
                @error('media_img')
                <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-8">
                <textarea class="media-content is-invalid @error('media_content') is-invalid @enderror" name="media_content">  </textarea>

                @error('media_content')
                <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <select class="select2  country form-control custom-form-control  @error('country') is-invalid @enderror" name="country[]"   multiple="multiple">
                    <option value="">Select Country</option>
                </select>
                @error('country')
                <p class="error-text">{{ $message }}</p>
                @enderror

            </div>

            <div class="col-md-3">
                <select class="select2  form-control custom-form-control  @error('city') is-invalid @enderror" name="city[]"  multiple="multiple">
                    <option value="">Select Country</option>
                    <option value="lahore">Lahore</option>
                    <option value="karachi">Karachi</option>
                    <option value="multan">Multan</option>
                    <option value="islamabad">Islamabad</option>
                    <option value="faisalabad">Faisalabad</option>
                </select>
                @error('city')
                <p class="error-text">{{ $message }}</p>
                @enderror

            </div>

            <div class="col-md-3">
                <select name="gender" id="" class="select2 form-control custom-form-control  @error('gender') is-invalid @enderror">
                    <option value="">Select Genter </option>
                    <option value="male">Male</option>
                    <option value="Female">Female</option>
                </select>
                @error('gender')
                <p class="error-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-3">
                <select name="age" id="" class="select2 form-control custom-form-control  @error('age') is-invalid @enderror">
                    <option value="">Select Age</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="36-45">36-45</option>
                    <option value="46-60">46-60</option>
                    <option value="60 and above">60 and above</option>
                </select>
                @error('age')
                <p class="error-text">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-6"></div>
            <div class="col-md-6 text-right">
                <input type="date" class="form-control date-input  @error('post_date') is-invalid @enderror " name="post_date">
                @error('post_date')
                    <p class="error-text">{{ $message }}</p>
                 @enderror
            </div>
          
        </div>

        <div class="row mt-5 " style="text-align: right;">
            <div class="col-md-12">

                <button type="button"  class="btn btn-light">Discard</button>
                <button type="submit" class="btn btn-login ">Save</button>

            </div>
        </div>

    </form>
</div>


@endsection

@push('script')
<script>

</script>
@endpush