@extends('layouts.seller')

@section('sellercontent')
<div class="col s12 m12 l12 center-align">
    <h5>Add new item</h5>
    <div class="divider"></div>
</div>
<div class="container">
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-field col s12 m6 l6">
                <input type="text" name="itemname" id="itemname" class="@error('itemname') is-invalid @enderror">
                <label for="itemname">Item name</label>
                @error('itemname')
                    <p class="red-text" style="font-size: small">{{ $message }}</p>
                @enderror
            </div>
            <div class="input-field col s12 m6 l6">
                <select name="itemcategory" id="itemcategory" class="@error('itemcategory') is-invalid @enderror">
                    <option value="" disabled selected>Select category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <label for="itemcategory">Item category</label>
                @error('itemcategory')
                    <p class="red-text" style="font-size: small">{{ $message }}</p>
                @enderror
            </div>
            <div class="input-field col s12 m4 l4">
                <input type="number" name="itemquantity" id="itemquantity" class="@error('itemquantity') is-invalid @enderror">
                <label for="itemquantity">Stocks available</label>
                @error('itemquantity')
                    <p class="red-text" style="font-size: small">{{ $message }}</p>
                @enderror
            </div>
            <div class="input-field col s12 m4 l4">
                <input type="number" name="itemprice" id="itemprice" class="@error('itemprice') is-invalid @enderror">
                <label for="itemprice">Item price</label>
                @error('itemprice')
                    <p class="red-text" style="font-size: small">{{ $message }}</p>
                @enderror
            </div>
            <div class="file-field input-field col s12 m4 l4">
                <div class="btn blue accent-1">
                    <span class="black-text">File</span>
                    <input type="file" name="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" id="itempics" type="text" placeholder="Upload 3 photos">
                    <label for="itempics">Item photos</label>
                </div>
            </div>
            <div class="col s12 m12 l12">
                <p>Select colors <b>(If applicable to item)</b>:</p>
                @foreach ($colors as $color)
                    <div class="col s3 m3 l3">
                        <label>
                            <input type="checkbox" name="colors[]">
                            <span style="font-size: x-small">{{ $color->color }}</span>
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="col s12 m12 l12">
                <p>Select sizes <b>(If applicable to item)</b>:</p>
                @foreach ($sizes as $size)
                    <div class="col s4 m4 l4">
                        <label>
                            <input type="checkbox" name="sizes[]">
                            <span style="font-size: x-small">{{ $size->size }}</span>
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="input-field col s12 m12 l12 center-align">
                <br>
                <button class="btn waves-effect blue accent-1 black-text">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection