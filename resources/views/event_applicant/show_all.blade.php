@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | {{ $event->name }} Applicants')

@section('css')
    <link rel="stylesheet" href="/css/event_applicant/show_all.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">{{ $event->name }} Applicants</h2>
            </div>
            <h3>Number of Applicants: {{ count($eventApplicants) }}</h3>
            <table class="table table-hover" style="width:100%; overflow: scroll;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Time Slot</th>
                  <th scope="col">First Preference</th>
                  <th scope="col">Second Preference</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($eventApplicants as $eventApplicant)
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="/event-applicant/{{ $eventApplicant->id }}">{{ $eventApplicant->user()->name() }}</a></td>
                    <td>{{ $eventApplicant->timeSlot()->name }}</td>
                    <td>{{ $eventApplicant->firstPreference()->name }}</td>
                    <td>{{ $eventApplicant->secondPreference()->name }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection