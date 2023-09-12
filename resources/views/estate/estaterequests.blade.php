@extends('layouts.estate')

@section('estatecontent')

<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true"  data-show-refresh="true" data-key-events="true"  data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
    <thead>
        <tr>
            <th>AssetNo</th>
            <th>Asset Description</th>
            <th>Department</th>
            <th>Registered Date</th>
            <th>Cost</th>
            <th>Condition</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $biologicalAssets = [
            [
                'AssetNo' => '001',
                'AssetDescription' => 'Asset Description 1',
                'Department' => 'Department 1',
                'RegisteredDate' => '2023-09-07',
                'Cost' => 1000,
                'Condition' => 'Good',
                'Quantity' => 5,
            ],
            [
                'AssetNo' => '002',
                'AssetDescription' => 'Asset Description 2',
                'Department' => 'Department 2',
                'RegisteredDate' => '2023-09-08',
                'Cost' => 1500,
                'Condition' => 'Excellent',
                'Quantity' => 10,
            ],
            // Add more data as needed
        ];
        @endphp

        @foreach ($biologicalAssets as $asset)
        <tr>
            <td>{{ $asset['AssetNo'] }}</td>
            <td>{{ $asset['AssetDescription'] }}</td>
            <td>{{ $asset['Department'] }}</td>
            <td>{{ $asset['RegisteredDate'] }}</td>
            <td>{{ $asset['Cost'] }}</td>
            <td>{{ $asset['Condition'] }}</td>
            <td>{{ $asset['Quantity'] }}</td>
            <td><button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button> <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- ... The rest of your code ... -->
@endsection
