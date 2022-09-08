@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Головна сторінка</div>
        <div class="card-body">

            <div class="card-body">

                <form method="get" enctype="multipart/form-data">
                    <input type="file" name="file" id="file" accept=".csv" style="display:none;"/>
                    <label for="file">Click me to upload file</label>
                    <input type="submit" value="Send">
                </form>

                <br>
                <form action="" method="get">
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Clear All Records</button>

                </form>

                <a href="/">View results</a>
            </div>

            </hr>

        </div>
    </div>
