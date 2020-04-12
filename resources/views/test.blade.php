@extends('layout')

@section('title', 'Home Page')

@section('content')
<div class="container">
<form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-md-6">
            <input type="file" name="image" class="form-control">
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>

    </div>
</form>
</div>
    <section class="section">
        <div class="container">
            <h1>A heading</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quia enim esse nobis doloribus facere molestiae dolor quisquam corrupti veritatis, amet sapiente odio numquam voluptas non accusamus porro earum vitae.Voluptas perferendis voluptatum explicabo ea! Expedita optio iusto magnam tempora voluptatum non fugiat numquam distinctio repellendus aperiam. Labore laborum sint praesentium magni, amet vel quae sit in quis molestias porro?</p>
        </div>
    </section>
    <section class="section section-grey">
        <div class="container">
            <h1>A heading</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quia enim esse nobis doloribus facere molestiae dolor quisquam corrupti veritatis, amet sapiente odio numquam voluptas non accusamus porro earum vitae.Voluptas perferendis voluptatum explicabo ea! Expedita optio iusto magnam tempora voluptatum non fugiat numquam distinctio repellendus aperiam. Labore laborum sint praesentium magni, amet vel quae sit in quis molestias porro?</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h1>A heading</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quia enim esse nobis doloribus facere molestiae dolor quisquam corrupti veritatis, amet sapiente odio numquam voluptas non accusamus porro earum vitae.Voluptas perferendis voluptatum explicabo ea! Expedita optio iusto magnam tempora voluptatum non fugiat numquam distinctio repellendus aperiam. Labore laborum sint praesentium magni, amet vel quae sit in quis molestias porro?</p>
        </div>
    </section>
@endsection