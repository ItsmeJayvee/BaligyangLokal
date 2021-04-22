@extends('layouts.seller')

@section('sellercontent')
    <div class="row">
        <div class="col s12 m12 l12 center-align">
            <h5>Inventory</h5>
            <div class="divider"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <br>
                    <a href="/lokalsell3r1tems/add1t3ms" class="btn modal-trigger waves-effect blue accent-1 black-text">Add new item</a>
                </div>
                <div class="col s12 m12 l12">
                    <br>
                    <table class="highlight responsive-table">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Item name</th>
                                <th>Total Qty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection