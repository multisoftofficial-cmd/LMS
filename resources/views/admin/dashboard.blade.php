@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{ $totalStudents }}</h3>
                    <p class="text-muted">Total Students</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{ $totalEnrollments }}</h3>
                    <p class="text-muted">Total Enrollments</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{ $totalCertificates }}</h3>
                    <p class="text-muted">Certificates Issued</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{ $activePrograms }}</h3>
                    <p class="text-muted">Active Programs</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Enrollments</h5>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Course</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentEnrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->user->name }}</td>
                                    <td>{{ $enrollment->course->name }}</td>
                                    <td>{{ $enrollment->created_at->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Certificates</h5>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Course</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentCertificates as $certificate)
                                <tr>
                                    <td>{{ $certificate->user->name }}</td>
                                    <td>{{ $certificate->course->name }}</td>
                                    <td>{{ $certificate->issue_date->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
