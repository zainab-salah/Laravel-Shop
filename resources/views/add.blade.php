@extends('layouts.app')
@section('content')

<div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7 game-single-content">

                    <form enctype="multipart/form-data" method="POST" action=/add>
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label style="color: black;" >Product Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: black;" >Product price</label>
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: black;" >Product Image</label>
                                        <br>
                                        <input type="file" name="file">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: black;" >Description</label>
                                        <br>
                                            <textarea class="form-control" name="description" id="" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="pull-right site-btn" type="submit" >Upload</button>
                                    </div>                     
                                </form>
                </div>
            </div>
</div>
@endsection