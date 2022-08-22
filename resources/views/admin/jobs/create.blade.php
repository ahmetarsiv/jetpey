@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Crate Job</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name">
                            <label for="floatingFirst">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="description">
                            <label for="floatingFirst">Description</label>
                        </div>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{route('admin.job.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>Create Job</title>
@endsection

@section('js')
    <script>
        const actionUrl = '{{route('admin.job.store')}}';
        const backUrl = '{{route('admin.job.index')}}';
    </script>
@endsection
