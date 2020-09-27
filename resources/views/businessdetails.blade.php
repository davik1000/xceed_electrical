@extends('layouts.app')

@section('title', 'Business Details')

@section('content')
<!-- Button trigger modal -->
<div class=" p-3 mb-5 bg-white rounded border">
    <div>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
    </div>

    <div class='table-responsive'>
        <h3>Business Details</h3>
        <table id="business_details_table" class="display table table-hover table-sm mt-1">
            <thead>
                <tr>
                    <th scope="col">Business Name</th>
                    <th scope="col">Address Line 1</th>
                    <th scope="col">Address Line 2</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Fax</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($businessDetails as $businessDetail)
                <tr>
                    <td>{{ $businessDetail->customer_name }}</td>
                    <td>{{ $businessDetail->customer_company }}</td>
                    <td>{{ $businessDetail->customer_phone }}</td>
                    <td>{{ $businessDetail->customer_email }}</td>
                    <td>{{ $businessDetail->customer_address }}</td>
                    <td>{{ $businessDetail->discount->discount_name }}</td>
                    <td><a href="{{action('BusinessDetailController@edit', $businessDetail['pk_businessdetail_id'])}}">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop