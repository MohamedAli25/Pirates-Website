@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Crew Members')

@section('css')
    <link rel="stylesheet" href="/css/crew_member/show_all.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Crew Members</h2>
            </div>
            <h3>Number of Crew Members: {{ count($crewMembers) }}</h3>
            <table class="table table-hover" style="width:100%; overflow: scroll;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Committee</th>
                  <th scope="col">Position</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($crewMembers as $crewMember)
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="/crew-member/{{ $crewMember->id }}">{{ $crewMember->user()->name() }}</a></td>
                    <td>{{ $crewMember->user()->email }}</td>
                    <td>{{ $crewMember->committee()->name }}</td>
                    <td>{{ $crewMember->position()->name }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection