@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Edit Crew Member')

@section('css')
    <link rel="stylesheet" href="/css/crew_member/edit.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="contact-form">
                <div class="heading-wrapper">
                    <h2 class="heading-undelined">Edit a Crew Member</h2>
                </div>
                <form action="#">
                    @csrf
                    <div class="form-group">
                        <label for="email">Enter Member Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Member Email">
                    </div>
                    <div class="form-group">
                      <label for="committee">Choose Committee</label>
                      <select class="form-control" id="committee" name="committee">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="position">Choose Position</label>
                      <select class="form-control" id="position" name="position">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="d-flex justify-content-center align-items -center">
                        <button type="submit" class="form-btn-bg button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection